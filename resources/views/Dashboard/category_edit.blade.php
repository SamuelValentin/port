<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex-auto block py-8 pt-6 px-9">
                    <div class="overflow-x-auto">
                        <div class="container dark:text-white">
                            <h1 class="mb-5">{{ isset($category->id) ? 'Edit Category' : 'Add Category' }}</h1>
                            <form action="{{ isset($category->id) ? route('categories.atualizar', $category->id) : route('categories.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D] dark:text-stone-100">
                                        Full Name
                                    </label>
                                    <input type="text" name="name" id="name" placeholder="Name" class="w-full rounded-md border border-[#e0e0e0] bg-white dark:bg-gray-700 py-3 px-6 text-base font-medium text-[#6B7280] dark:text-gray-300 outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('name', $category->name) }}"/>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="type" class="mb-3 block text-base font-medium text-[#07074D] dark:text-stone-100">
                                        Type
                                    </label>
                                    <input type="number" name="type" id="type" placeholder="Type" class="w-full rounded-md border border-[#e0e0e0] bg-white dark:bg-gray-700 py-3 px-6 text-base font-medium text-[#6B7280] dark:text-gray-300 outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('type', $category->type) }}"/>
                                </div>
                                <div class="mb-5">
                                    <label for="description" class="mb-3 block text-base font-medium text-[#07074D] dark:text-stone-100">
                                      Description
                                    </label>
                                    <textarea rows="4" name="description" id="description" placeholder="Type your description" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white dark:bg-gray-700 py-3 px-6 text-base font-medium text-[#6B7280] dark:text-gray-300 outline-none focus:border-[#6A64F1] focus:shadow-md">{{ old('description', $category->description) }}</textarea>
                                </div>
                                <button class="hover:shadow-form rounded-md bg-[#6A64F1] dark:bg-[#463fc2] py-3 px-8 text-base font-semibold text-white outline-none" type="submit">
                                    {{ isset($category->id) ? 'Update' : 'Submit' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
