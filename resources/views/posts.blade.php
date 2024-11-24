<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our
                    Blog Cuy😋</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test
                    assumptions and connect with the needs of your audience early and often.</p>
            </div>
            <x-searching-bar></x-searching-bar>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($posts as $post) <!-- forelse ini fungsinya untuk melakukan perulangan sama kayak foreach cuma langsung berisi kondisi if else nya -->
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="/posts?kategori={{ $post->kategori->slug }}">
                                <span
                                    class="bg-{{ $post->kategori->color }}-100 text-{{ $post->kategori->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                    </path>
                                    </svg>
                                    {{ $post->kategori->icon }}{{ $post->kategori->name }}
                                </span>
                            </a>
                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <a href="/posts/{{ $post->slug }}" class="hover:underline">
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $post->title }}</h2>
                        </a>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post->body, 150) }}
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="/posts?author={{ $post->author->username }}">
                                <div class="flex items-center space-x-3">
                                    <img class="w-7 h-7 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="Jese Leos avatar" />
                                    <span class="font-medium text-xs dark:text-white">
                                        {{ $post->author->name }}
                                    </span>
                                </div>
                            </a>
                            <a href="/posts/{{ $post->slug }}"
                                class="inline-flex items-center font-medium text-sm text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-3 h-3 items-center" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>

                @empty <!--empty sama kek else -->
                <div>
                    <p class="font-semibold text-xl my-4">Article not found!</p>
                    <a href="/posts" class="block text-blue-600 hover:underline">&laquo; Back to All Posts</a>
                </div>

                @endforelse
            </div>
        </div>
    </section>

</x-layout>
