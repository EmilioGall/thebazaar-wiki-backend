@extends('layouts.admin')

@section('content')

   <div class="container pt-4 text-custom-secondary">

      <div class="mt-2">

         @include('partials.session_message')

      </div>

      {{-- Index Header --}}
      <div class="row justify-content-between align-items-center border-bottom">

         {{-- Index Title --}}
         <div class="col-12 col-sm-6">

            <h2 class="fw-1 fs-2 text-main">All Items in The Bazaar</h2>

         </div>

         {{-- Pagination Form --}}
         <form action="{{ route('admin.items.index') }}" method="GET"
            class="col-6 d-flex justify-content-end align-items-center text-custom-secondary">
            @csrf

            <div class="input-group d-flex justify-content-end h-50">

               <select class="input-group-text" name="per_page" id="per_page">

                  <option value="5" @selected($items->perPage() == 5)>5</option>

                  <option value="10" @selected($items->perPage() == 10)>10</option>

                  <option value="15" @selected($items->perPage() == 15)>15</option>

               </select>

               <button type="submit" class="btn btn-outline input-group-text">Apply</button>

            </div>

         </form>

      </div>
      {{-- /Index Header --}}

      {{-- items List --}}
      <div class="list-group pt-3">
         @if ($items)
            <table class="table">

               <thead>

                  <tr>

                     <th class=" text-custom-secondary" scope="col">#</th>
                     <th class=" text-custom-secondary" scope="col">Image</th>
                     <th class=" text-custom-secondary" scope="col">Name</th>
                     <th class=" text-custom-secondary" scope="col">Min Tier</th>
                     <th class=" text-custom-secondary" scope="col">Hero</th>
                     <th class=" text-custom-secondary" scope="col">Tags</th>
                     <th class=" text-custom-secondary" scope="col">Actions</th>

                  </tr>

               </thead>

               <tbody>
                  @foreach ($items as $index => $item)
                     <tr>

                        <th class="text-custom-secondary" scope="row">
                           {{ $index + 1 + ($items->currentPage() - 1) * $items->perPage() }}
                        </th>

                        <td class=" text-custom-secondary">
                           <a
                              href="{{ route('admin.items.index', ['item' => $item->slug, 'curPage' => $items->currentPage(), 'perPage' => $items->perPage()]) }}">
                              <div class="h-100 overflow-hidden shadow-lg"
                                 style="background-position: center; background-size: cover; background-repeat: no-repeat; min-height: ;">
                                 <img id="item-image"
                                    class="h-100"
                                    src="{{ substr($item->image, 0, 8) == 'https://' ? $item->image : asset('images/item_images/' . $item->image) }}"
                                    alt="">
                              </div>
                           </a>
                        </td>

                        <td class="text-custom-secondary">{{ $item->item_name }}</td>

                        <td class="badge rounded-pill border-secondary text-secondary">{{ $item->minTier->tier_label }}</td>

                        <td class="text-custom-secondary">{{ $item->hero->hero_name }}</td>

                        <td class="text-custom-secondary">
                           {{-- @dd('item', $item->tags->tag_name) --}}
                           @foreach ($item->tags as $index => $tag)
                              <div class="badge rounded-pill text-bg-secondary">{{ $tag->tag_name }}</div>
                           @endforeach

                        </td>

                        <td>

                           <div class="d-flex gap-2">

                              {{-- Modify Button --}}

                              <a class="btn btn-outline-warning"
                                 href="{{ route('admin.items.index', ['item' => $item->slug, 'curPage' => $items->currentPage(), 'perPage' => $items->perPage()]) }}">
                                 <i class="fa-solid fa-pencil"></i>
                              </a>

                              {{-- Delete Button --}}
                              <form id="delete-form-{{ $item->id }}"
                                 action="{{ route('admin.items.index', ['item' => $item->slug]) }}" method="POST">
                                 @csrf
                                 @method('DELETE')

                                 <!-- Button trigger modal -->
                                 <button type="button"
                                    class="btn btn-outline-danger delete-btn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete-modal"
                                    data-item-title="{{ $item['title'] }}"
                                    data-item-id="{{ $item['id'] }}">
                                    <i class="fa-solid fa-trash"></i>
                                 </button>

                              </form>

                           </div>

                        </td>

                     </tr>
                  @endforeach
               </tbody>

            </table>

            {{-- Pagination Links --}}
            <div class="d-flex">

               {{ $items->links() }}

            </div>
         @else
            <h1>Nessun risultato</h1>
         @endif
      </div>

   </div>

   {{-- destroy modal --}}
   @include('partials.delete-modal')

   <style> </style>

   <script>
      document.addEventListener("DOMContentLoaded", function() {
         const imgElement = document.getElementById('item-image');
         const itemImage = "{{ $item->image }}";

         if (itemImage.substring(0, 8) !== 'https://') {
            const imgPaths = [
               "{{ asset('images/item_images/' . $item->image) }}",
               "{{ asset('storage/' . $item->image) }}"
            ];

            function checkImage(src, callback) {
               const img = new Image();
               img.onload = () => callback(true);
               img.onerror = () => callback(false);
               img.src = src;
            }

            function updateImagePath(index) {
               if (index >= imgPaths.length) return;

               checkImage(imgPaths[index], (exists) => {
                  if (exists) {
                     imgElement.src = imgPaths[index];
                  } else {
                     updateImagePath(index + 1);
                  }
               });
            }

            updateImagePath(0);
         }
      });
   </script>
@endsection
