<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Crypto Investing</title>
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
        <div class="flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800 ml-64">
            <h1 class="flex justify-center mt-2 mb-2 text-5xl font-bold">Crypto Exchange</h1>
            <form method="POST" action="/investing/buy/">
                @csrf
                <input type="hidden" name="coin_symbol" value="{{ $coin->getSymbol() }}">
                <section class="py-6 dark:bg-gray-800 dark:text-gray-50">
                    <div class="grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-2 md:divide-x">
                        <div class="py-6 md:py-0 md:px-6">
                            <p class="pt-2 pb-1">{{ $coin->getSymbol() }}</p>
                            <h1 class="text-4xl pb-4 font-bold">{{ $coin->getName() }}</h1>
                            <div class="space-y-4">
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Price:</strong>
                                    <span>{{ "€" . $coin->getPrice() }}</span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Total supply:</strong>
                                    <span>{{ $coin->getSupply() }} coins</span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Max supply:</strong>
                                    <span>{{ $coin->getMaxSupply() }} coins</span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Change 1h:</strong>
                                    <span
                                        class="{{ $coin->getPriceChange1h() > 0 ? 'text-green-600' : ($coin->getPriceChange1h() < 0 ? 'text-red-600' : 'text-black') }}">
                                    {{ $coin->getPriceChange1h() . "%" }}
                                </span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Change 24h:</strong>
                                    <span
                                        class="{{ $coin->getPriceChange24h() > 0 ? 'text-green-600' : ($coin->getPriceChange24h() < 0 ? 'text-red-600' : 'text-black') }}">
                                    {{ $coin->getPriceChange24h() . "%" }}
                                </span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Change 7d:</strong>
                                    <span
                                        class="{{ $coin->getPriceChange7d() > 0 ? 'text-green-600' : ($coin->getPriceChange7d() < 0 ? 'text-red-600' : 'text-black') }}">
                                    {{ $coin->getPriceChange7d() . "%" }}
                                </span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Change 30d:</strong>
                                    <span
                                        class="{{ $coin->getPriceChange30d() > 0 ? 'text-green-600' : ($coin->getPriceChange30d() < 0 ? 'text-red-600' : 'text-black') }}">
                                    {{ $coin->getPriceChange30d() . "%" }}
                                </span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Volume 24h:</strong>
                                    <span>{{ "€" . $coin->getVolume24h() }}</span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Volume Change 24h:</strong>
                                    <span>{{ "€" . $coin->getPrice() }}</span>
                                </p>
                                <p class="flex items-center text-lg">
                                    <strong class="mr-2">Market Cap:</strong>
                                    <span>{{ "€" . $coin->getMarketCap() }}</span>
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col py-6 space-y-6 md:py-0 md:px-6">
                            <label for="investing_account">Select investing account:</label>
                            <select id="investing_account" name="investing_account"
                                    class="h-10 border mb-8 mt-1 rounded px-4 w-full bg-gray-50"
                                    data-te-select-init>
                                @foreach($accounts as $account)
                                    @if($account->type == 'Investing')
                                        <option
                                            value="{{ $account->id }}"> {{ "Account: $account->account_number" }} {{"Balance: $account->balance $account->currency"}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label class="amount">
                                <span class="mb-1">Amount:</span>
                                <input type="text" name="amount" placeholder="Amount"
                                       class="block w-full rounded-md shadow-sm focus:ring focus:ri focus:ri dark:bg-gray-800">
                            </label>
                            @error('amount')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <button type="submit"
                                    class="flex items-center mt-auto text-white bg-gray-800 font-medium  border-0 py-2 px-4 w-1/3 focus:outline-none focus:bg-gray-700 hover:bg-gray-700 rounded">
                                Buy
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2"
                                     class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</x-app-layout>
</body>
