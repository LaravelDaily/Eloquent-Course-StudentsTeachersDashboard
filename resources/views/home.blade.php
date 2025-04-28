<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xs sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="relative px-6 py-5 shadow-sm space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <h2 class="text-2xl mb-4">TOP 10 Students</h2>
                            <table class="min-w-full border divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Name</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Avg Grade</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Total Grades</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                    @foreach ($topStudents as $student)
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                {{ $student->name }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-center leading-5 text-gray-900 whitespace-no-wrap">
                                                {{ number_format($student->grades_avg_grade, 2) }}
                                            </td>
                                            <td class="px-6 py-4 text-sm leading-5 text-center text-gray-900 whitespace-no-wrap">
                                                {{ $student->grades_count }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="relative px-6 py-5 shadow-sm space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <h2 class="text-2xl mb-4">TOP 10 Teachers</h2>
                            <table class="min-w-full border divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left">
                                            <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Name</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Avg Rating</span>
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Total Ratings</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                    @foreach ($topTeachers as $teacher)
                                        <tr class="bg-white">
                                            <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                                                {{ $teacher->name }}
                                            </td>
                                            <td class="px-6 py-4 text-sm leading-5 text-center text-gray-900 whitespace-no-wrap">
                                                {{ number_format($teacher->ratings_avg_rating, 2) }}
                                            </td>
                                            <td class="px-6 py-4 text-sm leading-5 text-center text-gray-900 whitespace-no-wrap">
                                                {{ $teacher->ratings_count }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
