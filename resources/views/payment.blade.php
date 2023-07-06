<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Payments</title>
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
        <div class="flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800 ml-64">
            <div class="mt-7 px-2 overflow-x-auto">
                <!-- Snippet -->
                <div class="relative py-3">
                    <section class="antialiased bg-gray-50 text-gray-600 min-h-screen p-4">
                        <div class="h-full">
                            <!-- Pay component -->
                            <form action="/payments" method="POST">
                                @csrf
                                <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                                    <div class="max-w-md mx-auto">
                                        <div class="flex items-center space-x-5">
                                            <div
                                                class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                     width="1em" height="1em"
                                                     viewBox="0 0 256 256" data-icon="ph:arrows-left-right-duotone"
                                                     class="iconify w-6 h-6 iconify--ph">
                                                    <g
                                                        fill="currentColor">
                                                        <path d="m208 176l-32 32v-64ZM80 112V48L48 80Z"
                                                              opacity=".2"></path>
                                                        <path
                                                            d="m213.66 170.34l-32-32A8 8 0 0 0 168 144v24H48a8 8 0 0 0 0 16h120v24a8 8 0 0 0 13.66 5.66l32-32a8 8 0 0 0 0-11.32ZM184 188.69v-25.38L196.69 176Zm-109.66-71A8 8 0 0 0 88 112V88h120a8 8 0 0 0 0-16H88V48a8 8 0 0 0-13.66-5.66l-32 32a8 8 0 0 0 0 11.32ZM72 67.31v25.38L59.31 80Z"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                                <h2 class="leading-relaxed">Make a payment</h2>
                                                <p class="text-sm text-gray-500 font-normal leading-relaxed">Please type
                                                    in
                                                    required details to make a payment.</p>
                                            </div>
                                        </div>
                                        <div class="divide-y divide-gray-200">
                                            <div
                                                class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                                <div class="flex flex-col">
                                                    <label for="name" class="leading-loose">Name<span
                                                            class="text-red-500">*</span></label>
                                                    <input id="name" name="name" type="text"
                                                           class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                           placeholder="Name" required>
                                                    @error('name')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="flex flex-col">
                                                    <label for="surname" class="leading-loose">Surname<span
                                                            class="text-red-500">*</span></label>
                                                    <input id="surname" name="surname" type="text"
                                                           class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                           placeholder="Surname" required>
                                                    @error('surname')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                    <div class="flex flex-col">
                                                        <label for="receiver" class="leading-loose">To:<span
                                                                class="text-red-500">*</span></label>
                                                        <input id="receiver" name="receiver" type="text"
                                                               class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                               placeholder="Account number (16 digits)" required>
                                                        @error('receiver')
                                                        <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <label for="account" class="leading-loose">Select your
                                                            account:<span class="text-red-500">*</span></label>
                                                        <select id="account" name="account"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                data-te-select-init>
                                                            @foreach($accounts as $account)
                                                                @if($account->type == 'Checking')
                                                                    <option
                                                                        value="{{ $account->account_number }}"> {{ $account->account_number }} {{"($account->currency)"}} {{"Balance: $account->balance"}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col">
                                                    <label for="amount" class="leading-loose">Amount<span
                                                            class="text-red-500">*</span></label>
                                                    <input id="amount" name="amount" type="text"
                                                           class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                           placeholder="Amount" required>
                                                    @error('amount')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="flex justify-center items-center space-x-4">
                                                <div class="mt-2 flex justify-center items-center space-x-4">
                                                    <a href="/dashboard"
                                                       class="flex justify-center rounded border border-red-600 items-center hover hover:bg-red-500 w-full text-gray-900 px-4 py-3">
                                                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor"
                                                             viewBox="0 0 24 24"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                        Cancel
                                                    </a>
                                                    <button type="submit"
                                                            class="flex justify-between px-8 mr-2 rounded border border-blue-600 bg-blue-600 text-l font-medium text-white hover hover:bg-gradient-to-r from-blue-500 to-purple-600 transition active:text-opacity-75 sm:w-auto">
                                                        Make payment
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="text-xs mt-2 text-gray-500 italic text-center">Make sure the details are entered correctly!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
