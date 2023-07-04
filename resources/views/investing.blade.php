<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Investing</title>
</head>
<body>
<x-app-layout>
    <div class="min-h-screen flex flex-row">
        <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r">
            <div class="overflow-y-auto overflow-x-hidden flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5">
                        <div class="flex flex-row items-center mt-5">
                            <div class="text-xl font-bold border-b-2 tracking-wide text-gray-500 px-20">Menu</div>
                        </div>
                    </li>
                    <li>
                        <a href="/dashboard"
                           class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/accounts"
                           class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="/transactions"
                           class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                   viewBox="0 0 256 256" data-icon="ph:check-duotone" class="iconify w-6 h-6 iconify--ph"><g
                      fill="currentColor"><path
                          d="M232 56v144a16 16 0 0 1-16 16H40a16 16 0 0 1-16-16V56a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16Z"
                          opacity=".2"></path><path
                          d="m205.66 85.66l-96 96a8 8 0 0 1-11.32 0l-40-40a8 8 0 0 1 11.32-11.32L104 164.69l90.34-90.35a8 8 0 0 1 11.32 11.32Z"></path></g>
                </svg>
            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="/payments"
                           class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
             <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                  viewBox="0 0 256 256" data-icon="ph:arrows-left-right-duotone" class="iconify w-6 h-6 iconify--ph"><g
                     fill="currentColor"><path d="m208 176l-32 32v-64ZM80 112V48L48 80Z" opacity=".2"></path><path
                         d="m213.66 170.34l-32-32A8 8 0 0 0 168 144v24H48a8 8 0 0 0 0 16h120v24a8 8 0 0 0 13.66 5.66l32-32a8 8 0 0 0 0-11.32ZM184 188.69v-25.38L196.69 176Zm-109.66-71A8 8 0 0 0 88 112V88h120a8 8 0 0 0 0-16H88V48a8 8 0 0 0-13.66-5.66l-32 32a8 8 0 0 0 0 11.32ZM72 67.31v25.38L59.31 80Z"></path></g></svg>
            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Make a Payment</span>
                        </a>
                    </li>
                    <li>
                        <a href="/investing"
                           class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
             <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                  viewBox="0 0 256 256" data-icon="ph:infinity-duotone" class="iconify w-6 h-6 iconify--ph"><g
                     fill="currentColor"><path
                         d="M225.94 161.94a48 48 0 0 1-67.88 0L128 128l30.06-33.94a48 48 0 0 1 67.88 67.88ZM30.06 94.06a48 48 0 0 0 67.88 67.88L128 128L97.94 94.06a48 48 0 0 0-67.88 0Z"
                         opacity=".2"></path><path
                         d="M248 128a56 56 0 0 1-95.6 39.6l-.33-.35l-59.95-67.7a40 40 0 1 0 0 56.9l8.52-9.62a8 8 0 1 1 12 10.61l-8.69 9.81l-.33.35a56 56 0 1 1 0-79.2l.33.35l59.95 67.7a40 40 0 1 0 0-56.9l-8.52 9.62a8 8 0 1 1-12-10.61l8.69-9.81l.33-.35A56 56 0 0 1 248 128Z"></path></g></svg>
            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Crypto Investing</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- component -->
        <div class="flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800 ml-64">
            <div class="flex justify-center items-center">
                <div class="w-full">
                    <div class="flex flex-row">
                        <div class="w-1/2">
                            <div class="min-h-screen p-6 bg-gray-100">
                                <h2 class="font-semibold text-xl px-12 text-gray-600 mb-2">Account list</h2>
                                @foreach($accounts as $account)
                                    <div class="max-w-2xl mx-auto">
                                        <div class="overflow-x-auto shadow-md sm:rounded-lg border mb-2">
                                            <div class="inline-block min-w-full align-middle">
                                                <div class="overflow-hidden ">
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                                        <thead class="bg-gray-100 dark:bg-gray-700">
                                                        <tr>
                                                            <th scope="col"
                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                Account
                                                            </th>
                                                            <th scope="col"
                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                Type
                                                            </th>
                                                            <th scope="col"
                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                Currency
                                                            </th>
                                                            <th scope="col"
                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                Balance
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody
                                                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{$account->account_number}}
                                                            </td>
                                                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{$account->type}}
                                                            </td>
                                                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                                {{$account->currency}}
                                                            </td>
                                                            @if($account->currency == 'EUR')
                                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    {{$account->balance}}€
                                                                </td>
                                                            @endif
                                                            @if($account->currency == 'GBP')
                                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    {{$account->balance}}£
                                                                </td>
                                                            @endif
                                                            @if($account->currency == 'USD')
                                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    {{$account->balance}}$
                                                                </td>
                                                            @endif
                                                            <td class="py-4 px-6 text-sm font-medium text-right">
                                                                <form action="/accounts/{{$account->id}}" method="POST"
                                                                      onsubmit="return confirm('Are you sure you want to delete this account?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                            class="text-red-600 hover:underline">Delete
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="flex justify-end px-10">
                                    <a
                                        class="py-3 px-8 mr-2 rounded border border-blue-600 bg-blue-600 text-l font-medium text-white hover hover:bg-gradient-to-r from-blue-500 to-purple-600 transition active:text-opacity-75 sm:w-auto"
                                        href="/withdraw"
                                    >
                                        Withdraw
                                    </a>
                                    <a
                                        class="py-3 px-8 rounded border border-blue-600 bg-blue-600 text-l font-medium text-white hover hover:bg-gradient-to-r from-blue-500 to-purple-600 transition active:text-opacity-75 sm:w-auto"
                                        href="/investing/crypto"
                                    >
                                        Invest
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 rounded shadow-lg">
                            <div class="h-full p-6 bg-gray-100 flex flex-col justify-start">
                                <h2 class="flex justify-center text-4xl font-semibold px-12 text-gray-600 mb-2">Your
                                    portfolio</h2>
                                <link rel="preconnect" href="https://fonts.gstatic.com">
                                <link
                                    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
                                    rel="stylesheet">
                                <link rel="stylesheet"
                                      href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
                                <link rel="stylesheet"
                                      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
                                <div class="flex justify-center">
                                    <!-- StartUp Card -->
                                    <div
                                        class="w-full max-w-md p-8 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white">
                                        <h1 class="text-white font-semibold text-2xl">Total Invested</h1>
                                        <p class="pt-2 tracking-wide">
                                            <span class="text-gray-400 align-top">€</span>
                                            <span class="text-3xl font-semibold">{{ $totalSum }}
                                        </p>
                                        <h1 class="text-white font-semibold text-2xl">Real Time Value</h1>
                                        <p class="pt-2 tracking-wide">
                                            @if($totalSumRealTime > $totalSum)
                                                <span class="text-gray-400 align-top">€</span>
                                                <span class="text-3xl text-green-500 font-semibold">{{ $totalSumRealTime }}
                                                <i class="fas fa-arrow-up text-emerald-500 mr-4"></i></span>
                                            @else
                                                <span class="text-gray-400 align-top">€</span>
                                                <span class="text-3xl text-red-500 font-semibold">{{ $totalSumRealTime }}
                                                <i class="fas fa-arrow-down text-red-500 mr-4"></i></span>
                                            @endif
                                        </p>
                                        <hr class="mt-4 border-1 border-gray-600">
                                        @foreach($portfolios as $portfolio)
                                            <div class="pt-8 flex flex-col items-start">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         viewBox="0 0 16 16" fill="none" stroke="#ffffff"
                                                         stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path d="M3.5 8H11M8 4.5L12 8l-4 3.5"/>
                                                    </svg>
                                                    <span
                                                        class="pl-2">{{ $portfolio->coin_name }} <b>{{"($portfolio->coin):"}}</b> <span
                                                            class="text-gray-200 font-bold">{{$portfolio->amount}} coins</span></span>
                                                </div>
                                                <div class="pl-6">
                                                    <b>Bought
                                                        for:</b> {{ $portfolio->bought_for }} {{ $portfolio->currency }}
                                                </div>
                                                <div class="pl-6">
                                                    @if($realTimeValues[$loop->index] < $portfolio->bought_for)
                                                        <b>Current
                                                            value:</b> {{ $realTimeValues[$loop->index] }} {{$portfolio->currency}}
                                                        <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                                                    @else
                                                        <b>Current
                                                            value:</b> {{ $realTimeValues[$loop->index] }} {{$portfolio->currency}}
                                                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                                    @endif
                                                </div>
                                                <div class="pl-6">
                                                    <b>Difference:</b>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
