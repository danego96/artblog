<x-layout>
    @section('pageTitle', 'Добавить статью')
    @include('partials.header')
    <div class="mx-auto max-w-2xl py-32   h-full">
    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Добавьте свою статью</h2>
    <form class="mx-10" action="/articles">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название статьи</label>
          <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-6">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Текст статьи</label>
            <input type="text" id="text" name="text" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Тэги</label>
            <input type="text" id="tag" name="tag" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Введите тэги через запятую">
        </div>
        <div class="mb-6">
            <label for="banner" class="block mb-2 text-sm font-medium text-gray-900">Изображение статьи</label>
            <input type="file" name="banner" id="banner" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Добавьте баннер статьи">
          </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Сохранить</button>
      </form>
    </div>
</x-layout>      