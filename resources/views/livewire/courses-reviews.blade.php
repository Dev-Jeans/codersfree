<section class="mt-4">
    <h1 class="font-bold text-3xl text-gray-800 mb-2">Valoración</h1>

    @can('enrolled', $course)
        <article class="mb-4">
            @can('valued', $course)
                <textarea wire:model="comment" class="form-input w-full" rows="3" placeholder="Ingrese una reseña del curso"></textarea>
                <div class="flex">
                    <button class="btn btn-primary mr-4" wire:click="store">Guardar</button>

                    <ul class="flex items-center">
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 1)">
                            <i class="fas fa-star text-{{ $rating >=1 ? 'yellow' : 'gray' }}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 2)">
                            <i class="fas fa-star text-{{ $rating >=2 ? 'yellow' : 'gray' }}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 3)">
                            <i class="fas fa-star text-{{ $rating >=3 ? 'yellow' : 'gray' }}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 4)">
                            <i class="fas fa-star text-{{ $rating >=4 ? 'yellow' : 'gray' }}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 5)">
                            <i class="fas fa-star text-{{ $rating ==5 ? 'yellow' : 'gray' }}-300"></i>
                        </li>
                    </ul>
                </div>
            @else
                <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd">
                        </path>
                    </svg>
                    <p>Usted ya ha valorado este curso</p>
                </div>
            @endcan
        </article>
    @endcan
    <div class="card">
        <div class="card-body">
            <p class="text-gray-800 text-xl">{{ $course->reviews->count() }} valoraciones</p>
            @foreach ($course->reviews as $review)
                <article class="flex mb-4 text-gray-800">
                    <figure class="mr-4">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{ $review->user->profile_photo_url }}" alt="">
                    </figure>

                    <div class="card flex-1">
                        <div class="card-body bg-gray-100">
                            <p><b>{{ $review->user->name }}</b><i class="fas fa-star text-yellow-300"></i>({{ $review->rating }})</p>
                            {{ $review->comment }}
                        </div>
                    </div>
                </article> 
            @endforeach
        </div>
    </div>
</section>
