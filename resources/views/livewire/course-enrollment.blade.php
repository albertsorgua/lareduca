<div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg">
    <form wire:submit.prevent="enroll" class="space-y-4">
        <div>
            <label for="course" class="block text-sm font-medium text-gray-700">Select a Course</label>
            <select id="course" wire:model="selectedCourseId" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option value="">Select a Course</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Enroll
            </button>
        </div>
    </form>

    @if (session()->has('message'))
        <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('message') }}
        </div>
    @endif

    @if (Auth::user()->hasRole('teacher') || Auth::user()->hasRole('admin'))
        <div class="mt-8">
            <h2 class="text-xl font-bold text-gray-900">Enrollments</h2>
            <div class="space-y-2 mt-4">
                @foreach ($enrollments as $enrollment)
                    <div class="p-4 bg-gray-100 border border-gray-300 rounded-lg">
                        <p class="text-gray-700">{{ $enrollment->user->name }} - {{ $enrollment->course->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
