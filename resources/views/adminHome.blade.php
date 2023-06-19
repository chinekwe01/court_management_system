@extends('layouts.app')

@section('content')

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-4 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>

 <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full mt-5 px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="ml-3">Dashboard</span>
             </a>
          </li>
          <li>
             <a href="{{ route('admin.case.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Cases</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
             </a>
          </li>
          <li>
             <a href="{{ route('logout') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
             onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">{{ __('Logout') }}</span>
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
       </ul>
    </div>
 </aside>

 <div class="sm:ml-64">
    <div class="px-3 rounded-lg dark:border-gray-700">
       <div class="grid grid-cols-3 gap-4 mb-4">
          <div class="flex items-center justify-center h-24 rounded bg-blue-500 dark:bg-gray-800">
             <p class="text-xl text-white dark:text-gray-500 pl-3">Total Lawyers</p>
             <span class="m-3 py-2 px-3 bg-white rounded">5</span>
          </div>
          <div class="flex items-center justify-center h-24 rounded bg-green-500 dark:bg-gray-800">
            <p class="text-xl text-white dark:text-gray-500 pl-3">Total Judges</p>
            <span class="m-3 py-2 px-3 bg-white rounded">5</span>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-500 dark:bg-gray-800">
            <p class="text-xl text-white dark:text-gray-500 pl-3">Total Cases</p>
            <span class="m-3 py-2 px-3 bg-white rounded">{{ $caseCount }}</span>
         </div>
       </div>
       <div class="h-full mb-4 rounded relative overflow-x-auto">
           <h2 class="text-bold text-2xl">Active Cases</h2>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            S/N
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Suit No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Start Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($cases as $key => $case)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $case->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $case->suit_no }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $case->type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $case->begins }}
                        </td>
                        <td class="px-6 py-4">
                            <p>Active</p>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $cases->links() }}
        </div>
    </div>
 </div>

@endsection
