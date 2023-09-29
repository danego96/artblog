<x-layout>
    @section('pageTitle', 'Artblog')
    @include('partials.header')
    
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
          <a href="/article/create">  <button type="button" class="focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900">Добавить статью</button></a>
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">АртБлог</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Блог статей</p>
            </div> 
            <x-article-card :articles="$article"/>
        </div>
      </section>
</x-layout>
