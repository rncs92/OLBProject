<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Dashboard</title>
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
                <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
                    <div role="main" class="flex flex-col items-center justify-center">
                        <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Welcome
                            back, {{$user->name}}!</h1>
                        <p class="text-base leading-normal text-center text-gray-600 dark:text-white mt-4 lg:w-1/2 md:w-10/12 w-11/12">
                            Welcome to our online bank, where your financial needs meet digital convenience! We're
                            thrilled to have you as part of our banking family. With our user-friendly platform and
                            robust security measures, managing your finances has never been easier or more secure!</p>
                    </div>
                    <div class="lg:flex items-stretch md:mt-12 mt-8">
                        <div class="lg:w-1/2">
                            <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
                                <div class="sm:w-1/2 relative">
                                    <div>
                                        <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                            Accounts</p>
                                        <div class="absolute bottom-0 left-0 p-6">
                                            <h2 class="text-xl font-semibold 5 text-white">Check Your Accounts</h2>
                                            <p class="text-base leading-4 text-white mt-2">Manage your accounts</p>
                                            <a href="/accounts"
                                               class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                <p class="pr-2 text-sm font-medium leading-none">Accounts</p>
                                                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                          stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{asset('images/accounts2.jpg')}}" class="w-full h-80" alt="accounts"/>
                                </div>
                                <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
                                    <div>
                                        <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                            Transactions</p>
                                        <div class="absolute bottom-0 left-0 p-6">
                                            <h2 class="text-xl font-semibold 5 text-white">Transaction Overview</h2>
                                            <p class="text-base leading-4 text-white mt-2">Follow the money</p>
                                            <a href="/transactions"
                                               class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                <p class="pr-2 text-sm font-medium leading-none">Transactions</p>
                                                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                          stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{asset('images/transactions.jpg')}}" class="w-full h-80"
                                         alt="transactions"/>
                                </div>
                            </div>
                            <div class="relative">
                                <div>
                                    <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                        Payments</p>
                                    <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                        <h2 class="text-xl font-semibold 5 text-white">Make Payment</h2>
                                        <p class="text-base leading-4 text-white mt-2">Let the money move</p>
                                        <a href="/payments"
                                           class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                            <p class="pr-2 text-sm font-medium leading-none">Payments</p>
                                            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <img src="{{asset('images/payments.jpg')}}" alt="payments"
                                     class="w-full mt-8 md:mt-6 hidden sm:block"/>
                                <img class="w-full mt-4 sm:hidden" src="https://i.ibb.co/6XYbN7f/Rectangle-29.png"
                                     alt="sitting place"/>
                            </div>
                        </div>
                        <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
                            <div class="relative">
                                <div>
                                    <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                        Investing</p>
                                    <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                        <h2 class="text-xl font-semibold 5 text-white">Invest Your Funds</h2>
                                        <p class="text-base leading-4 text-white mt-2">Let the money work for you</p>
                                        <a href="/investing"
                                           class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                            <p class="pr-2 text-sm font-medium leading-none">Investing</p>
                                            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <img src="{{asset('images/investing.jpg')}}" alt="investing"
                                     class="w-full sm:block hidden"/>
                                <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png"
                                     alt="sitting place"/>
                            </div>
                            <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
                                <div class="relative w-full">
                                    <div>
                                        <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                            Settings</p>
                                        <div class="absolute bottom-0 left-0 p-6">
                                            <h2 class="text-xl font-semibold 5 text-white">Account Settings</h2>
                                            <p class="text-base leading-4 text-white mt-2">Control your account</p>
                                            <a href="/user/profile"
                                               class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                                <p class="pr-2 text-sm font-medium leading-none">Settings</p>
                                                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                          stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <img src="{{asset('images/settings.jpg')}}" class="w-full h-80" alt="settings"/>
                                </div>
                                <div class="relative w-full sm:mt-0 mt-4">
                                    <div>
                                        <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">
                                            Logout</p>
                                        <div class="absolute bottom-0 left-0 p-6">
                                            <h2 class="text-xl font-semibold 5 text-white">Log Out</h2>
                                            <p class="text-base leading-4 text-white mt-2">End banking session</p>
                                            <form method="POST" action="http://127.0.0.1:8000/logout" x-data="">
                                                <input type="hidden" name="_token"
                                                       value="fXW60aULsNeWteVvmd8a9QqQDk2ghfrl8Zue9hM9">
                                                <a class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline"
                                                   href="http://127.0.0.1:8000/logout" @click.prevent="$root.submit();">Log
                                                    Out
                                                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <img src="{{asset('images/logout.jpg')}}" class="w-full h-80" alt="wall design"/>
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
