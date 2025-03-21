<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet"
        href="{{ asset('css/style.css') }}"
         />
    <link rel="stylesheet"
        href="{{ asset('css/fonts.css') }}"
         />
    <style>
        :root {
            --font-sans: 'neueHaas', 'neueHaas Fallback';
            --font-serif: 'family', 'family Fallback';
            --font-mono: 'dmMono', 'dmMono Fallback';
        }
    </style>

    <link rel="preload" href="https://cdn.jwplayer.com/libraries/6amZaWBZ.js" as="script" />
    <meta name="theme-color" content="#000" />
    @livewireStyles
    
    <style>

 .slide-container {
    overflow: hidden;
    width: 100%;
    position: relative;
}

.slide-animation1 {
    display: flex;
    flex-wrap: nowrap; /* Prevents wrapping */
    white-space: nowrap; /* Keeps content in a single line */
    animation: slideLeft 15s linear infinite;
}

 </style>
</head>

<body class="light bg-background-default text-text-primary overflow-x">

    <div data-overlay-container="true">
        <main class="flex min-h-screen flex-col">
            <header data-module-name="navigation" data-module-version="1.0.0" data-module-instance="default"
                class="top-0 z-[100] bg-white">
                <div class="bg-white">
                    @livewire('top-ticker-component')
            
                    <div
                        class="relative flex h-[4rem] items-center justify-between border-b border-b-gray-300 p-0 md:p-[1.25rem]">
                        <div class="md:justify-unset flex h-full items-center">
                            <!--$--><span class="ml-2 cursor-pointer md:ml-0 xl:ml-0">
                                <svg class="m-4" width="24"
                                    height="24" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="menu"
                                        d="M0 11.2692V10.2692H16V11.2692H0ZM0 6.49996V5.49996H16V6.49996H0ZM0 1.73071V0.730713H16V1.73071H0Z"
                                        fill="#262626"></path>
                                </svg>
                            </span>
                            <div class="flex h-full cursor-pointer items-center">
                                <div id="wrapper"
                                    class="bg-hamburger-menu z-max absolute left-0 top-16 h-screen w-screen cursor-auto bg-opacity-50 hidden">
                                </div>
                                <div id="modal"
                                    class="hamburger-modal bg-white-coindesk absolute left-0 flex w-screen flex-col overflow-y-auto overflow-x-hidden transition-all duration-500 ease-out sm:w-screen md:w-[328px] -translate-x-[100%] z-200">
                                    <div class="relative pb-20 p-4 md:pb-4 lg:px-4">
                                        <!--$--><a
                                            class="bg-new-yellow text-coindesk-black mb-8 flex h-10 w-full cursor-pointer flex-row items-center justify-center rounded p-2 font-sans text-sm font-semibold"
                                            href="/account"><span
                                                class="font-sans font-semibold text-2xs text-color-black ">My
                                                Account</span></a>
                                        <!--/$-->
                                        <div class="border-b-1"></div>
                                        <ul>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="/"><span class="h-auto"><span
                                                                class="font-title font-bold">News</span></span></a>
                                                </div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">News</span>
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="/price"><span class="h-auto"><span
                                                                class="font-title font-bold">Prices</span></span></a>
                                                </div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Prices</span>
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="https://data.coindesk.com/"><span
                                                            class="h-auto"><span
                                                                class="font-title font-bold">Data</span></span></a><span
                                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg
                                                            class="h-full pb-2 pt-2" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="chevron_forward">
                                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect id="Bounding box" width="24" height="24"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_2411_5870)">
                                                                    <path id="chevron_forward_2"
                                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                        fill="#262626"></path>
                                                                </g>
                                                            </g>
                                                        </svg></span></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Data</span>
                                                        <ul>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://data.coindesk.com/trade-data">Trade
                                                                    Data</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://data.coindesk.com/derivatives">Derivatives</a>
                                                            </li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://data.coindesk.com/order-book">Order
                                                                    Book Data</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://data.coindesk.com/on-chain-data">On-Chain
                                                                    Data</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://developers.coindesk.com/documentation">API</a>
                                                            </li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://data.coindesk.com/reports">Research
                                                                    &amp; Insights</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://data.coindesk.com/data-catalogue">Data
                                                                    Catalogue</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://data.coindesk.com/ai-machine-learning">AI
                                                                    &amp; Machine Learning</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="https://indices.coindesk.com/"><span
                                                            class="h-auto"><span
                                                                class="font-title font-bold">Indices</span></span></a><span
                                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg
                                                            class="h-full pb-2 pt-2" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="chevron_forward">
                                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect id="Bounding box" width="24" height="24"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_2411_5870)">
                                                                    <path id="chevron_forward_2"
                                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                        fill="#262626"></path>
                                                                </g>
                                                            </g>
                                                        </svg></span></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Indices</span>
                                                        <ul>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://indices.coindesk.com/multi-asset-indices">Multi-Asset
                                                                    Indices</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://indices.coindesk.com/reference-rates">Reference
                                                                    Rates</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://indices.coindesk.com/strategies-and-services">Strategies
                                                                    and Services</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://developers.coindesk.com/documentation">API</a>
                                                            </li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://indices.coindesk.com/insights-and-announcements">Insights
                                                                    &amp; Announcements</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://indices.coindesk.com/documentation-and-governance">Documentation
                                                                    &amp; Governance</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="/reports"><span class="h-auto"><span
                                                                class="font-title font-bold">Research</span></span></a>
                                                </div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Research</span>
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="https://consensus.coindesk.com/"><span
                                                            class="h-auto"><span
                                                                class="font-title font-bold">Consensus</span></span></a>
                                                </div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Consensus</span>
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self"
                                                        href="https://www.coindesk.com/sponsored-content"><span
                                                            class="h-auto"><span
                                                                class="font-title font-bold">Sponsored</span></span></a>
                                                </div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Sponsored</span>
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="border-b-1"></div>
                                        <ul class="pb-2 lg:pb-4">
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="/videos"><span class="h-auto"><span
                                                                class="font-title">Videos</span></span></a><span
                                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg
                                                            class="h-full pb-2 pt-2" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="chevron_forward">
                                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect id="Bounding box" width="24" height="24"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_2411_5870)">
                                                                    <path id="chevron_forward_2"
                                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                        fill="#262626"></path>
                                                                </g>
                                                            </g>
                                                        </svg></span></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Videos</span>
                                                        <ul>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/videos/coindesk-daily">CoinDesk
                                                                    Daily</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/videos/shorts">Shorts</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/videos/editors-picks">Editor&#x27;s Picks</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="/podcasts"><span class="h-auto"><span
                                                                class="font-title">Podcasts</span></span></a><span
                                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg
                                                            class="h-full pb-2 pt-2" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="chevron_forward">
                                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect id="Bounding box" width="24" height="24"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_2411_5870)">
                                                                    <path id="chevron_forward_2"
                                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                        fill="#262626"></path>
                                                                </g>
                                                            </g>
                                                        </svg></span></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Podcasts</span>
                                                        <ul>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/podcasts/coindesk-podcast-network">CoinDesk
                                                                    Podcast Network</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/podcasts/markets-daily">Markets
                                                                    Daily</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/podcasts/generation-c">Gen
                                                                    C</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/podcasts/unchained">Unchained
                                                                    with Laura Shin</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/podcasts/coindesk-podcast-network">The Mining
                                                                    Pod</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="/newsletters"><span class="h-auto"><span
                                                                class="font-title">Newsletters</span></span></a><span
                                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg
                                                            class="h-full pb-2 pt-2" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="chevron_forward">
                                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect id="Bounding box" width="24" height="24"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_2411_5870)">
                                                                    <path id="chevron_forward_2"
                                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                        fill="#262626"></path>
                                                                </g>
                                                            </g>
                                                        </svg></span></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Newsletters</span>
                                                        <ul>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/newsletters/the-node">The
                                                                    Node</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/newsletters/daybook-us">Crypto
                                                                    Daybook Americas</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/newsletters/state-of-crypto">State of
                                                                    Crypto</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/newsletters/crypto-long-short">Crypto Long
                                                                    &amp; Short</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/newsletters/crypto-for-advisors">Crypto for
                                                                    Advisors</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="https://data.coindesk.com/reports"><span
                                                            class="h-auto"><span
                                                                class="font-title">Research</span></span></a></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Research</span>
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_blank" href="https://events.coindesk.com/"><span
                                                            class="h-auto"><span class="font-title">Webinars &amp;
                                                                Events</span></span></a><span
                                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg
                                                            class="h-full pb-2 pt-2" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="chevron_forward">
                                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect id="Bounding box" width="24" height="24"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_2411_5870)">
                                                                    <path id="chevron_forward_2"
                                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                        fill="#262626"></path>
                                                                </g>
                                                            </g>
                                                        </svg></span></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Webinars &amp;
                                                            Events</span>
                                                        <ul>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://consensus2025.coindesk.com/">Consensus
                                                                    2025</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="https://policy-regulation.coindesk.com/">Policy
                                                                    &amp; Regulation Conference</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="/sponsored-content"><span
                                                            class="h-auto"><span
                                                                class="font-title">Sponsored</span></span></a><span
                                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg
                                                            class="h-full pb-2 pt-2" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="chevron_forward">
                                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect id="Bounding box" width="24" height="24"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_2411_5870)">
                                                                    <path id="chevron_forward_2"
                                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                        fill="#262626"></path>
                                                                </g>
                                                            </g>
                                                        </svg></span></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">Sponsored</span>
                                                        <ul>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/sponsored-content">Thought
                                                                    Leadership</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/press-release">Press
                                                                    Releases</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/sponsored-content/hub/coinw">CoinW</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/sponsored-content/hub/MEXC">MEXC</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self"
                                                                    href="/sponsored-content/hub/Phemex">Phemex</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/advertise">Advertise</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-2 flex flex-col items-center">
                                                <div class="group flex w-full flex-row justify-between"><a
                                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4"
                                                        target="_self" href="/"><span class="h-auto"><span
                                                                class="font-title">News Sections</span></span></a><span
                                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg
                                                            class="h-full pb-2 pt-2" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="chevron_forward">
                                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                    height="24">
                                                                    <rect id="Bounding box" width="24" height="24"
                                                                        fill="#D9D9D9"></rect>
                                                                </mask>
                                                                <g mask="url(#mask0_2411_5870)">
                                                                    <path id="chevron_forward_2"
                                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                        fill="#262626"></path>
                                                                </g>
                                                            </g>
                                                        </svg></span></div>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div
                                                        class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                                        <button
                                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                                class="h-full rotate-180" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g id="chevron_forward">
                                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect id="Bounding box" width="24" height="24"
                                                                            fill="#D9D9D9"></rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2411_5870)">
                                                                        <path id="chevron_forward_2"
                                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                            fill="#262626"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></button><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Back
                                                            to menu</span></div>
                                                    <div class="border-b-1 mx-8 mb-2"></div>
                                                    <div class="flex w-full flex-col px-8"><span
                                                            class="font-title ml-2 py-4 font-bold">News Sections</span>
                                                        <ul>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/markets">Markets</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/business">Finance</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/tech">Tech</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/policy">Policy</a></li>
                                                            <li
                                                                class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                                <a target="_self" href="/focus">Focus</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mb-16 mt-8 flex flex-row justify-between space-x-4">
                                            <div class="flex flex-1"><button
                                                    class="flex h-[42px] w-full flex-row items-center justify-between rounded border border-[#A6A6A6] pl-4 pr-2"><span
                                                        class="inline-flex items-center gap-1"><span
                                                            class="font-sans font-normal text-2xs text-color-black capitalize text-[#676767]">English</span></span><svg
                                                        class="h-full rotate-90" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="chevron_forward">
                                                            <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                                height="24">
                                                                <rect id="Bounding box" width="24" height="24"
                                                                    fill="#D9D9D9"></rect>
                                                            </mask>
                                                            <g mask="url(#mask0_2411_5870)">
                                                                <path id="chevron_forward_2"
                                                                    d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                    fill="#262626"></path>
                                                            </g>
                                                        </g>
                                                    </svg></button>
                                                <div
                                                    class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                                                    <div class="flex flex-row items-center justify-between p-6"><span
                                                            class="font-sans font-semibold text-2xs text-color-black ">Select
                                                            Language</span><button><svg height="24" viewBox="0 0 24 24"
                                                                width="24" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z">
                                                                </path>
                                                            </svg></button></div>
                                                    <div
                                                        class="right-0 top-full flex flex-col overflow-hidden bg-white">
                                                        <div class="h-full"><a
                                                                class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4] pointer-events-none touch-none bg-[#f4f4f4] font-bold"
                                                                href="/">English
                                                                <!-- --> <span
                                                                    class="text-xs uppercase text-[#676767]">en</span><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    class="ml-auto">
                                                                    <mask id="mask0_2158_165" style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="24" height="24">
                                                                        <rect width="24" height="24" fill="#D9D9D9">
                                                                        </rect>
                                                                    </mask>
                                                                    <g mask="url(#mask0_2158_165)">
                                                                        <path
                                                                            d="M9.5503 17.3078L4.58105 12.3386L5.29455 11.6251L9.5503 15.8808L18.7061 6.7251L19.4196 7.4386L9.5503 17.3078Z"
                                                                            fill="#1C1B1F"></path>
                                                                    </g>
                                                                </svg>
                                                            </a><a
                                                                class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                                                href="/es">Español
                                                                <!-- --> <span
                                                                    class="text-xs uppercase text-[#676767]">es</span>
                                                            </a><a
                                                                class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                                                href="/fil">Filipino
                                                                <!-- --> <span
                                                                    class="text-xs uppercase text-[#676767]">fil</span>
                                                            </a><a
                                                                class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                                                href="/fr">Français
                                                                <!-- --> <span
                                                                    class="text-xs uppercase text-[#676767]">fr</span>
                                                            </a><a
                                                                class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                                                href="/it">Italiano
                                                                <!-- --> <span
                                                                    class="text-xs uppercase text-[#676767]">it</span>
                                                            </a><a
                                                                class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                                                href="/pt-br">Português
                                                                <!-- --> <span
                                                                    class="text-xs uppercase text-[#676767]">pt-br</span>
                                                            </a><a
                                                                class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                                                href="/ru">Русский
                                                                <!-- --> <span
                                                                    class="text-xs uppercase text-[#676767]">ru</span>
                                                            </a><a
                                                                class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                                                href="/uk">Українська
                                                                <!-- --> <span
                                                                    class="text-xs uppercase text-[#676767]">uk</span>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-submodule-name="price/currency-display-settings"
                                                data-submodule-version="1.0.0" data-submodule-instance="default"
                                                class="flex grow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/$-->
                        </div>
                        <div class="flex h-full items-center"><a class="px-4" href="/"><img alt="Logo" width="169"
                                    height="32" 
                                    src="/logo.png" style="height:40px;" /></a>
                        </div>
                        <div class="flex h-full items-center md:ml-auto lg:min-w-[320px]">
                            <ul class="h-full items-center justify-center gap-0 md:flex xl:gap-0">
                                <li class="undefined ˙"><a target="_self"
                                        class="hover:bg-bg-grey hidden h-full items-center justify-center px-4 lg:flex"
                                        href="/"><span
                                            class="flex h-[2.5rem] cursor-pointer items-center justify-center font-sans text-sm font-bold">News</span></a>
                                </li>
                                <li class="undefined ˙"><a target="_self"
                                        class="hover:bg-bg-grey hidden h-full items-center justify-center px-4 lg:flex"
                                        href="/price"><span
                                            class="flex h-[2.5rem] cursor-pointer items-center justify-center font-sans text-sm ">Prices</span></a>
                                </li>
                                <li class="undefined ˙"><a target="_self"
                                        class="hover:bg-bg-grey hidden h-full items-center justify-center px-4 lg:flex"
                                        href="https://data.coindesk.com/"><span
                                            class="flex h-[2.5rem] cursor-pointer items-center justify-center font-sans text-sm ">Data</span></a>
                                </li>
                                <li class="undefined ˙"><a target="_self"
                                        class="hover:bg-bg-grey hidden h-full items-center justify-center px-4 lg:flex"
                                        href="https://indices.coindesk.com/"><span
                                            class="flex h-[2.5rem] cursor-pointer items-center justify-center font-sans text-sm ">Indices</span></a>
                                </li>
                                <li class="undefined ˙"><a target="_self"
                                        class="hover:bg-bg-grey hidden h-full items-center justify-center px-4 lg:flex"
                                        href="/reports"><span
                                            class="flex h-[2.5rem] cursor-pointer items-center justify-center font-sans text-sm ">Research</span></a>
                                </li>
                                <li class="undefined ˙"><a target="_self"
                                        class="hover:bg-bg-grey hidden h-full items-center justify-center px-4 lg:flex"
                                        href="https://consensus.coindesk.com/"><span
                                            class="flex h-[2.5rem] cursor-pointer items-center justify-center font-sans text-sm ">Consensus</span></a>
                                </li>
                                <li class="undefined ˙"><a target="_self"
                                        class="hover:bg-bg-grey hidden h-full items-center justify-center px-4 lg:flex"
                                        href="https://www.coindesk.com/sponsored-content"><span
                                            class="flex h-[2.5rem] cursor-pointer items-center justify-center font-sans text-sm ">Sponsored</span></a>
                                </li>
                                <div
                                    class="relative hidden lg:flex w-[2.5rem] h-[2.5rem] rounded-full hover:bg-bg-grey items-center justify-center">
                                    <div class="inline-flex h-full"><button
                                            class="flex gap-1 uppercase items-center text-sm cursor-pointer select-none outline-0 hover:underline decoration-yellow-800"><svg
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="left icon">
                                                    <mask id="mask0_3490_8806" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                        </rect>
                                                    </mask>
                                                    <g mask="url(#mask0_3490_8806)">
                                                        <path id="language"
                                                            d="M12 21.5C10.6975 21.5 9.46833 21.2503 8.3125 20.751C7.15667 20.2517 6.14867 19.5718 5.2885 18.7115C4.42817 17.8513 3.74833 16.8433 3.249 15.6875C2.74967 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74967 9.45542 3.249 8.30475C3.74833 7.15408 4.42817 6.14867 5.2885 5.2885C6.14867 4.42817 7.15667 3.74833 8.3125 3.249C9.46833 2.74967 10.6975 2.5 12 2.5C13.3128 2.5 14.5446 2.74967 15.6953 3.249C16.8459 3.74833 17.8513 4.42817 18.7115 5.2885C19.5718 6.14867 20.2517 7.15408 20.751 8.30475C21.2503 9.45542 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.751 15.6875C20.2517 16.8433 19.5718 17.8513 18.7115 18.7115C17.8513 19.5718 16.8459 20.2517 15.6953 20.751C14.5446 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5103 19.3019 12.9398 18.6192 13.2885 17.9307C13.6372 17.2422 13.9212 16.4897 14.1405 15.673H9.8595C10.0917 16.5153 10.3789 17.2808 10.7213 17.9693C11.0634 18.6578 11.4897 19.3276 12 19.9788ZM10.0635 19.7038C9.68017 19.1538 9.33592 18.5285 9.03075 17.828C8.72558 17.1273 8.48842 16.409 8.31925 15.673H4.927C5.45517 16.7115 6.1635 17.584 7.052 18.2905C7.9405 18.9968 8.94433 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0595 18.9968 16.948 18.2905C17.8365 17.584 18.5448 16.7115 19.073 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.921 17.8375C14.616 18.5382 14.2878 19.1602 13.9365 19.7038ZM4.298 14.173H8.0155C7.95267 13.8013 7.90708 13.4369 7.87875 13.0798C7.85058 12.7227 7.8365 12.3628 7.8365 12C7.8365 11.6372 7.85058 11.2773 7.87875 10.9202C7.90708 10.5631 7.95267 10.1987 8.0155 9.827H4.298C4.20183 10.1667 4.12817 10.5198 4.077 10.8865C4.02567 11.2532 4 11.6243 4 12C4 12.3757 4.02567 12.7468 4.077 13.1135C4.12817 13.4802 4.20183 13.8333 4.298 14.173ZM9.51525 14.173H14.4848C14.5474 13.8013 14.5929 13.4402 14.6212 13.0895C14.6494 12.7388 14.6635 12.3757 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9105C14.5929 10.5598 14.5474 10.1987 14.4848 9.827H9.51525C9.45258 10.1987 9.40708 10.5598 9.37875 10.9105C9.35058 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3757 9.35058 12.7388 9.37875 13.0895C9.40708 13.4402 9.45258 13.8013 9.51525 14.173ZM15.9845 14.173H19.702C19.7982 13.8333 19.8718 13.4802 19.923 13.1135C19.9743 12.7468 20 12.3757 20 12C20 11.6243 19.9743 11.2532 19.923 10.8865C19.8718 10.5198 19.7982 10.1667 19.702 9.827H15.9845C16.0473 10.1987 16.0929 10.5631 16.1212 10.9202C16.1494 11.2773 16.1635 11.6372 16.1635 12C16.1635 12.3628 16.1494 12.7227 16.1212 13.0798C16.0929 13.4369 16.0473 13.8013 15.9845 14.173ZM15.6807 8.327H19.073C18.5385 7.27567 17.835 6.40317 16.9625 5.7095C16.09 5.016 15.0813 4.54167 13.9365 4.2865C14.3198 4.8685 14.6608 5.50508 14.9595 6.19625C15.2583 6.88725 15.4987 7.5975 15.6807 8.327ZM9.8595 8.327H14.1405C13.9083 7.491 13.6163 6.72075 13.2645 6.01625C12.9125 5.31175 12.491 4.64675 12 4.02125C11.509 4.64675 11.0875 5.31175 10.7355 6.01625C10.3837 6.72075 10.0917 7.491 9.8595 8.327ZM4.927 8.327H8.31925C8.50125 7.5975 8.74167 6.88725 9.0405 6.19625C9.33917 5.50508 9.68017 4.8685 10.0635 4.2865C8.91217 4.54167 7.90192 5.01767 7.03275 5.7145C6.16342 6.41117 5.4615 7.282 4.927 8.327Z"
                                                            fill="#262626"></path>
                                                    </g>
                                                </g>
                                            </svg></button></div>
                                </div>
                                <!--$-->
                                <div class="flex h-full items-center justify-center px-4"><button
                                        class="flex relative justify-center items-center box-border overflow-hidden align-middle outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-tiny bg-default text-default-foreground z-10 aria-expanded:scale-[0.97] aria-expanded:opacity-70 subpixel-antialiased h-8 w-8 rounded-full"
                                        data-slot="trigger" aria-haspopup="true" aria-expanded="false"
                                        id="react-aria-:R7p5nfb:" type="button"><img
                                            src="https://s.gravatar.com/avatar/4ed81ca47fdff994197aa34ad11d8728?s=480&amp;r=pg&amp;d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fso.png"
                                            class="flex object-cover w-full h-full transition-opacity !duration-500 opacity-0 data-[loaded=true]:opacity-100"
                                            alt="Profile avatar" /></button></div>
                                <!--/$-->
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
             
            <section data-module-name="homepage" data-module-version="1.0.0" data-module-instance="default"
                class="flex-grow">
                <div
                    class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                    <h1 class="text-[0px]">CoinCrypto: Bitcoin, Ethereum, Crypto News and Price Data</h1>
                    <!--$-->
                    <div class="grid gap-4 md:gap-6 grid-cols-4 md:grid-cols-8 lg:grid-cols-12">
                        <div class="col-start-1 col-span-full row-start-1 lg:col-end-8 xl:col-end-9">
                            <div class="
                                        flex flex-col gap-1 md:flex-row
                                            xlmax:w-full
                                        ">
                                <div
                                    class="bg-white flex gap-6 w-full shrink flex-col md:flex-row lg:flex-col-reverse xl:flex-row-reverse">
                                    <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                                            href="/policy/2025/03/20/crypto-will-expand-dominance-of-u-s-dollar-trump-says">
                                            <h3 class="font-headline">Crypto Will &#x27;Expand Dominance of U.S.
                                                Dollar,&#x27; Trump Says </h3>
                                        </a>
                                        <p
                                            class="font-body text-color-charcoal-600 mb-4 line-clamp-2 lg:hidden xl:flex">
                                            The U.S. president did not announce any new executive actions on Thursday.
                                        </p>
                                        <p class="flex gap-2 flex-col lg:flex-row items-center"><span
                                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                    class="mr-2">By
                                                    <!-- --> <a title="Nikhilesh De"
                                                        class="text-color-charcoal-900 hover:underline"
                                                        href="/author/nikhilesh-de">Nikhilesh De</a>, <a
                                                        title="Helene Braun"
                                                        class="text-color-charcoal-900 hover:underline"
                                                        href="/author/helene-braun">Helene Braun</a>
                                                </span></span><span
                                                class="font-metadata text-color-charcoal-600 uppercase">15 hours
                                                ago</span></p>
                                    </div><a
                                        title="Crypto Will &#x27;Expand Dominance of U.S. Dollar,&#x27; Trump Says "
                                        class="flex shrink-0 flex-col"
                                        href="/policy/2025/03/20/crypto-will-expand-dominance-of-u-s-dollar-trump-says"><img
                                            alt="U.S. President Donald Trump speaks at the Digital Asset Summit in New York City. (Nikhilesh De)"
                                            width="416" height="234" decoding="async" data-nimg="1"
                                            class="w-full md:w-60 lg:w-full xl:w-[503px] rounded align-self-end aspect-video object-cover"
                                            style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHAwb/xAAhEAACAQMEAwEAAAAAAAAAAAABAgMABBEFBhIxFBUhIv/EABUBAQEAAAAAAAAAAAAAAAAAAAME/8QAGhEBAAMBAQEAAAAAAAAAAAAAAQACAxIxEf/aAAwDAQACEQMRAD8AiO3/AEUWi2sl7BHNcfouCfvzoV1bx7Y1DU4wLC2sYUgGUbt2NR+KV1jwrECtXu7iSTm8rs2MZJoNMe62Pvsoz0rUBPIw3jFZw69Olhw8cYxx6opK7EtknJopqnIEnZ//2Q==&quot;)"
                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F1a81a5661312f11618bedd60f17f6ca7a2879dd1-1920x1080.jpg%3Fauto%3Dformat&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F1a81a5661312f11618bedd60f17f6ca7a2879dd1-1920x1080.jpg%3Fauto%3Dformat&amp;w=1080&amp;q=75 2x"
                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F1a81a5661312f11618bedd60f17f6ca7a2879dd1-1920x1080.jpg%3Fauto%3Dformat&amp;w=1080&amp;q=75" /></a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row-start-2 col-span-full md:col-start-4 lg:row-start-1 lg:col-start-8 -lg:col-end-1 xl:col-start-9 [&amp;_.jw-related-btn]:hidden">
                            <div class="flex flex-col lg:flex-row h-full">
                                <div class="lg:hidden pb-6">
                                    <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                </div>
                                <div class="lgmax:hidden mr-6">
                                    <div class="shrink-0 bg-divider border-none h-full w-divider" role="separator"
                                        data-orientation="vertical" aria-orientation="vertical"></div>
                                </div>
                                <div class="
		    w-full
				[&amp;_.jwplayer.jw-flag-floating_.jw-wrapper]:!w-[calc(100%-20px)]
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:block
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:bg-transparent
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:p-0
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:top-[10px]
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:right-0
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:left-[60px]
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:w-auto
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:z-2
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar]:cursor-auto
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar_.jw-wrapper]:cursor-auto
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar_.jw-float-bar-icon]:top-0
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar_.jw-float-bar-icon]:right-[10px]
		 ">
                                    <div class="
		  	grid
				[&amp;&gt;*]:col-start-1
				[&amp;&gt;*]:row-start-1
				[&amp;_[data-jw-placement-id]]:w-full
				[&amp;_.jwplayer]:aspect-video
				[&amp;_.jwplayer]:!w-auto
				[&amp;_.jwplayer]:!h-auto
				[&amp;_.jwplayer]:!z-1
			">
                                        <div class="container-jwp [&amp;_[id^=&#x27;jwExperienceDiv&#x27;]+_[id^=&#x27;jwExperienceDiv&#x27;]]:hidden"
                                            id="jwp-placement-cF5d0hUf"></div>
                                        <div class="aspect-video w-full"></div>
                                    </div>
                                    <h3 class="font-headline-2xs font-medium tracking-[0.1px] mt-6"></h3>
                                    <div
                                        class="font-body-sm leading-normal text-color-charcoal-600 hidden lg:block lg:pt-4 xl:hidden">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-span-full -col-end-1 row-start-4 md:col-start-1 md:row-start-2 md:col-end-4 md:row-end-4">
                            <div class="flex flex-col h-full">
                                <div class="pb-6">
                                    <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                </div>
                                <!--$-->
                                <div class="flex flex-col items-center gap-4 relative overflow-y-auto&quot;">
                                    <div class="flex w-full uppercase"><a target=""
                                            class="flex gap-2 items-center z-50 hover:z-50 " href="/latest-crypto-news">
                                            <h2
                                                class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                Latest Crypto News</h2><svg class="" fill="none" height="24"
                                                viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                    fill="#676767"></path>
                                            </svg>
                                        </a></div>
                                    <div
                                        class="flex flex-col w-full h-full md:h-[1130px] md:max-h-[1130px] lg:h-[470px] lg:max-h-[470px] xl:h-[340px] xl:max-h-[340px]">
                                        <div
                                            class="grid grid-rows-2 grid-flow-col grid-cols-[repeat(auto-fill,minmax(300px,1fr))] md:grid-cols-1 md:grid-rows-none md:grid-flow-row pt-6 gap-4 no-scrollbar overflow-x-auto overflow-y-hidden md:overflow-auto md:overflow-y-scroll">
                                        </div>
                                    </div>
                                </div>
                                <!--/$-->
                                <div class="py-4">
                                    <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                </div>
                                <div class="flex flex-col min-h-[228px]">
                                    <div class="min-w-full min-h-full">
                                        <div class="color-black relative flex items-start justify-center aw100% ah100%"
                                            style="height:100%">
                                            <div id="nativehp_desktop" style="width:100%;height:100%"
                                                class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;&gt;iframe]:m-auto aw100% ah100%">
                                            </div>
                                            <div style="width:100%;height:100%"
                                                class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="75"
                                                    viewBox="0 0 100 75" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    class="opacity-30 [&amp;&gt;path]:fill-[#DCDCDD]">
                                                    <path
                                                        d="M37.1542 40.7009C39.0349 40.7009 40.5594 39.1733 40.5594 37.2889C40.5594 35.4045 39.0349 33.877 37.1542 33.877C35.2736 33.877 33.749 35.4045 33.749 37.2889C33.749 39.1733 35.2736 40.7009 37.1542 40.7009Z"
                                                        fill="#F8BF1E"></path>
                                                    <path
                                                        d="M64.3066 40.7009C66.1872 40.7009 67.7118 39.1733 67.7118 37.2889C67.7118 35.4045 66.1872 33.877 64.3066 33.877C62.4259 33.877 60.9014 35.4045 60.9014 37.2889C60.9014 39.1733 62.4259 40.7009 64.3066 40.7009Z"
                                                        fill="#F8BF1E"></path>
                                                    <path
                                                        d="M64.3066 67.9515C66.1872 67.9515 67.7118 66.4239 67.7118 64.5395C67.7118 62.6552 66.1872 61.1276 64.3066 61.1276C62.4259 61.1276 60.9014 62.6552 60.9014 64.5395C60.9014 66.4239 62.4259 67.9515 64.3066 67.9515Z"
                                                        fill="#F8BF1E"></path>
                                                    <path
                                                        d="M74.2978 9.40948C73.9393 4.42622 69.9517 0.385744 64.9783 0.0265903C61.7971 -0.197881 58.9295 1.01426 56.9133 3.0794C55.3899 4.65069 53.3289 5.59347 51.1334 5.59347H50.3269C48.0867 5.59347 45.9808 4.65069 44.4126 3.0345C42.5756 1.14894 40.0217 0.0265903 37.199 0.0265903C34.3762 0.0265903 31.8223 1.19384 29.9853 3.0345C28.4171 4.65069 26.3113 5.59347 24.071 5.59347H23.3093C21.1139 5.59347 19.008 4.74048 17.4846 3.16919C17.171 2.85493 16.8573 2.54067 16.5437 2.2713C12.7353 -0.8264 7.13459 -0.736612 3.46056 2.54067C-0.975169 6.44646 -1.15439 13.2704 2.9677 17.4006C3.01251 17.4455 3.05731 17.4904 3.10212 17.5353C4.71511 19.0617 5.56641 21.2167 5.56641 23.4165V24.1797C5.56641 26.4244 4.6255 28.5344 3.0125 30.1057C1.13068 31.9464 0.0105495 34.5053 0.0105495 37.3337C0.0105495 40.162 1.17549 42.721 3.0125 44.5617C4.6255 46.133 5.56641 48.243 5.56641 50.4877V51.5203C5.56641 53.7201 4.6255 55.7852 3.05731 57.3116C1.08588 59.2421 -0.123866 61.9806 0.0105495 64.9885C0.234576 70.286 4.53588 74.551 9.77811 74.7306C12.8249 74.8204 15.558 73.6082 17.4846 71.588C19.008 70.0167 21.069 69.029 23.2645 69.029H24.1158C26.3113 69.029 28.3723 69.9718 29.8957 71.588C31.9119 73.698 34.8243 74.9101 38.0055 74.6857C42.9788 74.3265 47.0113 70.286 47.3698 65.2579C47.773 59.287 43.1133 54.3486 37.2438 54.3486C34.4658 54.3486 31.9119 55.4709 30.0749 57.3116C28.5067 58.8829 26.4009 59.8257 24.2054 59.8257H23.2645C21.069 59.8257 18.9184 58.9727 17.3502 57.3565C17.3054 57.3116 17.3054 57.3116 17.2606 57.2667C15.6476 55.6954 14.7067 53.5854 14.7067 51.3407V50.4428C14.7067 48.1981 15.6476 46.0881 17.2606 44.5168C19.1424 42.6761 20.2626 40.1171 20.2626 37.2888C20.2626 34.4605 19.0976 31.9015 17.2606 30.0608C15.6476 28.4895 14.7067 26.3795 14.7067 24.1348V23.3267C14.7067 21.082 15.6476 18.9719 17.2158 17.4006C17.2606 17.3558 17.2606 17.3558 17.3054 17.3109C17.3502 17.266 17.3502 17.266 17.395 17.2211C18.9632 15.6498 21.069 14.707 23.3093 14.707H24.1158C26.3561 14.707 28.4619 15.6498 30.0301 17.266C31.8671 19.1515 34.421 20.2739 37.2438 20.2739C40.0665 20.2739 42.6204 19.1066 44.4574 17.266C46.0256 15.6498 48.1315 14.707 50.3717 14.707H51.0886C53.3289 14.707 55.4347 15.6498 57.0029 17.266C58.8399 19.1515 61.3938 20.2739 64.2166 20.2739C70.0413 20.3188 74.701 15.3804 74.2978 9.40948Z"
                                                        fill="#F8BF1E"></path>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-span-full md:row-start-2 md:col-start-4 lg:row-start-2 lg:col-start-4 -lg:col-end-1 md:row-start-3">
                            <div class="pb-6">
                                <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                            </div>
                            <div class="flex pb-6 items-center">
                                <h2 class="text-color-dark-grey font-title text-charcoal-600 uppercase">Top Stories</h2>
                            </div>
                            <div class="flex">
                                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-9 xl:grid-cols-2 gap-6">
                                    <div class="col-span-1 lg:col-span-5 xl:col-span-1">
                                        <div class="
			  flex gap-4
				false
			">
                                            <div class="bg-white flex gap-6 w-full shrink">
                                                <div class="flex flex-col"><a
                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                        href="/sponsored-content/platon-paving-the-way-to-become-the-visa-of-web-3-0">
                                                        <h2 class="font-headline-2xs font-medium">PlatON: Paving the Way
                                                            to Become the Visa of Web 3.0</h2>
                                                    </a>
                                                    <p class="flex gap-2 flex-col"></p><span
                                                        class="mt-2 uppercase text-[#00733F] font-medium"><span
                                                            class="font-metadata mr-1 uppercase">Sponsored by</span><a
                                                            class="font-metadata mt-2 uppercase text-[#00733F] hover:underline"
                                                            target="_blank"
                                                            href="https://www.platon.network/">PlatON</a></span>
                                                </div><a title="PlatON: Paving the Way to Become the Visa of Web 3.0"
                                                    class="flex shrink-0 flex-col"
                                                    href="/sponsored-content/platon-paving-the-way-to-become-the-visa-of-web-3-0"><img
                                                        alt="CoinDesk" loading="lazy" width="1280" height="960"
                                                        decoding="async" data-nimg="1"
                                                        class="lg:w-[9.5rem] lg:h-[9.5rem] sm:w-16 sm:h-16 xs:w-16 xs:h-16 rounded align-self-end object-cover"
                                                        style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQGB//EACMQAAIBBAEDBQAAAAAAAAAAAAECAwAEBRIRBiFRIiMxQWH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAwb/xAAbEQACAwADAAAAAAAAAAAAAAAAAQIDERMhMf/aAAwDAQACEQMRAD8AyfGYV2yKWtx7Z2CsfnirK/wT9O3IXYPCyhhIPsGncb02LPCxX0km8kq7keKWyeRSS1eKUSPKVCAlvSqjwK3NdazUHblKXXguxiY87r3/AGip+Ujc8c0UpUluM//Z&quot;)"
                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe8d2e6943998fde1069c586d1ad7ab45db600465-1280x960.jpg%3Fauto%3Dformat&amp;w=1920&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe8d2e6943998fde1069c586d1ad7ab45db600465-1280x960.jpg%3Fauto%3Dformat&amp;w=3840&amp;q=75 2x"
                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe8d2e6943998fde1069c586d1ad7ab45db600465-1280x960.jpg%3Fauto%3Dformat&amp;w=3840&amp;q=75" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex col-span-1 lg:hidden">
                                        <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
                                    </div>
                                    <div
                                        class="col-span-1 md:col-span-1 lg:col-span-4 xl:col-span-1 grid grid-cols-1 xl:grid-cols-2 xl:gap-6">
                                        <div>
                                            <div class="
			  flex gap-4
				false
			">
                                                <div class="bg-white flex gap-6 w-full shrink">
                                                    <div class="flex flex-col"><a
                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                            href="/business/2025/03/20/tether-ranks-among-top-foreign-buyers-of-u-s-treasuries-in-2024-firm-says">
                                                            <h2 class="font-headline-2xs font-medium">Tether Ranks Among
                                                                Top Buyers of U.S. Treasuries in 2024, Firm Says</h2>
                                                        </a>
                                                        <p class="flex gap-2 flex-col"><span
                                                                class="font-metadata text-color-charcoal-600 uppercase">12
                                                                hours ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4 xl:hidden">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="
			  flex gap-4
				false
			">
                                                <div class="bg-white flex gap-6 w-full shrink">
                                                    <div class="flex flex-col"><a
                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                            href="/markets/2025/03/20/bitcoin-miners-feel-squeeze-as-hashprice-erases-post-election-gains">
                                                            <h2 class="font-headline-2xs font-medium">Bitcoin Miners
                                                                Feel Squeeze as Hashprice Erases Post-Election Gains
                                                            </h2>
                                                        </a>
                                                        <p class="flex gap-2 flex-col"><span
                                                                class="font-metadata text-color-charcoal-600 uppercase">12
                                                                hours ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden xl:hidden">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4">
                                <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-9 xl:grid-cols-2 gap-6">
                                <div class="col-span-1 lg:col-span-5 xl:col-span-1">
                                    <div class="
			  flex gap-4
				false
			">
                                        <div class="bg-white flex gap-6 w-full shrink">
                                            <div class="flex flex-col"><a
                                                    class="text-color-charcoal-900 mb-4 hover:underline"
                                                    href="/markets/2025/03/20/biotech-s-atai-life-sciences-joins-roster-of-firms-with-bitcoin-treasury-strategies">
                                                    <h2 class="font-headline-2xs font-medium">Biotech&#x27;s ATAI Life
                                                        Sciences Joins Roster of Firms With Bitcoin Treasury Strategies
                                                    </h2>
                                                </a>
                                                <p class="font-body text-color-charcoal-600 mb-4 line-clamp-3">Christian
                                                    Angermayer, the firm’s chairman, stated that it will acquire $5
                                                    million in BTC.</p>
                                                <p class="flex gap-2 flex-col"><span
                                                        class="font-metadata text-color-charcoal-600 uppercase">13 hours
                                                        ago</span></p>
                                            </div><a
                                                title="Biotech&#x27;s ATAI Life Sciences Joins Roster of Firms With Bitcoin Treasury Strategies"
                                                class="flex shrink-0 flex-col"
                                                href="/markets/2025/03/20/biotech-s-atai-life-sciences-joins-roster-of-firms-with-bitcoin-treasury-strategies"><img
                                                    alt="&lt;em&gt;&lt;a href=&quot;https://www.shutterstock.com/image-photo/businessman-taking-profit-bitcoin-trading-on-456071359&quot;&gt;Business miniature image&lt;/a&gt; via Shutterstock.&lt;/em&gt;"
                                                    loading="lazy" width="1000" height="1000" decoding="async"
                                                    data-nimg="1"
                                                    class="lg:w-[9.5rem] lg:h-[9.5rem] sm:w-16 sm:h-16 xs:w-16 xs:h-16 rounded align-self-end object-cover"
                                                    style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAUGBP/EACEQAAEDBQACAwAAAAAAAAAAAAECAwQABRESIQYUIjFh/8QAFgEBAQEAAAAAAAAAAAAAAAAABQME/8QAHREAAgIBBQAAAAAAAAAAAAAAAAECAwQREyExUf/aAAwDAQACEQMRAD8AS+VxZ0suOQQ4GUYwEmmXiVwkRI/r3MqSvmm57Vm7bEakLXtlwA/HHK2SbHBjyil1kPq44FL+x+UVROc8l1vpFbElXqKkXBKk52oqsVZoIPGUjIzgUUpsv0xPIguD/9k=&quot;)"
                                                    srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F481052af7f9f862b9bfc9963b8014324ced045f6-1900x1268.jpg%3Frect%3D241%2C0%2C1268%2C1268%26w%3D1080%26h%3D1080%26auto%3Dformat&amp;w=1080&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F481052af7f9f862b9bfc9963b8014324ced045f6-1900x1268.jpg%3Frect%3D241%2C0%2C1268%2C1268%26w%3D1080%26h%3D1080%26auto%3Dformat&amp;w=2048&amp;q=75 2x"
                                                    src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F481052af7f9f862b9bfc9963b8014324ced045f6-1900x1268.jpg%3Frect%3D241%2C0%2C1268%2C1268%26w%3D1080%26h%3D1080%26auto%3Dformat&amp;w=2048&amp;q=75" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex col-span-1 lg:hidden">
                                    <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
                                </div>
                                <div
                                    class="col-span-1 md:col-span-1 lg:col-span-4 xl:col-span-1 grid grid-cols-1 xl:grid-cols-2 xl:gap-6">
                                    <div>
                                        <div class="
			  flex gap-4
				false
			">
                                            <div class="bg-white flex gap-6 w-full shrink">
                                                <div class="flex flex-col"><a
                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                        href="/business/2025/03/20/kraken-buys-ninjatrader-for-usd1-5b-to-enter-u-s-crypto-futures-market">
                                                        <h2 class="font-headline-2xs font-medium">Kraken to Buy
                                                            NinjaTrader for $1.5B to Enter U.S. Crypto Futures Market
                                                        </h2>
                                                    </a>
                                                    <p class="flex gap-2 flex-col"><span
                                                            class="font-metadata text-color-charcoal-600 uppercase">Mar
                                                            20, 2025</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 xl:hidden">
                                            <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                role="separator" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="
			  flex gap-4
				false
			">
                                            <div class="bg-white flex gap-6 w-full shrink">
                                                <div class="flex flex-col"><a
                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                        href="/markets/2025/03/20/gold-surges-bitcoin-rallies-stocks-down-since-trump-s-electoral-win-what-s-driving-the-chaos">
                                                        <h2 class="font-headline-2xs font-medium">Gold Surges, Bitcoin
                                                            Rallies, Stocks Down Since Trump&#x27;s Electoral Win —
                                                            What’s Driving the Chaos?</h2>
                                                    </a>
                                                    <p class="flex gap-2 flex-col"><span
                                                            class="font-metadata text-color-charcoal-600 uppercase">19
                                                            hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden xl:hidden">
                                            <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                role="separator" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex md:hidden flex-col h-[272px] justify-center items-center"></div>
                            <div class="py-6">
                                <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-9 xl:grid-cols-2 gap-6">
                                <div class="col-span-1 lg:col-span-5 xl:col-span-1">
                                    <div class="
			  flex gap-4
				false
			">
                                        <div class="bg-white flex gap-6 w-full shrink">
                                            <div class="flex flex-col"><a
                                                    class="text-color-charcoal-900 mb-4 hover:underline"
                                                    href="/policy/2025/03/20/gotbit-founder-aleksei-andriunin-pleads-guilty-to-wire-fraud-market-manipulation">
                                                    <h2 class="font-headline-2xs font-medium">Gotbit Founder Aleksei
                                                        Andriunin Pleads Guilty to Wire Fraud, Market Manipulation</h2>
                                                </a>
                                                <p class="font-body text-color-charcoal-600 mb-4 line-clamp-3">
                                                    Prosecutors are recommending that Andriunin, 26, spends no more than
                                                    24 months in a U.S. prison.</p>
                                                <p class="flex gap-2 flex-col"><span
                                                        class="font-metadata text-color-charcoal-600 uppercase">13 hours
                                                        ago</span></p>
                                            </div><a
                                                title="Gotbit Founder Aleksei Andriunin Pleads Guilty to Wire Fraud, Market Manipulation"
                                                class="flex shrink-0 flex-col"
                                                href="/policy/2025/03/20/gotbit-founder-aleksei-andriunin-pleads-guilty-to-wire-fraud-market-manipulation"><img
                                                    alt="Alexey Andryunin" loading="lazy" width="1000" height="1000"
                                                    decoding="async" data-nimg="1"
                                                    class="lg:w-[9.5rem] lg:h-[9.5rem] sm:w-16 sm:h-16 xs:w-16 xs:h-16 rounded align-self-end object-cover"
                                                    style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHBf/EACUQAAIBAwMCBwAAAAAAAAAAAAECAwAEEQUGEhMhFBUiQVFxgf/EABYBAQEBAAAAAAAAAAAAAAAAAAQBA//EABkRAQADAQEAAAAAAAAAAAAAAAEAAhEhMf/aAAwDAQACEQMRAD8A3ZbmBdSaOHkrJJgcgAAKWt37qsbK/MctyQyrxKqc4z8ik+21VdVsIRL1VvmPrlR8D7xS9qmz9V82ZLiVCjuB1mfJ7++KNYF2z5EU0MqbsrmxN+iw2/HAsiyASMQxwufyipjFpctkvh450kVDjky96KjXejNC+cSf/9k=&quot;)"
                                                    srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920.jpg%3Fauto%3Dformat&amp;w=1080&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920.jpg%3Fauto%3Dformat&amp;w=2048&amp;q=75 2x"
                                                    src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920.jpg%3Fauto%3Dformat&amp;w=2048&amp;q=75" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex col-span-1 lg:hidden">
                                    <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
                                </div>
                                <div
                                    class="col-span-1 md:col-span-1 lg:col-span-4 xl:col-span-1 grid grid-cols-1 xl:grid-cols-2 xl:gap-6">
                                    <div>
                                        <div class="
			  flex gap-4
				false
			">
                                            <div class="bg-white flex gap-6 w-full shrink">
                                                <div class="flex flex-col"><a
                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                        href="/policy/2025/03/20/as-congress-talks-up-its-earth-shaking-crypto-bill-regulators-are-already-at-work">
                                                        <h2 class="font-headline-2xs font-medium">As Congress Talks Up
                                                            Its Earth-Shaking Crypto Bill, Regulators Are Already at
                                                            Work</h2>
                                                    </a>
                                                    <p class="flex gap-2 flex-col"><span
                                                            class="font-metadata text-color-charcoal-600 uppercase">15
                                                            hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 xl:hidden">
                                            <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                role="separator" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="
			  flex gap-4
				false
			">
                                            <div class="bg-white flex gap-6 w-full shrink">
                                                <div class="flex flex-col"><a
                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                        href="/markets/2025/03/20/ether-spot-etfs-in-u-s-saw-usd358-million-outflows-in-11-day-stretch">
                                                        <h2 class="font-headline-2xs font-medium">Ether Spot ETFs in
                                                            U.S. Saw $358 Million Outflows in 11-Day Stretch</h2>
                                                    </a>
                                                    <p class="flex gap-2 flex-col"><span
                                                            class="font-metadata text-color-charcoal-600 uppercase">17
                                                            hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden xl:hidden">
                                            <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                role="separator" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="order-1"></div>
                        <div class="hidden md:flex flex-col justify-center items-center order-2 pt-5">
                            <div class="min-w-full min-h-full justify-center items-center">
                                <div class="color-black relative flex items-start justify-center aw970px ah250px"
                                    style="height:250px">
                                    <div id="homepage_mid_desktop_0" data-freestar-ad="true"
                                        style="width:970px;height:250px"
                                        class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;&gt;iframe]:m-auto aw970px ah250px">
                                    </div>
                                    <div style="width:970px;height:250px"
                                        class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw970px ah250px">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="75"
                                            viewBox="0 0 100 75" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            class="opacity-30 [&amp;&gt;path]:fill-[#DCDCDD]">
                                            <path
                                                d="M37.1542 40.7009C39.0349 40.7009 40.5594 39.1733 40.5594 37.2889C40.5594 35.4045 39.0349 33.877 37.1542 33.877C35.2736 33.877 33.749 35.4045 33.749 37.2889C33.749 39.1733 35.2736 40.7009 37.1542 40.7009Z"
                                                fill="#F8BF1E"></path>
                                            <path
                                                d="M64.3066 40.7009C66.1872 40.7009 67.7118 39.1733 67.7118 37.2889C67.7118 35.4045 66.1872 33.877 64.3066 33.877C62.4259 33.877 60.9014 35.4045 60.9014 37.2889C60.9014 39.1733 62.4259 40.7009 64.3066 40.7009Z"
                                                fill="#F8BF1E"></path>
                                            <path
                                                d="M64.3066 67.9515C66.1872 67.9515 67.7118 66.4239 67.7118 64.5395C67.7118 62.6552 66.1872 61.1276 64.3066 61.1276C62.4259 61.1276 60.9014 62.6552 60.9014 64.5395C60.9014 66.4239 62.4259 67.9515 64.3066 67.9515Z"
                                                fill="#F8BF1E"></path>
                                            <path
                                                d="M74.2978 9.40948C73.9393 4.42622 69.9517 0.385744 64.9783 0.0265903C61.7971 -0.197881 58.9295 1.01426 56.9133 3.0794C55.3899 4.65069 53.3289 5.59347 51.1334 5.59347H50.3269C48.0867 5.59347 45.9808 4.65069 44.4126 3.0345C42.5756 1.14894 40.0217 0.0265903 37.199 0.0265903C34.3762 0.0265903 31.8223 1.19384 29.9853 3.0345C28.4171 4.65069 26.3113 5.59347 24.071 5.59347H23.3093C21.1139 5.59347 19.008 4.74048 17.4846 3.16919C17.171 2.85493 16.8573 2.54067 16.5437 2.2713C12.7353 -0.8264 7.13459 -0.736612 3.46056 2.54067C-0.975169 6.44646 -1.15439 13.2704 2.9677 17.4006C3.01251 17.4455 3.05731 17.4904 3.10212 17.5353C4.71511 19.0617 5.56641 21.2167 5.56641 23.4165V24.1797C5.56641 26.4244 4.6255 28.5344 3.0125 30.1057C1.13068 31.9464 0.0105495 34.5053 0.0105495 37.3337C0.0105495 40.162 1.17549 42.721 3.0125 44.5617C4.6255 46.133 5.56641 48.243 5.56641 50.4877V51.5203C5.56641 53.7201 4.6255 55.7852 3.05731 57.3116C1.08588 59.2421 -0.123866 61.9806 0.0105495 64.9885C0.234576 70.286 4.53588 74.551 9.77811 74.7306C12.8249 74.8204 15.558 73.6082 17.4846 71.588C19.008 70.0167 21.069 69.029 23.2645 69.029H24.1158C26.3113 69.029 28.3723 69.9718 29.8957 71.588C31.9119 73.698 34.8243 74.9101 38.0055 74.6857C42.9788 74.3265 47.0113 70.286 47.3698 65.2579C47.773 59.287 43.1133 54.3486 37.2438 54.3486C34.4658 54.3486 31.9119 55.4709 30.0749 57.3116C28.5067 58.8829 26.4009 59.8257 24.2054 59.8257H23.2645C21.069 59.8257 18.9184 58.9727 17.3502 57.3565C17.3054 57.3116 17.3054 57.3116 17.2606 57.2667C15.6476 55.6954 14.7067 53.5854 14.7067 51.3407V50.4428C14.7067 48.1981 15.6476 46.0881 17.2606 44.5168C19.1424 42.6761 20.2626 40.1171 20.2626 37.2888C20.2626 34.4605 19.0976 31.9015 17.2606 30.0608C15.6476 28.4895 14.7067 26.3795 14.7067 24.1348V23.3267C14.7067 21.082 15.6476 18.9719 17.2158 17.4006C17.2606 17.3558 17.2606 17.3558 17.3054 17.3109C17.3502 17.266 17.3502 17.266 17.395 17.2211C18.9632 15.6498 21.069 14.707 23.3093 14.707H24.1158C26.3561 14.707 28.4619 15.6498 30.0301 17.266C31.8671 19.1515 34.421 20.2739 37.2438 20.2739C40.0665 20.2739 42.6204 19.1066 44.4574 17.266C46.0256 15.6498 48.1315 14.707 50.3717 14.707H51.0886C53.3289 14.707 55.4347 15.6498 57.0029 17.266C58.8399 19.1515 61.3938 20.2739 64.2166 20.2739C70.0413 20.3188 74.701 15.3804 74.2978 9.40948Z"
                                                fill="#F8BF1E"></path>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/$-->
                </div>
                <div class="flex"></div>
                <div
                    class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                    <div class="grid">
                        <div class="flex md:hidden flex-col justify-center items-center order-1"></div>
                        <div class="order-2">
                            <div class="flex flex-col gap-6">
                                <div class="flex">
                                    <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                </div>
                                <div class="uppercase"><a target="" class="flex gap-2 items-center z-50 hover:z-50 "
                                        href="/newsletters">
                                        <h2 class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                            Newsletters</h2><svg class="" fill="none" height="24" viewBox="0 0 25 24"
                                            width="25" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                fill="#676767"></path>
                                        </svg>
                                    </a></div>
                                <div class="grid gap-6 grid-cols-4 md:grid-cols-8 lg:grid-cols-16 xl:grid-cols-16">
                                    <div class="col-span-4 md:col-span-8 lg:col-span-5 xl:col-span-6 pb-6">
                                        <div data-module-name="newsletter-sign-up-module" data-module-version="1.0.0"
                                            data-module-instance="default" class="border p-6 md:p-10 lg:p-6"><span
                                                class="text-color-dark-grey font-headline-xs font-medium text-charcoal-900">Don&#x27;t
                                                miss another story.</span><span
                                                class="block font-headline-3xs font-normal text-charcoal-900">Subscribe
                                                to the Coindesk Newsletter today
                                                <!-- -->.
                                            </span>
                                            <div
                                                class="flex flex-col md:flex-row lg:flex-col xl:flex-row gap-4 justify-start items-center pt-2">
                                                <div class="group flex flex-col data-[hidden=true]:hidden w-full relative justify-end data-[has-label=true]:mt-[calc(theme(fontSize.small)_+_10px)]"
                                                    data-slot="base" data-filled="true" data-filled-within="true"
                                                    data-has-value="true">
                                                    <div data-slot="main-wrapper" class="h-full flex flex-col">
                                                        <div data-slot="input-wrapper"
                                                            class="relative w-full inline-flex tap-highlight-transparent flex-row items-center shadow-sm px-3 gap-3 border-medium border-default-200 data-[hover=true]:border-default-400 group-data-[focus=true]:border-default-foreground h-10 min-h-10 rounded-small transition-background !duration-150 transition-colors motion-reduce:transition-none !h-12"
                                                            style="cursor:text">
                                                            <div data-slot="inner-wrapper"
                                                                class="inline-flex w-full items-center h-full box-border">
                                                                <input data-slot="input"
                                                                    class="w-full font-normal bg-transparent !outline-none placeholder:text-foreground-500 focus-visible:outline-none data-[has-start-content=true]:ps-1.5 data-[has-end-content=true]:pe-1.5 file:cursor-pointer file:bg-transparent file:border-0 autofill:bg-transparent bg-clip-text text-small border-transparent focus:border-transparent focus:ring-0 focus:outline-none font-label"
                                                                    aria-label="Enter your Email" type="email"
                                                                    placeholder="Enter your Email"
                                                                    id="react-aria-:R5rqhulnfb:"
                                                                    aria-describedby="react-aria-:R5rqhulnfbH3: react-aria-:R5rqhulnfbH4:"
                                                                    value="" /></div>
                                                        </div>
                                                    </div>
                                                </div><button type="button"
                                                    class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-6 min-w-24 h-12 text-medium gap-3 rounded-large [&amp;&gt;svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none text-default-foreground data-[hover=true]:opacity-hover w-full md:w-auto lg:w-full xl:w-auto bg-new-yellow">
                                                    <div class="flex gap-2 p-4 pl-6 items-center"><span
                                                            class="text-color-dark-grey font-label font-medium">Sign me
                                                            up</span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none">
                                                            <mask id="mask0_2411_93" style="mask-type:alpha"
                                                                maskUnits="userSpaceOnUse" x="0" y="0" width="16"
                                                                height="16">
                                                                <rect x="0.5" y="0.50061" width="16" height="16"
                                                                    fill="#D9D9D9"></rect>
                                                            </mask>
                                                            <g mask="url(#mask0_2411_93)">
                                                                <path
                                                                    d="M3.16669 12.834V4.1673L13.4487 8.50063L3.16669 12.834ZM3.83335 11.834L11.7334 8.50063L3.83335 5.1673V7.75696L7.06419 8.50063L3.83335 9.2443V11.834Z"
                                                                    fill="#262626"></path>
                                                            </g>
                                                        </svg></div>
                                                </button>
                                            </div><span class="pt-4 font-metadata text-charcoal-600"><span
                                                    class="text-color-dark-grey ">By signing up, you will receive emails
                                                    about CoinDesk products and you agree to our </span><a
                                                    class="border-b-[1px] border-black !no-underline"
                                                    href="/terms"><span class="text-color-dark-grey ">terms of
                                                        use</span></a><span class="text-color-dark-grey "> and </span><a
                                                    class="border-b-[1px] border-black !no-underline"
                                                    href="/privacy"><span class="text-color-dark-grey ">privacy
                                                        policy</span></a><span
                                                    class="text-color-dark-grey font-metadata text-charcoal-600">.</span></span>
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-8 lg:col-span-11 xl:col-span-10">
                                        <div class="gap-4 grid flex-col grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-3">
                            <div class="grid gap-4 grid-cols-4 md:gap-6 md:grid-cols-8 lg:grid-cols-12 xl:grid-cols-16">
                                <div
                                    class="order-1 col-span-4 md:col-span-8 lg:col-span-12 xl:order-2 xl:col-span-12 xl:row-span-2">
                                    <div class="pb-6">
                                        <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                    </div>
                                    <div class="flex pb-6 items-center">
                                        <h2 class="text-color-dark-grey font-title text-charcoal-600 uppercase">Most
                                            Read</h2>
                                    </div>
                                    <div class="hidden md:flex">
                                        <div class="
			  flex flex-col gap-1 md:flex-row
				false
			">
                                            <div class="relative inline-block h-12 w-[60px]">
                                                <img alt="elipse"
                                                    loading="lazy" width="20" height="20"
                                                    class="h-8 min-h-8 w-8 min-w-8" style="color:transparent"
                                                    src="/img/elipse.png" />
                                                    <span
                                                    class="absolute bottom-0 right-0 font-body text-color-charcoal-900 uppercase">01
                                                    <!-- -->.
                                                </span></div>
                                            <div class="bg-white flex gap-6 w-full shrink flex-col md:flex-row">
                                                <div class="flex flex-col"><a
                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                        href="/markets/2025/03/18/bitcoin-pulls-back-with-markets-nervous-ahead-of-fed-meeting-results">
                                                        <h3 class="font-headline font-medium">Bitcoin Pulls Back With
                                                            Markets Nervous Ahead of Fed Meeting Results</h3>
                                                    </a>
                                                    <p class="font-body text-color-charcoal-600  mb-4 line-clamp-3">The
                                                        Nasdaq and S&amp;P 500 were both lower by more than 1% about an
                                                        hour before the close.</p>
                                                    <p class="flex gap-2 flex-col"><span
                                                            class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                class="mr-2">By
                                                                <!-- --> <a title="Stephen Alpher"
                                                                    class="text-color-charcoal-900 hover:underline"
                                                                    href="/author/stephen-alpher">Stephen Alpher</a>
                                                            </span></span><span
                                                            class="font-metadata text-color-charcoal-600 uppercase">Mar
                                                            18, 2025</span></p>
                                                </div><a
                                                    title="Bitcoin Pulls Back With Markets Nervous Ahead of Fed Meeting Results"
                                                    class="flex shrink-0 flex-col"
                                                    href="/markets/2025/03/18/bitcoin-pulls-back-with-markets-nervous-ahead-of-fed-meeting-results"><img
                                                        alt="" loading="lazy" width="416" height="234" decoding="async"
                                                        data-nimg="1"
                                                        class="w-full md:w-60 md:h-[335px] lg:w-[416px] lg:h-[334px] rounded align-self-end object-cover"
                                                        style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAIGBQf/xAAkEAACAQMEAAcAAAAAAAAAAAABAgMABAUGERIhFCIxMkJxkf/EABYBAQEBAAAAAAAAAAAAAAAAAAMCBf/EABwRAAEEAwEAAAAAAAAAAAAAAAABAgMRBAVBE//aAAwDAQACEQMRAD8ArWxyTyyASAooJbj2aSztrCOYiSIMrL5Wlbj3W5b4a0xyv4NXj59E8t9/2lutN4+8W3e6WSXcnpn6H1VSbSd3aBZhRM5anLNQY822TkSKRZE9QVINFWp0zjGdy0Te4/KislVtbF8j/9k=&quot;)"
                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F8d7b52647532c8388bbc60b32ca762a1d543b993-5500x3417.jpg%3Fauto%3Dformat&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F8d7b52647532c8388bbc60b32ca762a1d543b993-5500x3417.jpg%3Fauto%3Dformat&amp;w=1080&amp;q=75 2x"
                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F8d7b52647532c8388bbc60b32ca762a1d543b993-5500x3417.jpg%3Fauto%3Dformat&amp;w=1080&amp;q=75" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex md:hidden">
                                        <div class="
			  flex flex-col gap-1 md:flex-row
				false
			">
                                            <div class="relative inline-block h-12 w-[60px]"><img alt="elipse"
                                                    loading="lazy" width="20" height="20" decoding="async" data-nimg="1"
                                                    class="h-8 min-h-8 w-8 min-w-8" style="color:transparent"
                                                    srcSet="/_next/image?url=%2Fimages%2Felipse.png&amp;w=32&amp;q=75 1x, /_next/image?url=%2Fimages%2Felipse.png&amp;w=48&amp;q=75 2x"
                                                    src="/_next/image?url=%2Fimages%2Felipse.png&amp;w=48&amp;q=75" /><span
                                                    class="absolute bottom-0 right-0 font-body text-color-charcoal-900 uppercase">01
                                                    <!-- -->.
                                                </span></div>
                                            <div class="bg-white flex gap-6 w-full shrink flex-col md:flex-row">
                                                <div class="flex flex-col"><a
                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                        href="/markets/2025/03/18/bitcoin-pulls-back-with-markets-nervous-ahead-of-fed-meeting-results">
                                                        <h3 class="font-headline font-medium">Bitcoin Pulls Back With
                                                            Markets Nervous Ahead of Fed Meeting Results</h3>
                                                    </a>
                                                    <p class="font-body text-color-charcoal-600  mb-4 line-clamp-3">The
                                                        Nasdaq and S&amp;P 500 were both lower by more than 1% about an
                                                        hour before the close.</p>
                                                    <p class="flex gap-2 flex-col"><span
                                                            class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                class="mr-2">By
                                                                <!-- --> <a title="Stephen Alpher"
                                                                    class="text-color-charcoal-900 hover:underline"
                                                                    href="/author/stephen-alpher">Stephen Alpher</a>
                                                            </span></span><span
                                                            class="font-metadata text-color-charcoal-600 uppercase">Mar
                                                            18, 2025</span></p>
                                                </div><a
                                                    title="Bitcoin Pulls Back With Markets Nervous Ahead of Fed Meeting Results"
                                                    class="flex shrink-0 flex-col"
                                                    href="/markets/2025/03/18/bitcoin-pulls-back-with-markets-nervous-ahead-of-fed-meeting-results"><img
                                                        alt="" loading="lazy" width="416" height="234" decoding="async"
                                                        data-nimg="1"
                                                        class="w-full md:w-60 md:h-[335px] lg:w-[416px] lg:h-[334px] rounded align-self-end object-cover"
                                                        style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAIGBQf/xAAkEAACAQMEAAcAAAAAAAAAAAABAgMABAUGERIhFCIxMkJxkf/EABYBAQEBAAAAAAAAAAAAAAAAAAMCBf/EABwRAAEEAwEAAAAAAAAAAAAAAAABAgMRBAVBE//aAAwDAQACEQMRAD8ArWxyTyyASAooJbj2aSztrCOYiSIMrL5Wlbj3W5b4a0xyv4NXj59E8t9/2lutN4+8W3e6WSXcnpn6H1VSbSd3aBZhRM5anLNQY822TkSKRZE9QVINFWp0zjGdy0Te4/KislVtbF8j/9k=&quot;)"
                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F8d7b52647532c8388bbc60b32ca762a1d543b993-5500x3417.jpg%3Fauto%3Dformat&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F8d7b52647532c8388bbc60b32ca762a1d543b993-5500x3417.jpg%3Fauto%3Dformat&amp;w=1080&amp;q=75 2x"
                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F8d7b52647532c8388bbc60b32ca762a1d543b993-5500x3417.jpg%3Fauto%3Dformat&amp;w=1080&amp;q=75" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="order-2 col-span-4 md:order-3 md:col-span-8 lg:col-span-12 xl:order-3 xl:col-span-12 xl:row-span-6">
                                    <div class="pb-6">
                                        <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"></div>
                                </div>
                                <div class="order-3 col-span-full">
                                    <div class="color-black relative flex items-start justify-center aw970px ah250px"
                                        style="height:250px">
                                        <div id="homepage_mid_dynamic_1" data-freestar-ad="true"
                                            style="width:970px;height:250px"
                                            class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;&gt;iframe]:m-auto aw970px ah250px">
                                        </div>
                                        <div style="width:970px;height:250px"
                                            class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw970px ah250px">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="75"
                                                viewBox="0 0 100 75" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="opacity-30 [&amp;&gt;path]:fill-[#DCDCDD]">
                                                <path
                                                    d="M37.1542 40.7009C39.0349 40.7009 40.5594 39.1733 40.5594 37.2889C40.5594 35.4045 39.0349 33.877 37.1542 33.877C35.2736 33.877 33.749 35.4045 33.749 37.2889C33.749 39.1733 35.2736 40.7009 37.1542 40.7009Z"
                                                    fill="#F8BF1E"></path>
                                                <path
                                                    d="M64.3066 40.7009C66.1872 40.7009 67.7118 39.1733 67.7118 37.2889C67.7118 35.4045 66.1872 33.877 64.3066 33.877C62.4259 33.877 60.9014 35.4045 60.9014 37.2889C60.9014 39.1733 62.4259 40.7009 64.3066 40.7009Z"
                                                    fill="#F8BF1E"></path>
                                                <path
                                                    d="M64.3066 67.9515C66.1872 67.9515 67.7118 66.4239 67.7118 64.5395C67.7118 62.6552 66.1872 61.1276 64.3066 61.1276C62.4259 61.1276 60.9014 62.6552 60.9014 64.5395C60.9014 66.4239 62.4259 67.9515 64.3066 67.9515Z"
                                                    fill="#F8BF1E"></path>
                                                <path
                                                    d="M74.2978 9.40948C73.9393 4.42622 69.9517 0.385744 64.9783 0.0265903C61.7971 -0.197881 58.9295 1.01426 56.9133 3.0794C55.3899 4.65069 53.3289 5.59347 51.1334 5.59347H50.3269C48.0867 5.59347 45.9808 4.65069 44.4126 3.0345C42.5756 1.14894 40.0217 0.0265903 37.199 0.0265903C34.3762 0.0265903 31.8223 1.19384 29.9853 3.0345C28.4171 4.65069 26.3113 5.59347 24.071 5.59347H23.3093C21.1139 5.59347 19.008 4.74048 17.4846 3.16919C17.171 2.85493 16.8573 2.54067 16.5437 2.2713C12.7353 -0.8264 7.13459 -0.736612 3.46056 2.54067C-0.975169 6.44646 -1.15439 13.2704 2.9677 17.4006C3.01251 17.4455 3.05731 17.4904 3.10212 17.5353C4.71511 19.0617 5.56641 21.2167 5.56641 23.4165V24.1797C5.56641 26.4244 4.6255 28.5344 3.0125 30.1057C1.13068 31.9464 0.0105495 34.5053 0.0105495 37.3337C0.0105495 40.162 1.17549 42.721 3.0125 44.5617C4.6255 46.133 5.56641 48.243 5.56641 50.4877V51.5203C5.56641 53.7201 4.6255 55.7852 3.05731 57.3116C1.08588 59.2421 -0.123866 61.9806 0.0105495 64.9885C0.234576 70.286 4.53588 74.551 9.77811 74.7306C12.8249 74.8204 15.558 73.6082 17.4846 71.588C19.008 70.0167 21.069 69.029 23.2645 69.029H24.1158C26.3113 69.029 28.3723 69.9718 29.8957 71.588C31.9119 73.698 34.8243 74.9101 38.0055 74.6857C42.9788 74.3265 47.0113 70.286 47.3698 65.2579C47.773 59.287 43.1133 54.3486 37.2438 54.3486C34.4658 54.3486 31.9119 55.4709 30.0749 57.3116C28.5067 58.8829 26.4009 59.8257 24.2054 59.8257H23.2645C21.069 59.8257 18.9184 58.9727 17.3502 57.3565C17.3054 57.3116 17.3054 57.3116 17.2606 57.2667C15.6476 55.6954 14.7067 53.5854 14.7067 51.3407V50.4428C14.7067 48.1981 15.6476 46.0881 17.2606 44.5168C19.1424 42.6761 20.2626 40.1171 20.2626 37.2888C20.2626 34.4605 19.0976 31.9015 17.2606 30.0608C15.6476 28.4895 14.7067 26.3795 14.7067 24.1348V23.3267C14.7067 21.082 15.6476 18.9719 17.2158 17.4006C17.2606 17.3558 17.2606 17.3558 17.3054 17.3109C17.3502 17.266 17.3502 17.266 17.395 17.2211C18.9632 15.6498 21.069 14.707 23.3093 14.707H24.1158C26.3561 14.707 28.4619 15.6498 30.0301 17.266C31.8671 19.1515 34.421 20.2739 37.2438 20.2739C40.0665 20.2739 42.6204 19.1066 44.4574 17.266C46.0256 15.6498 48.1315 14.707 50.3717 14.707H51.0886C53.3289 14.707 55.4347 15.6498 57.0029 17.266C58.8399 19.1515 61.3938 20.2739 64.2166 20.2739C70.0413 20.3188 74.701 15.3804 74.2978 9.40948Z"
                                                    fill="#F8BF1E"></path>
                                            </svg></div>
                                    </div>
                                </div>
                                <div
                                    class="grid order-4 xl:order-1 md:order-3 col-span-4 md:col-span-8 lg:col-span-12 xl:col-span-4 xl:row-span-8 gap-6">
                                    <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-1 gap-6">
                                        <div class="flex flex-col col-span-1 lg:col-span-2 xl:col-span-1">
                                            <div class="pb-6">
                                                <hr class="shrink-0 border-none w-full h-divider bg-black"
                                                    role="separator" />
                                            </div>
                                            <div class="pb-6 uppercase"><a target=""
                                                    class="flex gap-2 items-center z-50 hover:z-50 " href="/opinion">
                                                    <h2
                                                        class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                        Opinion</h2><svg class="" fill="none" height="24"
                                                        viewBox="0 0 25 24" width="25"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                            fill="#676767"></path>
                                                    </svg>
                                                </a></div>
                                            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1  gap-4">
                                                <div>
                                                    <div class="
			  flex gap-4
				false
			">
                                                        <div class="bg-white flex gap-6 w-full shrink justify-between">
                                                            <div class="flex flex-col-reverse gap-2"><a
                                                                    class="text-color-charcoal-900 mb-4 hover:underline"
                                                                    href="/opinion/2025/03/18/crypto-for-humans-lessons-from-the-bybit-hack">
                                                                    <h3 class="font-headline-2xs font-normal">Crypto for
                                                                        Humans: Lessons from the Bybit Hack</h3>
                                                                </a>
                                                                <p class="flex gap-2 flex-col"><span
                                                                        class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                            class="mr-2">By
                                                                            <!-- --> <a title="Ben Charoenwong"
                                                                                class="text-color-charcoal-900 hover:underline"
                                                                                href="/author/ben-charoenwong">Ben
                                                                                Charoenwong</a>
                                                                        </span></span></p>
                                                            </div><a title="Ben Charoenwong"
                                                                class="flex shrink-0 flex-col"
                                                                href="/author/ben-charoenwong"><img
                                                                    alt="Ben Charoenwong" loading="lazy" width="128"
                                                                    height="128" decoding="async" data-nimg="1"
                                                                    class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                                                                    style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAVCAIAAADJt1n/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAETUlEQVR4nE3TaVNaZxQHcL5KU22MgsYNxY0oqIkaE0frhEYLehFQEEEUBBFlkbK4IBI2RUFQQRQQhHtZlHvZnXY60/ZFmzadtt+kg5jozP/NM3N+c+Y8z3NQ0VQ+mspDSA6Es5Fk5jKWPDz1ylRa9oKAxeXxlyUancHh8QWiyfBNBoSzIJwD4TwIFwmqiJE8BOfAZMYPXRttDgZrrrOLUF9X31Bf34rD9fX1MZhsvcXmAxMlDCFF+Rhng7GkYe9wEqB1tLTgqqsI9c9ft2LftDURsc/xOCxlYvLDvj2UQEA4e4fzEFJAxYo4F0Vy7kCYsyDofvGC1I2XASTbEvtMIXJLF7eY45SX+P4uvEAk9oagUs8vuFAa++jMD0zRR3oIuxwgv6f9w+/8O+L96LPnLEoTd+L9qy4ajX505nvAqQIqni7EUvlYKu88888wZ+fejwa14t881r/A83+vg79futIWtUM4Mz3cB1AoNpcbQnKlZtF7fJfji6CAvyRhTHqUwuCWAjRsIAeGK53SymetU0nTw/1MKrDvcIFw9gGXZCxdOA9G1DKpfAbY5U0beUzTPNO0wNxiUX+gjovHhmdHBngA2Wo2h6+RaLo0aeHutu8SAWMew7ZjhXuytuCWCk4lC84Vno0/a19k7fPoiokR8QRpb0cXjsOPcGkGJB9LwNceF2xSZy2arGUzY9JmzNqIShxY5fkkXB39O+nU2KHZFLlOQak8VMJQ8dGLicKZRPAS3t8pmNU/WTZuzRuwXuld4R7zGKf8aS3wTsGZPnadgMnMff09/uxBMBq2mW908qxegewoIa3cLZy3c+iHnCnV1Pi2QuYLgZ+f6h5noeKny0JILpKA/S5XQCNPaNdSelVqdzOuVvglixY2VcYALEbTVQJ+hPOou+96n0gy7XV7D2RrHjE/qVP9eGC6te4G5MtyCmmJRj10OCPJ4m484NIZTBbjiySs+0e7UsWeYPFUIgpvqUIbym0WnTbQy56g2OzOcLE492U3ip0jN+lgDD4JRNQ7Vg5fuq3V+8xWx9rqLndWRZvkDA2Se4gz35MVqk3byfn5VTyUSJU86jwct3v8Gr2VLZAOjgLdr8flKn0eyaYufHaJSE0mib99KwYmBfMCCm2OTOcsite1hj27238ejqOEUi3A5Pe+GWts68M0dNe1DFBZongy98+fn25Dl2eyZbtw/tho1H2wDY8x6nBEbHtvz+A7Mp27uKJEtRKGaptfVtTgy6pan1bj0Q29PYNkg/X446f/fv35l1OTeU+jdp96LS4feYZfje36qqKhrKoJ3dCJ7ehHVdYRntUSKmo6yzHt32DaK2uJje1vmfNrV7FUKIqsKnSsOaFGZzpwB0XrO23EoSfPGp9UNpWhW8rQOBQG+wrT2FtVR3xa3VGObq+sI9Y09w+O0rfNzhMftCzXUei89S3TBYgYD739w5SyquYydEs5pvXrqub/AdnnyPd4jO42AAAAAElFTkSuQmCC&quot;)"
                                                                    srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F65511a3b2528b20ffefa3c49224dbc311f842bdc-1451x1558.png%3Fauto%3Dformat&amp;w=128&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F65511a3b2528b20ffefa3c49224dbc311f842bdc-1451x1558.png%3Fauto%3Dformat&amp;w=256&amp;q=75 2x"
                                                                    src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F65511a3b2528b20ffefa3c49224dbc311f842bdc-1451x1558.png%3Fauto%3Dformat&amp;w=256&amp;q=75" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="py-4 py-4">
                                                        <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                            role="separator" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="
			  flex gap-4
				false
			">
                                                        <div class="bg-white flex gap-6 w-full shrink justify-between">
                                                            <div class="flex flex-col-reverse gap-2"><a
                                                                    class="text-color-charcoal-900 mb-4 hover:underline"
                                                                    href="/opinion/2025/03/18/how-funding-fragmentation-holds-ethereum-back">
                                                                    <h3 class="font-headline-2xs font-normal">How
                                                                        Funding Fragmentation Holds Ethereum Back</h3>
                                                                </a>
                                                                <p class="flex gap-2 flex-col"><span
                                                                        class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                            class="mr-2">By
                                                                            <!-- --> <a title="Meg Lister"
                                                                                class="text-color-charcoal-900 hover:underline"
                                                                                href="/author/meg-lister">Meg Lister</a>
                                                                        </span></span></p>
                                                            </div><a title="Meg Lister" class="flex shrink-0 flex-col"
                                                                href="/author/meg-lister"><img
                                                                    alt="CoinDesk placeholder image" loading="lazy"
                                                                    width="1056" height="594" decoding="async"
                                                                    data-nimg="1"
                                                                    class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                                                                    style="color:transparent"
                                                                    srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=1080&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=3840&amp;q=75 2x"
                                                                    src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=3840&amp;q=75" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="py-4 py-4">
                                                        <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                            role="separator" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="
			  flex gap-4
				false
			">
                                                        <div class="bg-white flex gap-6 w-full shrink justify-between">
                                                            <div class="flex flex-col-reverse gap-2"><a
                                                                    class="text-color-charcoal-900 mb-4 hover:underline"
                                                                    href="/opinion/2025/03/17/the-u-s-deserves-better-crypto-etfs-let-s-start-with-solana">
                                                                    <h3 class="font-headline-2xs font-normal">The U.S.
                                                                        Deserves Better Crypto ETFs. Let&#x27;s Start
                                                                        With Solana</h3>
                                                                </a>
                                                                <p class="flex gap-2 flex-col"><span
                                                                        class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                            class="mr-2">By
                                                                            <!-- --> <a title="Hadley Stern"
                                                                                class="text-color-charcoal-900 hover:underline"
                                                                                href="/author/hadley-stern">Hadley
                                                                                Stern</a>
                                                                        </span></span></p>
                                                            </div><a title="Hadley Stern" class="flex shrink-0 flex-col"
                                                                href="/author/hadley-stern"><img alt="Hadley Stern"
                                                                    loading="lazy" width="128" height="128"
                                                                    decoding="async" data-nimg="1"
                                                                    class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                                                                    style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGQABAAMBAQAAAAAAAAAAAAAAAAIDBQQH/8QAJhAAAgEEAQIGAwAAAAAAAAAAAQIDAAQFERIGIQcTFCIxYUFCgf/EABcBAQEBAQAAAAAAAAAAAAAAAAMEBQb/xAAeEQACAQQDAQAAAAAAAAAAAAABAgADERIxBDJBkf/aAAwDAQACEQMRAD8Aj09PFc5deUi6Lb477kAVZfZL1OUlVQIuPwQ3YVk2VhBjcgjeeAre4MR7tfVcPUV+MdM9w0Y4TgrGNa/prJThs6ZBb3ipVUKQdyc900krOtsXB/YfmlX9PXFpHiohLfQK57kb+KVIy1FNsT8MPIH2ZMszvkJnY7ZX4j6FaniAiy43DsyjbISTSldmvRpCdieYXMrpPIqnQB0KUpUpiT//2Q==&quot;)"
                                                                    srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fd527a648d6f10920f32e13580162d6bc5a25bfa2-400x400.jpg%3Fauto%3Dformat&amp;w=128&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fd527a648d6f10920f32e13580162d6bc5a25bfa2-400x400.jpg%3Fauto%3Dformat&amp;w=256&amp;q=75 2x"
                                                                    src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fd527a648d6f10920f32e13580162d6bc5a25bfa2-400x400.jpg%3Fauto%3Dformat&amp;w=256&amp;q=75" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="py-4 md:hidden xl:flex">
                                                        <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                            role="separator" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="
			  flex gap-4
				false
			">
                                                        <div class="bg-white flex gap-6 w-full shrink justify-between">
                                                            <div class="flex flex-col-reverse gap-2"><a
                                                                    class="text-color-charcoal-900 mb-4 hover:underline"
                                                                    href="/opinion/2025/03/13/the-state-of-dao-m-and-a">
                                                                    <h3 class="font-headline-2xs font-normal">The State
                                                                        of DAO M&amp;A</h3>
                                                                </a>
                                                                <p class="flex gap-2 flex-col"><span
                                                                        class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                            class="mr-2">By
                                                                            <!-- --> <a title="Joshua Tan"
                                                                                class="text-color-charcoal-900 hover:underline"
                                                                                href="/author/joshua-tan">Joshua
                                                                                Tan</a>, <a title="Jillian Grennan"
                                                                                class="text-color-charcoal-900 hover:underline"
                                                                                href="/author/jillian-grennan">Jillian
                                                                                Grennan</a>, <a title="Bernard Schmid"
                                                                                class="text-color-charcoal-900 hover:underline"
                                                                                href="/author/bernard-schmid">Bernard
                                                                                Schmid</a>
                                                                        </span></span></p>
                                                            </div><a title="Joshua Tan" class="flex shrink-0 flex-col"
                                                                href="/author/joshua-tan"><img alt="Joshua Tan"
                                                                    loading="lazy" width="128" height="128"
                                                                    decoding="async" data-nimg="1"
                                                                    class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                                                                    style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEyElEQVR4nG2T+U9UVxiG7z/VpL80tRQbjDVSqxFFWRXJ2FagCioqwjDgMAszwyqbuFFl2BSRGqsVjEStUgGlQKEgjLNy586dO3eAweRp7iCmbfrDm5Nz3vM+33dO8gmRSAxVXUeN/r8iK++JaOsHKf/QxztqDEVdQ47EEMLqGooa+xiIw9X/hmP/Am3qYxF1nbAa2wDK6lp8o0kz4lXVjcDmeVybIC286UU1bx05sk4oEkNSYgiSorW6caiZSvT9R20E1pCVVSQpgrgsExTDhMIryJGNJ4Y+gMTwWlyCLxglIK2wHFqNGxo0rL6PS1ZjcZB74R2zv08w9fQZsy9HeTs9i9cdIBiKEtJA8ip+aYWAtIrwZnqJyeklZubcuLwhgvJqvLLWcWA5xOzYOE+6uuiz2+izmnjY0shIVyejQ8PMzy2yHFQJSFHcgQieQATh1p2H9PQO0t//C6OvpvH4w4SUNcRQlD/GJhhoqqO98Huqs1Opzc3EebaQ/ioDtxtqGLl/nyWXD38wissns+iWEOrq2zFV2bCaHQwOPmJhKRAH+gMSI4MDXC4uoFWXxsXD+2nVZeA8lUfn2eNcPXuc/os1TI+N4xcV3vllFlwigqW6kdISPaXnyujuHmBu3osUXsPnCfCkt5tLx7+jPnsfdRl7uXg4lfYfDnEpP4fWvGyc5wsZu3cPn0/EK0ZY8kgINnsz5aUGys7pcTr7+XPOHf9kt8vL8I3r1OakUZq8jbJvtlO5Zwf29G9pzE2lWXeAruICxgZ/xu8TCUgqbn8YweFooaLsAobzFXQ6+5mefceyvIrH7WOo8zqOI2lU7EnGmpqC7eBubAeTcWRq0P30mfXMvBxFlCIsSyregAa0N3NBb6SitBJn10C8Q0leJSjKjA8/4oa+mMYjmTTnZFKXnULl3m2U795K/dEDPLjeiuvtIsHwCgExgscvI9TVtlFlMMWh3T13mZv3IIdXUZQV3PPzDDs7aCvKp2L/Lop2fEFB0qcU7/iM5oIsnt5x4nZ7EOUofg3okxGaGtuxGi2YKqvo7bvLXwvuODCiTYikMDM+Tne9nbOpyei+/IT8pE8xpHzFldM6Ht5sZ2L0N1yLLjw+Ebc3iNDadAW7qRqL0Uxfn9ahOz5aSmQNRdGeHmJs5DGtJT9SsieRsr1bqdWlcFV/kqs2Ez1NNp4N/MSbp4+YfDWK0NZ0DYfZgdVoprdX+0MXYkhFVlYIh1eQJIWpV6N02cuxHtqFOTOZluI82q02zMVnqMlPx1maw23rSW7XGxBaGq9QY3FQXWWlp2eAqZm3BEQlPqeiKDM3NcVgZwcNZ/IxZe/CdjSNK9U26h1tnM7NpTItibrDSdQd+ZoGXTJCra2eaqMF6wUzzs5bTEzO4/ZJeL3LzE6+ZvDGZSxniijLzcaYtZuLp/K41nIdQ7mdYym7MOzbguXgFoypW7CkJSIY9RVUlJRiKC2j/VIHz1+8ZnZ6lsnnIwzdbKO6UEdeZib6/BM0nDhGR6WetvrL5B0tRLczEdOBBOwZCZgObMGUloBQdvo0Z4qKOFVYhMPeyMMHj3nx6z2GrtXQaSigcP9OslPSsZQ7cNprueVw0GCsISslA932z7GlJ1KXtZXqtATM6Qn8DfE29aWkuC6lAAAAAElFTkSuQmCC&quot;)"
                                                                    srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F27d2a2e9b7fd8b9174c8022ee9043c893edf7a52-192x193.png%3Fauto%3Dformat&amp;w=128&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F27d2a2e9b7fd8b9174c8022ee9043c893edf7a52-192x193.png%3Fauto%3Dformat&amp;w=256&amp;q=75 2x"
                                                                    src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F27d2a2e9b7fd8b9174c8022ee9043c893edf7a52-192x193.png%3Fauto%3Dformat&amp;w=256&amp;q=75" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="hidden py-4">
                                                        <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                            role="separator" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col col-span-1">
                                            <div class="pb-6">
                                                <hr class="shrink-0 border-none w-full h-divider bg-black"
                                                    role="separator" />
                                            </div>
                                            <div class="pb-6 uppercase"><a target=""
                                                    class="flex gap-2 items-center z-50 hover:z-50 "
                                                    href="/press-release">
                                                    <h2
                                                        class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                        Press Releases</h2><svg class="" fill="none" height="24"
                                                        viewBox="0 0 25 24" width="25"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                            fill="#676767"></path>
                                                    </svg>
                                                </a></div>
                                            <div class="flex flex-col gap-6">
                                                <div class="relative">
                                                    <div>
                                                        <div
                                                            class="transition-opacity duration-300 min-h-[130px] block">
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/press-release/2025/03/12/lbank-launches-usd100m-futures-protection-fund-for-traders">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                LBank Launches $100M Futures Protection
                                                                                Fund for Traders</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                                    class="mr-2">Paid for by
                                                                                    <!-- --> <span>LBank</span>
                                                                                </span></span><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Mar
                                                                                12, 2025</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="transition-opacity duration-300 min-h-[130px] hidden">
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/press-release/2025/02/24/saga-launches-liquidity-integration-layer-lil-revolutionizing-cross-chain-liquidity">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Saga Launches Liquidity Integration
                                                                                Layer (LIL), Revolutionizing Cross Chain
                                                                                Liquidity</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                                    class="mr-2">Paid for by
                                                                                    <!-- --> <span>Saga</span>
                                                                                </span></span><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Feb
                                                                                27, 2025</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="transition-opacity duration-300 min-h-[130px] hidden">
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/press-release/2025/02/18/web3port-foundation-commits-usd100m-to-boost-liquidity-on-novastro-the-first-rwa-project-on-movement">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Web3Port Foundation Commits $100M to
                                                                                Boost Liquidity on Novastro, the First
                                                                                RWA Project on Movement</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                                    class="mr-2">Paid for by
                                                                                    <!-- --> <span>Novastro</span>
                                                                                </span></span><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Feb
                                                                                18, 2025</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="transition-opacity duration-300 min-h-[130px] hidden">
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/press-release/2025/02/18/ltp-secures-hong-kong-sfc-licenses-expanding-regulated-virtual-asset-prime-brokerage-services">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                LTP Secures Hong Kong SFC Licenses,
                                                                                Expanding Regulated Virtual Asset Prime
                                                                                Brokerage Services</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                                    class="mr-2">Paid for by
                                                                                    <!-- --> <span>LTP</span>
                                                                                </span></span><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Feb
                                                                                18, 2025</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="transition-opacity duration-300 min-h-[130px] hidden">
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/press-release/2025/02/14/oracle-red-bull-racing-and-gate-io-expand-blockchain-s-global-reach-with-announcement-of-multi-year-partnership">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                ORACLE RED BULL RACING AND GATE.IO
                                                                                EXPAND BLOCKCHAIN’S GLOBAL REACH WITH
                                                                                ANNOUNCEMENT OF MULTI-YEAR PARTNERSHIP
                                                                            </h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                                                                    class="mr-2">Paid for by
                                                                                    <!-- --> <span>Gate.io</span>
                                                                                </span></span><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Feb
                                                                                14, 2025</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col justify-center items-center">
                                                        <div class="flex flex-row justify-between">
                                                            <div
                                                                class="flex justify-center space-x-2 md:space-x-2 lg:space-x-4 px-12 md:px-18 lg:px-18 items-center">
                                                                <button
                                                                    class="w-2 h-2 bg-black border bg-opacity-60 border-transparent rounded-full"></button><button
                                                                    class="w-2 h-2 bg-black border bg-opacity-20 border-[rgba(255,255,255,0.3)] rounded-full"></button><button
                                                                    class="w-2 h-2 bg-black border bg-opacity-20 border-[rgba(255,255,255,0.3)] rounded-full"></button><button
                                                                    class="w-2 h-2 bg-black border bg-opacity-20 border-[rgba(255,255,255,0.3)] rounded-full"></button><button
                                                                    class="w-2 h-2 bg-black border bg-opacity-20 border-[rgba(255,255,255,0.3)] rounded-full"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                        <div class="flex py-6">
                            <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                        </div><a target="_blank" class="flex gap-2 items-center z-50 hover:z-50 "
                            href="https://consensus2025.coindesk.com/">
                            <h2 class="text-color-dark-grey font-title text-charcoal-600 hover:underline">CONSENSUS
                                TORONTO</h2><svg class="" fill="none" height="24" viewBox="0 0 25 24" width="25"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                    fill="#676767"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="w-full overflow-hidden relative flex flex-col">
                        <div class="relative">
                            <div class="flex flex-col gap-4 self-stretch pt-4 lg:py-4">
                                <div
                                    class="flex bg-[#000] py-8 flex-col justify-center items-center self-stretch h-[580px] md:h-[665px] lg:h-[281px] xl:h-[368px]">
                                    <div
                                        class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                            <div
                                                class="transition-opacity duration-300 order-1 lg:order-2  flex gap-6 w-full shrink items-center justify-center">
                                                <div class="flex flex-col shrink-0 items-center justify-center w-full">
                                                    <img alt="Consensus Toronto 2025" loading="lazy" width="585"
                                                        height="329" decoding="async" data-nimg="1"
                                                        class="object-cover h-[300px] w-full  md:h-[383px] lg:w-[585px] lg:h-[329px] xl:w-[728px] xl:h-[432px] rounded align-self-end"
                                                        style="color:transparent"
                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fbd67b758f7546e58d665991fa21313c083c7c003-1200x800.png%3Fauto%3Dformat&amp;w=640&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fbd67b758f7546e58d665991fa21313c083c7c003-1200x800.png%3Fauto%3Dformat&amp;w=1200&amp;q=75 2x"
                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fbd67b758f7546e58d665991fa21313c083c7c003-1200x800.png%3Fauto%3Dformat&amp;w=1200&amp;q=75" />
                                                </div>
                                            </div>
                                            <div
                                                class="transition-opacity duration-300 order-2 lg:order-1 justify-start lg:justify-center flex flex-col gap-6 h-[290px] md:h-[290px] lg:h-full">
                                                <div class="flex flex-col gap-2">
                                                    <h3
                                                        class="text-color-black font-headline-sm font-medium text-[#fff]">
                                                        Consensus Toronto 2025</h3><span
                                                        class="text-color-black font-body font-medium text-[#D4D4D4]">Check
                                                        out the latest coverage and meet our top speakers. </span>
                                                </div><button type="button"
                                                    class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-4 min-w-20 text-small gap-2 rounded-small [&amp;&gt;svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none bg-default text-default-foreground data-[hover=true]:opacity-hover h-10 w-[140px] border border-[#FFD200]"><span
                                                        class="text-color-black font-label font-medium leading-6">Learn
                                                        More</span><svg class="" fill="none" height="24"
                                                        viewBox="0 0 24 24" width="24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                            fill="#262626"></path>
                                                    </svg></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="flex flex-row justify-center lg:justify-start"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                    <div class="grid">
                        <div class="flex flex-col justify-center items-center order-1 lg:order-2 xl:hidden"></div>
                        <div class="order-2 lg:order-1">
                            <div class="flex flex-col">
                                <div class="flex pt-6">
                                    <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                </div>
                                <div class="py-6 uppercase"><a target=""
                                        class="flex gap-2 items-center z-50 hover:z-50 " href="/podcasts">
                                        <h2 class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                            Podcasts</h2><svg class="" fill="none" height="24" viewBox="0 0 25 24"
                                            width="25" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                fill="#676767"></path>
                                        </svg>
                                    </a></div>
                                <div class="grid gap-6 grid-cols-4 md:grid-cols-8 lg:grid-cols-12 xl:grid-cols-16">
                                    <div class="order-1 lg:order-2 col-span-4 lg:col-span-6 xl:col-span-8">
                                        <div class="relative">
                                            <div class="art19-player medium h-52"><iframe title="Podcast Player"
                                                    class="w-full h-full"
                                                    src="https://art19.com/shows/e05bbfac-7bd7-476a-a0ad-2eea41553323/episodes/4b99cb1c-1985-40a8-961c-fe7aaa775ff2/embed?type=medium&amp;theme=dark-green&amp;primary_color=%23FFD200"
                                                    scrolling="no"></iframe></div>
                                        </div>
                                        <div class="flex flex-col gap-6">
                                            <div class="flex pt-4">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <div class="flex justify-center text-center"><span
                                                        class="text-color-black font-body leading-5 tracking-[0.4px] text-[#676767]">Listen
                                                        or watch all the new CoinDesk podcast episodes wherever you
                                                        want.</span></div><a target="_blank"
                                                    class="hidden gap-2 items-center justify-start xl:justify-center"
                                                    href=""><span
                                                        class="text-color-black font-headline-2xs font-medium">Label</span><svg
                                                        class="" fill="none" height="24" viewBox="0 0 24 24" width="24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                            fill="#262626"></path>
                                                    </svg></a>
                                            </div>
                                            <div class="flex justify-center gap-6">
                                                <div
                                                    class="grid grid-cols-6 gap-2 md:gap-4 lg:gap-2 md:grid-cols-9 lg:grid-cols-9 space-x-0 lg:self-center">
                                                    <a href="https://link.chtbl.com/MarketsDaily?platform=castbox"
                                                        target="_blank" rel="noreferrer"
                                                        class="hover:opacity-80 transition-opacity"><img alt=""
                                                            loading="lazy" width="24" height="24" decoding="async"
                                                            data-nimg="1" style="color:transparent"
                                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe1db402cdb2af7b3d2dd6c66047e7b1f0d88ff7a-24x24.svg%3Fauto%3Dformat&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe1db402cdb2af7b3d2dd6c66047e7b1f0d88ff7a-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75 2x"
                                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe1db402cdb2af7b3d2dd6c66047e7b1f0d88ff7a-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75" /></a><a
                                                        href="https://link.chtbl.com/MarketsDaily?platform=google_podcasts"
                                                        target="_blank" rel="noreferrer"
                                                        class="hover:opacity-80 transition-opacity"><img alt=""
                                                            loading="lazy" width="24" height="24" decoding="async"
                                                            data-nimg="1" style="color:transparent"
                                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F18db0f315956f23ec81d4c08932994584c49b535-24x24.svg%3Fauto%3Dformat&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F18db0f315956f23ec81d4c08932994584c49b535-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75 2x"
                                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F18db0f315956f23ec81d4c08932994584c49b535-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75" /></a><a
                                                        href="https://link.chtbl.com/MarketsDaily?platform=itunes"
                                                        target="_blank" rel="noreferrer"
                                                        class="hover:opacity-80 transition-opacity"><img alt=""
                                                            loading="lazy" width="24" height="24" decoding="async"
                                                            data-nimg="1" style="color:transparent"
                                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fa4636af1d0075fe11da69ac54e71161daf1aa3e7-24x24.svg%3Fauto%3Dformat&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fa4636af1d0075fe11da69ac54e71161daf1aa3e7-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75 2x"
                                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fa4636af1d0075fe11da69ac54e71161daf1aa3e7-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75" /></a><a
                                                        href="https://link.chtbl.com/MarketsDaily?platform=pocket_casts"
                                                        target="_blank" rel="noreferrer"
                                                        class="hover:opacity-80 transition-opacity"><img alt=""
                                                            loading="lazy" width="24" height="24" decoding="async"
                                                            data-nimg="1" style="color:transparent"
                                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F2e9fd85a44b19ea513b09fcbd87de46ba9376d6a-24x24.svg%3Fauto%3Dformat&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F2e9fd85a44b19ea513b09fcbd87de46ba9376d6a-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75 2x"
                                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F2e9fd85a44b19ea513b09fcbd87de46ba9376d6a-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75" /></a><a
                                                        href="https://rss.art19.com/markets-daily" target="_blank"
                                                        rel="noreferrer"
                                                        class="hover:opacity-80 transition-opacity"><img alt=""
                                                            loading="lazy" width="24" height="24" decoding="async"
                                                            data-nimg="1" style="color:transparent"
                                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Ffaa7f70762ec242837dc43bc7f7820f0a6a8fa2e-24x24.svg%3Fauto%3Dformat&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Ffaa7f70762ec242837dc43bc7f7820f0a6a8fa2e-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75 2x"
                                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Ffaa7f70762ec242837dc43bc7f7820f0a6a8fa2e-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75" /></a><a
                                                        href="https://link.chtbl.com/MarketsDaily?platform=radio_public"
                                                        target="_blank" rel="noreferrer"
                                                        class="hover:opacity-80 transition-opacity"><img alt=""
                                                            loading="lazy" width="24" height="24" decoding="async"
                                                            data-nimg="1" style="color:transparent"
                                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F477e27f4df4e4647ab22163731550b681e4cee7f-24x24.svg%3Fauto%3Dformat&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F477e27f4df4e4647ab22163731550b681e4cee7f-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75 2x"
                                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F477e27f4df4e4647ab22163731550b681e4cee7f-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75" /></a><a
                                                        href="https://link.chtbl.com/MarketsDaily?platform=spotify"
                                                        target="_blank" rel="noreferrer"
                                                        class="hover:opacity-80 transition-opacity"><img alt=""
                                                            loading="lazy" width="24" height="24" decoding="async"
                                                            data-nimg="1" style="color:transparent"
                                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fce9bf982682015b0c620743dec694de2ad133168-24x24.svg%3Fauto%3Dformat&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fce9bf982682015b0c620743dec694de2ad133168-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75 2x"
                                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fce9bf982682015b0c620743dec694de2ad133168-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75" /></a><a
                                                        href="https://link.chtbl.com/MarketsDaily?platform=stitcher"
                                                        target="_blank" rel="noreferrer"
                                                        class="hover:opacity-80 transition-opacity"><img alt=""
                                                            loading="lazy" width="24" height="24" decoding="async"
                                                            data-nimg="1" style="color:transparent"
                                                            srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F73c7a6f6b32d92bc4139636098ca0c7da6611da9-24x24.svg%3Fauto%3Dformat&amp;w=32&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F73c7a6f6b32d92bc4139636098ca0c7da6611da9-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75 2x"
                                                            src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F73c7a6f6b32d92bc4139636098ca0c7da6611da9-24x24.svg%3Fauto%3Dformat&amp;w=48&amp;q=75" /></a>
                                                </div>
                                            </div>
                                            <div class="flex md:hidden">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="hidden lg:flex lg:flex-col order-2 lg:order-1 col-span-4 lg:col-span-3 xl:col-span-4">
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/markets-daily">
                                                <h3 class="text-color-black font-headline-2xs font-normal">Markets Daily
                                                    Crypto Roundup</h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Tune
                                                in as CoinDesk runs down daily action in bitcoin markets and some of the
                                                most important recent industry development. </span>
                                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/generation-c">
                                                <h3 class="text-color-black font-headline-2xs font-normal">Gen C</h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Generation
                                                Crypto is a weekly show focused on how brands and marketers are
                                                exploring and building in the Web3 ecosystem with hosts Avery Akkineni
                                                of Vayner3 and Head of Coindesk Studios, Sam Ewen. They will dive into
                                                how Fortune 500 brands and new start-ups alike are coming to the
                                                blockchain and utilizing new technologies. </span>
                                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/coindesks-money-reimagined">
                                                <h3 class="text-color-black font-headline-2xs font-normal">CoinDesk’s
                                                    Money Reimagined</h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Join
                                                CoinDesk’s Michael Casey and Sheila Warren CEO of the Crypto Council for
                                                Innovation as they explore the connections between finance, human
                                                culture and our increasingly digital lives.</span>
                                            <div class="hidden ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="hidden lg:flex lg:flex-col order-3 col-span-4 lg:col-span-3 xl:col-span-4">
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/unchained">
                                                <h3 class="text-color-black font-headline-2xs font-normal">Unchained
                                                </h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Unchained,
                                                your no hype resource for all things crypto by former Forbes senior
                                                editor Laura Shin, author of The Cryptopians.</span>
                                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/hard-problems-bram-cohen">
                                                <h3 class="text-color-black font-headline-2xs font-normal">Hard Problems
                                                    with Bram Cohen</h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Join
                                                Bram Cohen as he and a growing cast of subject matter experts explore
                                                the hardest problems still unsolved in our modern world.</span>
                                            <div class="hidden ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="
						order-4 col-span-4 lg:col-span-6 xl:col-span-4 pb-6 md:pb-0
						grid grid-rows-1 grid-flow-col grid-cols-[repeat(auto-fill,minmax(300px,1fr))]
						md:grid-cols-1 md:grid-rows-none md:grid-flow-row gap-4
						no-scrollbar overflow-x-auto overflow-y-hidden md:overflow-auto md:overflow-y-scroll
						lg:hidden">
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/markets-daily">
                                                <h3 class="text-color-black font-headline-2xs font-normal">Markets Daily
                                                    Crypto Roundup</h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Tune
                                                in as CoinDesk runs down daily action in bitcoin markets and some of the
                                                most important recent industry development. </span>
                                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/generation-c">
                                                <h3 class="text-color-black font-headline-2xs font-normal">Gen C</h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Generation
                                                Crypto is a weekly show focused on how brands and marketers are
                                                exploring and building in the Web3 ecosystem with hosts Avery Akkineni
                                                of Vayner3 and Head of Coindesk Studios, Sam Ewen. They will dive into
                                                how Fortune 500 brands and new start-ups alike are coming to the
                                                blockchain and utilizing new technologies. </span>
                                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/coindesks-money-reimagined">
                                                <h3 class="text-color-black font-headline-2xs font-normal">CoinDesk’s
                                                    Money Reimagined</h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Join
                                                CoinDesk’s Michael Casey and Sheila Warren CEO of the Crypto Council for
                                                Innovation as they explore the connections between finance, human
                                                culture and our increasingly digital lives.</span>
                                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/unchained">
                                                <h3 class="text-color-black font-headline-2xs font-normal">Unchained
                                                </h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Unchained,
                                                your no hype resource for all things crypto by former Forbes senior
                                                editor Laura Shin, author of The Cryptopians.</span>
                                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full"><a
                                                class="hover:underline" href="/podcasts/hard-problems-bram-cohen">
                                                <h3 class="text-color-black font-headline-2xs font-normal">Hard Problems
                                                    with Bram Cohen</h3>
                                            </a><span
                                                class="text-color-black font-body-sm line-clamp-2 text-[#676767]">Join
                                                Bram Cohen as he and a growing cast of subject matter experts explore
                                                the hardest problems still unsolved in our modern world.</span>
                                            <div class="hidden ">
                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                    role="separator" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-3">
                            <div class="flex flex-col">
                                <div>
                                    <div class="hidden lg:grid lg:grid-cols-2 gap-6 pt-8">
                                        <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                        <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                    </div>
                                    <div class="grid grid-col-1 lg:grid-cols-2 gap-0 md:gap-6">
                                        <div>
                                            <div class="flex pt-8 lg:hidden md:pt-8">
                                                <hr class="shrink-0 border-none w-full h-divider bg-black"
                                                    role="separator" />
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex py-6 uppercase"><a target=""
                                                        class="flex gap-2 items-center z-50 hover:z-50 "
                                                        href="/markets">
                                                        <h2
                                                            class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                            Markets</h2><svg class="" fill="none" height="24"
                                                            viewBox="0 0 25 24" width="25"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                                fill="#676767"></path>
                                                        </svg>
                                                    </a></div>
                                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <div class="
			  flex gap-4
				false
			">
                                                            <div class="bg-white flex gap-6 w-full shrink flex-col">
                                                                <div class="flex flex-col"><a
                                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                                        href="/markets/2025/03/21/north-korea-linked-lazarus-group-holds-more-bitcoin-than-elon-musk-s-tesla">
                                                                        <h2 class="font-headline-xs font-normal">North
                                                                            Korea-Linked Lazarus Group Holds More
                                                                            Bitcoin Than Elon Musk&#x27;s Tesla</h2>
                                                                    </a>
                                                                    <p
                                                                        class="font-body-sm text-color-charcoal-600 mb-4 line-clamp-3 flex md:hidden">
                                                                        D.O.G.E head Elon Musk&#x27;s Tesla falls behind
                                                                        North Korean hacker group in terms of BTC
                                                                        holdings as President Trump plans to make U.S.
                                                                        the crypto capital of the world.</p>
                                                                    <p class="flex gap-2 flex-col"><span
                                                                            class="font-metadata-lg font-medium text-color-charcoal-900 uppercase flex md:hidden"><span
                                                                                class="mr-2">By
                                                                                <!-- --> <a title="Omkar Godbole"
                                                                                    class="text-color-charcoal-900 hover:underline"
                                                                                    href="/author/omkar-godbole">Omkar
                                                                                    Godbole</a>
                                                                            </span></span><span
                                                                            class="font-metadata text-color-charcoal-600 uppercase">34
                                                                            minutes ago</span></p>
                                                                </div><a
                                                                    title="North Korea-Linked Lazarus Group Holds More Bitcoin Than Elon Musk&#x27;s Tesla"
                                                                    class="flex shrink-0 flex-col"
                                                                    href="/markets/2025/03/21/north-korea-linked-lazarus-group-holds-more-bitcoin-than-elon-musk-s-tesla"><img
                                                                        alt="North Korea-linked Lazarus holds more BTC than Tesla. (Image via Shutterstock)"
                                                                        loading="lazy" width="1920" height="1080"
                                                                        decoding="async" data-nimg="1"
                                                                        class="w-full md:w-60 md:h-[135px] lg:w-[416px] lg:h-[234px] rounded align-self-end aspect-video object-cover object-cover"
                                                                        style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAEFB//EAB8QAAIBBAMBAQAAAAAAAAAAAAECAwAEBRESIUETMf/EABYBAQEBAAAAAAAAAAAAAAAAAAEDBP/EABsRAAICAwEAAAAAAAAAAAAAAAECABESMVGB/9oADAMBAAIRAxEAPwDbZclDCXC7aQDYAH7UuyzU+SWUSW7Rxqdgmo2fL/S3VZHVSdHidUMGSWONJHVSmyQe6uiAC+zO7l2xvUWSmmN23KdU66U+Cim9lA7FpE5sfW7NFPkcx2f/2Q==&quot;)"
                                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fc6d5af50ee5c575900d02495c07fd58e23e81c9f-1500x876.jpg%3Fauto%3Dformat&amp;w=1920&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fc6d5af50ee5c575900d02495c07fd58e23e81c9f-1500x876.jpg%3Fauto%3Dformat&amp;w=3840&amp;q=75 2x"
                                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fc6d5af50ee5c575900d02495c07fd58e23e81c9f-1500x876.jpg%3Fauto%3Dformat&amp;w=3840&amp;q=75" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/markets/2025/03/21/polymarket-is-94-accurate-in-predicting-world-events-research">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Polymarket is 90% Accurate in Predicting
                                                                                World Events: Research</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">1
                                                                                hour ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/markets/2025/03/20/nasdaq-s-shift-to-round-the-clock-stock-trading-due-to-crypto-says-exchange-executive">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Nasdaq Shift To Round-The-Clock Stock
                                                                                Trading Partly Due to Crypto, Says
                                                                                Exchange Executive</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">12
                                                                                hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/markets/2025/03/20/bitcoin-miners-feel-squeeze-as-hashprice-erases-post-election-gains">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Bitcoin Miners Feel Squeeze as Hashprice
                                                                                Erases Post-Election Gains</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">12
                                                                                hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex md:hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                        </div>
                                        <div>
                                            <div class="flex pt-8 lg:hidden md:pt-8">
                                                <hr class="shrink-0 border-none w-full h-divider bg-black"
                                                    role="separator" />
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex py-6 uppercase"><a target=""
                                                        class="flex gap-2 items-center z-50 hover:z-50 "
                                                        href="/business">
                                                        <h2
                                                            class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                            Finance</h2><svg class="" fill="none" height="24"
                                                            viewBox="0 0 25 24" width="25"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                                fill="#676767"></path>
                                                        </svg>
                                                    </a></div>
                                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <div class="
			  flex gap-4
				false
			">
                                                            <div class="bg-white flex gap-6 w-full shrink flex-col">
                                                                <div class="flex flex-col"><a
                                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                                        href="/business/2025/03/20/tether-ranks-among-top-foreign-buyers-of-u-s-treasuries-in-2024-firm-says">
                                                                        <h2 class="font-headline-xs font-normal">Tether
                                                                            Ranks Among Top Buyers of U.S. Treasuries in
                                                                            2024, Firm Says</h2>
                                                                    </a>
                                                                    <p
                                                                        class="font-body-sm text-color-charcoal-600 mb-4 line-clamp-3 flex md:hidden">
                                                                        The firm said it purchased a net $33.1 billion
                                                                        worth of U.S. Treasury securities last year,</p>
                                                                    <p class="flex gap-2 flex-col"><span
                                                                            class="font-metadata-lg font-medium text-color-charcoal-900 uppercase flex md:hidden"><span
                                                                                class="mr-2">By
                                                                                <!-- --> <a title="Krisztian Sandor"
                                                                                    class="text-color-charcoal-900 hover:underline"
                                                                                    href="/author/krisztian-sandor">Krisztian
                                                                                    Sandor</a>
                                                                            </span></span><span
                                                                            class="font-metadata text-color-charcoal-600 uppercase">12
                                                                            hours ago</span></p>
                                                                </div><a
                                                                    title="Tether Ranks Among Top Buyers of U.S. Treasuries in 2024, Firm Says"
                                                                    class="flex shrink-0 flex-col"
                                                                    href="/business/2025/03/20/tether-ranks-among-top-foreign-buyers-of-u-s-treasuries-in-2024-firm-says"><img
                                                                        alt="Treasury image via Shutterstock"
                                                                        loading="lazy" width="1920" height="1080"
                                                                        decoding="async" data-nimg="1"
                                                                        class="w-full md:w-60 md:h-[135px] lg:w-[416px] lg:h-[234px] rounded align-self-end aspect-video object-cover object-cover"
                                                                        style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABgAFB//EACIQAAEEAgIDAAMAAAAAAAAAAAIBAwQFABIGESEiUQeRwf/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFhEBAQEAAAAAAAAAAAAAAAAAABES/9oADAMBAAIRAxEAPwBJWnZwoSRKyNDp4op37FsfX3D97a0bdW7ZW9s9bNtHoQAXhF+dYBOwm2HMa85Mp1Sdh7H0XSL6/MLw29/x9yIyVdkmCifvKO4115VOV8d2rgbRXAQhXXLMngzaNcTrQTyiNf3LJoj/2Q==&quot;)"
                                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996.jpg%3Fauto%3Dformat&amp;w=1920&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996.jpg%3Fauto%3Dformat&amp;w=3840&amp;q=75 2x"
                                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996.jpg%3Fauto%3Dformat&amp;w=3840&amp;q=75" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/business/2025/03/20/how-restaking-protocol-ether-fi-retained-tvl-despite-waning-hype">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                How Ether.fi Retained TVL as Restaking
                                                                                Lost Its Luster</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">13
                                                                                hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/business/2025/03/20/data-storage-protocol-walrus-raises-usd140m-in-token-sale-ahead-of-mainnet-launch">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Data Storage Protocol Walrus Raises
                                                                                $140M in Token Sale Ahead of Mainnet
                                                                                Launch</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">13
                                                                                hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/business/2025/03/20/uranium-digital-raises-usd6-1m-to-speed-debut-of-crypto-powered-spot-market">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Uranium Digital Raises $6.1M to Speed
                                                                                Debut of Crypto-Powered Spot Market</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">18
                                                                                hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                        </div>
                                    </div>
                                    <div class="hidden xl:flex lg:hidden md:flex justify-center items-center mt-6">
                                        <div class="w-full">
                                            <div class="color-black relative flex items-start justify-center aw970px ah250px"
                                                style="height:250px">
                                                <div id="homepage_mid_desktop_5" data-freestar-ad="true"
                                                    style="width:970px;height:250px"
                                                    class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;&gt;iframe]:m-auto aw970px ah250px">
                                                </div>
                                                <div style="width:970px;height:250px"
                                                    class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw970px ah250px">
                                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                                                        height="75" viewBox="0 0 100 75" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="opacity-30 [&amp;&gt;path]:fill-[#DCDCDD]">
                                                        <path
                                                            d="M37.1542 40.7009C39.0349 40.7009 40.5594 39.1733 40.5594 37.2889C40.5594 35.4045 39.0349 33.877 37.1542 33.877C35.2736 33.877 33.749 35.4045 33.749 37.2889C33.749 39.1733 35.2736 40.7009 37.1542 40.7009Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M64.3066 40.7009C66.1872 40.7009 67.7118 39.1733 67.7118 37.2889C67.7118 35.4045 66.1872 33.877 64.3066 33.877C62.4259 33.877 60.9014 35.4045 60.9014 37.2889C60.9014 39.1733 62.4259 40.7009 64.3066 40.7009Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M64.3066 67.9515C66.1872 67.9515 67.7118 66.4239 67.7118 64.5395C67.7118 62.6552 66.1872 61.1276 64.3066 61.1276C62.4259 61.1276 60.9014 62.6552 60.9014 64.5395C60.9014 66.4239 62.4259 67.9515 64.3066 67.9515Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M74.2978 9.40948C73.9393 4.42622 69.9517 0.385744 64.9783 0.0265903C61.7971 -0.197881 58.9295 1.01426 56.9133 3.0794C55.3899 4.65069 53.3289 5.59347 51.1334 5.59347H50.3269C48.0867 5.59347 45.9808 4.65069 44.4126 3.0345C42.5756 1.14894 40.0217 0.0265903 37.199 0.0265903C34.3762 0.0265903 31.8223 1.19384 29.9853 3.0345C28.4171 4.65069 26.3113 5.59347 24.071 5.59347H23.3093C21.1139 5.59347 19.008 4.74048 17.4846 3.16919C17.171 2.85493 16.8573 2.54067 16.5437 2.2713C12.7353 -0.8264 7.13459 -0.736612 3.46056 2.54067C-0.975169 6.44646 -1.15439 13.2704 2.9677 17.4006C3.01251 17.4455 3.05731 17.4904 3.10212 17.5353C4.71511 19.0617 5.56641 21.2167 5.56641 23.4165V24.1797C5.56641 26.4244 4.6255 28.5344 3.0125 30.1057C1.13068 31.9464 0.0105495 34.5053 0.0105495 37.3337C0.0105495 40.162 1.17549 42.721 3.0125 44.5617C4.6255 46.133 5.56641 48.243 5.56641 50.4877V51.5203C5.56641 53.7201 4.6255 55.7852 3.05731 57.3116C1.08588 59.2421 -0.123866 61.9806 0.0105495 64.9885C0.234576 70.286 4.53588 74.551 9.77811 74.7306C12.8249 74.8204 15.558 73.6082 17.4846 71.588C19.008 70.0167 21.069 69.029 23.2645 69.029H24.1158C26.3113 69.029 28.3723 69.9718 29.8957 71.588C31.9119 73.698 34.8243 74.9101 38.0055 74.6857C42.9788 74.3265 47.0113 70.286 47.3698 65.2579C47.773 59.287 43.1133 54.3486 37.2438 54.3486C34.4658 54.3486 31.9119 55.4709 30.0749 57.3116C28.5067 58.8829 26.4009 59.8257 24.2054 59.8257H23.2645C21.069 59.8257 18.9184 58.9727 17.3502 57.3565C17.3054 57.3116 17.3054 57.3116 17.2606 57.2667C15.6476 55.6954 14.7067 53.5854 14.7067 51.3407V50.4428C14.7067 48.1981 15.6476 46.0881 17.2606 44.5168C19.1424 42.6761 20.2626 40.1171 20.2626 37.2888C20.2626 34.4605 19.0976 31.9015 17.2606 30.0608C15.6476 28.4895 14.7067 26.3795 14.7067 24.1348V23.3267C14.7067 21.082 15.6476 18.9719 17.2158 17.4006C17.2606 17.3558 17.2606 17.3558 17.3054 17.3109C17.3502 17.266 17.3502 17.266 17.395 17.2211C18.9632 15.6498 21.069 14.707 23.3093 14.707H24.1158C26.3561 14.707 28.4619 15.6498 30.0301 17.266C31.8671 19.1515 34.421 20.2739 37.2438 20.2739C40.0665 20.2739 42.6204 19.1066 44.4574 17.266C46.0256 15.6498 48.1315 14.707 50.3717 14.707H51.0886C53.3289 14.707 55.4347 15.6498 57.0029 17.266C58.8399 19.1515 61.3938 20.2739 64.2166 20.2739C70.0413 20.3188 74.701 15.3804 74.2978 9.40948Z"
                                                            fill="#F8BF1E"></path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="hidden lg:grid lg:grid-cols-2 gap-6 pt-8">
                                        <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                        <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                    </div>
                                    <div class="grid grid-col-1 lg:grid-cols-2 gap-0 md:gap-6">
                                        <div>
                                            <div class="flex pt-8 lg:hidden md:pt-8">
                                                <hr class="shrink-0 border-none w-full h-divider bg-black"
                                                    role="separator" />
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex py-6 uppercase"><a target=""
                                                        class="flex gap-2 items-center z-50 hover:z-50 " href="/tech">
                                                        <h2
                                                            class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                            Tech</h2><svg class="" fill="none" height="24"
                                                            viewBox="0 0 25 24" width="25"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                                fill="#676767"></path>
                                                        </svg>
                                                    </a></div>
                                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <div class="
			  flex gap-4
				false
			">
                                                            <div class="bg-white flex gap-6 w-full shrink flex-col">
                                                                <div class="flex flex-col"><a
                                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                                        href="/tech/2025/03/20/bitcoin-defi-expansion-faces-fork-dilemma-as-developers-explore-zk-proofs">
                                                                        <h2 class="font-headline-xs font-normal">Bitcoin
                                                                            DeFi Expansion Faces Fork Dilemma as
                                                                            Developers Explore ZK Proofs</h2>
                                                                    </a>
                                                                    <p
                                                                        class="font-body-sm text-color-charcoal-600 mb-4 line-clamp-3 flex md:hidden">
                                                                        BitcoinOS contributor and crypto OG Edan Yago
                                                                        describes forks on Bitcoin as like
                                                                        &quot;open-heart surgery.&quot;</p>
                                                                    <p class="flex gap-2 flex-col"><span
                                                                            class="font-metadata-lg font-medium text-color-charcoal-900 uppercase flex md:hidden"><span
                                                                                class="mr-2">By
                                                                                <!-- --> <a title="Jamie Crawley"
                                                                                    class="text-color-charcoal-900 hover:underline"
                                                                                    href="/author/jamie-crawley">Jamie
                                                                                    Crawley</a>
                                                                            </span></span><span
                                                                            class="font-metadata text-color-charcoal-600 uppercase">14
                                                                            hours ago</span></p>
                                                                </div><a
                                                                    title="Bitcoin DeFi Expansion Faces Fork Dilemma as Developers Explore ZK Proofs"
                                                                    class="flex shrink-0 flex-col"
                                                                    href="/tech/2025/03/20/bitcoin-defi-expansion-faces-fork-dilemma-as-developers-explore-zk-proofs"><img
                                                                        alt="Photo of Edan Yago standing in front of  a sponsor board. (Courtesy: BitcoinOS)"
                                                                        loading="lazy" width="1920" height="1080"
                                                                        decoding="async" data-nimg="1"
                                                                        class="w-full md:w-60 md:h-[135px] lg:w-[416px] lg:h-[234px] rounded align-self-end aspect-video object-cover object-cover"
                                                                        style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAUBBAb/xAAkEAACAAYBAwUAAAAAAAAAAAABAgADBAUGESEHE7ESFDEyYf/EABUBAQEAAAAAAAAAAAAAAAAAAAIA/8QAFxEBAQEBAAAAAAAAAAAAAAAAAAEREv/aAAwDAQACEQMRAD8A1VkxHHns1JPmW9CWkhyefnUTiVFjuQUtROk21VWRMMog7HIhvizs1hoATse3XxCnpMPTR31R9RXvoQYdLspstlorksqVRIF7YbX7zBFLqPUTUyPSOQOyvkwQNXL/2Q==&quot;)"
                                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679.jpg%3Frect%3D82%2C133%2C971%2C546%26w%3D1920%26h%3D1080%26auto%3Dformat&amp;w=1920&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679.jpg%3Frect%3D82%2C133%2C971%2C546%26w%3D1920%26h%3D1080%26auto%3Dformat&amp;w=3840&amp;q=75 2x"
                                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679.jpg%3Frect%3D82%2C133%2C971%2C546%26w%3D1920%26h%3D1080%26auto%3Dformat&amp;w=3840&amp;q=75" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/tech/2025/03/19/the-protocol-meet-hoodi-ethereum-s-new-testnet">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                The Protocol: Meet Hoodi, Ethereum’s New
                                                                                Testnet</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Mar
                                                                                19, 2025</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/tech/2025/03/19/elon-musk-s-ai-start-up-nvidia-join-microsoft-blackrock-mgx-ai-fund">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Elon Musk’s AI Start-Up and Nvidia Join
                                                                                Microsoft, BlackRock, MGX AI Fund</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Mar
                                                                                19, 2025</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/tech/2025/03/19/ethereum-to-sunset-holesky-testnet-in-september">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Ethereum to Sunset ‘Holesky’ Testnet in
                                                                                September</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Mar
                                                                                19, 2025</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="flex md:hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                        </div>
                                        <div>
                                            <div class="flex pt-8 lg:hidden md:pt-8">
                                                <hr class="shrink-0 border-none w-full h-divider bg-black"
                                                    role="separator" />
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex py-6 uppercase"><a target=""
                                                        class="flex gap-2 items-center z-50 hover:z-50 " href="/policy">
                                                        <h2
                                                            class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                            Policy</h2><svg class="" fill="none" height="24"
                                                            viewBox="0 0 25 24" width="25"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                                fill="#676767"></path>
                                                        </svg>
                                                    </a></div>
                                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <div class="
			  flex gap-4
				false
			">
                                                            <div class="bg-white flex gap-6 w-full shrink flex-col">
                                                                <div class="flex flex-col"><a
                                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                                        href="/policy/2025/03/20/u-s-bank-agency-cuts-reputational-risk-from-exams-after-crypto-sector-cites-issues">
                                                                        <h2 class="font-headline-xs font-normal">U.S.
                                                                            Bank Agency Cuts &#x27;Reputational
                                                                            Risk&#x27; From Exams After Crypto Sector
                                                                            Cites Issues</h2>
                                                                    </a>
                                                                    <p
                                                                        class="font-body-sm text-color-charcoal-600 mb-4 line-clamp-3 flex md:hidden">
                                                                        The crypto industry argued that U.S. regulators
                                                                        used the idea of risks to banks&#x27; reputation
                                                                        to pressure them to reject digital assets
                                                                        clients, and the OCC has answered.</p>
                                                                    <p class="flex gap-2 flex-col"><span
                                                                            class="font-metadata-lg font-medium text-color-charcoal-900 uppercase flex md:hidden"><span
                                                                                class="mr-2">By
                                                                                <!-- --> <a title="Jesse Hamilton"
                                                                                    class="text-color-charcoal-900 hover:underline"
                                                                                    href="/author/jesse-hamilton">Jesse
                                                                                    Hamilton</a>
                                                                            </span></span><span
                                                                            class="font-metadata text-color-charcoal-600 uppercase">8
                                                                            hours ago</span></p>
                                                                </div><a
                                                                    title="U.S. Bank Agency Cuts &#x27;Reputational Risk&#x27; From Exams After Crypto Sector Cites Issues"
                                                                    class="flex shrink-0 flex-col"
                                                                    href="/policy/2025/03/20/u-s-bank-agency-cuts-reputational-risk-from-exams-after-crypto-sector-cites-issues"><img
                                                                        alt="CoinDesk placeholder image" loading="lazy"
                                                                        width="1056" height="594" decoding="async"
                                                                        data-nimg="1"
                                                                        class="w-full md:w-60 md:h-[135px] lg:w-[416px] lg:h-[234px] rounded align-self-end aspect-video object-cover object-cover"
                                                                        style="color:transparent"
                                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=1080&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=3840&amp;q=75 2x"
                                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=3840&amp;q=75" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/policy/2025/03/20/sec-chair-nominee-paul-atkins-to-face-senate-panel-next-week">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                SEC Chair Nominee Paul Atkins to Face
                                                                                Senate Panel Next Week</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">9
                                                                                hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/policy/2025/03/20/proof-of-work-crypto-mining-doesn-t-trigger-securities-laws-sec-says">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Proof-of-Work Crypto Mining Doesn’t
                                                                                Trigger Securities Laws, SEC Says</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">10
                                                                                hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/policy/2025/03/20/gotbit-founder-aleksei-andriunin-pleads-guilty-to-wire-fraud-market-manipulation">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Gotbit Founder Aleksei Andriunin Pleads
                                                                                Guilty to Wire Fraud, Market
                                                                                Manipulation</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">13
                                                                                hours ago</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                        </div>
                                    </div>
                                    <div class="hidden lg:flex xl:hidden justify-center items-center mt-6">
                                        <div class="w-full">
                                            <div class="color-black relative flex items-start justify-center aw970px ah250px"
                                                style="height:250px">
                                                <div id="homepage_mid_desktop_5" data-freestar-ad="true"
                                                    style="width:970px;height:250px"
                                                    class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;&gt;iframe]:m-auto aw970px ah250px">
                                                </div>
                                                <div style="width:970px;height:250px"
                                                    class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw970px ah250px">
                                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                                                        height="75" viewBox="0 0 100 75" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="opacity-30 [&amp;&gt;path]:fill-[#DCDCDD]">
                                                        <path
                                                            d="M37.1542 40.7009C39.0349 40.7009 40.5594 39.1733 40.5594 37.2889C40.5594 35.4045 39.0349 33.877 37.1542 33.877C35.2736 33.877 33.749 35.4045 33.749 37.2889C33.749 39.1733 35.2736 40.7009 37.1542 40.7009Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M64.3066 40.7009C66.1872 40.7009 67.7118 39.1733 67.7118 37.2889C67.7118 35.4045 66.1872 33.877 64.3066 33.877C62.4259 33.877 60.9014 35.4045 60.9014 37.2889C60.9014 39.1733 62.4259 40.7009 64.3066 40.7009Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M64.3066 67.9515C66.1872 67.9515 67.7118 66.4239 67.7118 64.5395C67.7118 62.6552 66.1872 61.1276 64.3066 61.1276C62.4259 61.1276 60.9014 62.6552 60.9014 64.5395C60.9014 66.4239 62.4259 67.9515 64.3066 67.9515Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M74.2978 9.40948C73.9393 4.42622 69.9517 0.385744 64.9783 0.0265903C61.7971 -0.197881 58.9295 1.01426 56.9133 3.0794C55.3899 4.65069 53.3289 5.59347 51.1334 5.59347H50.3269C48.0867 5.59347 45.9808 4.65069 44.4126 3.0345C42.5756 1.14894 40.0217 0.0265903 37.199 0.0265903C34.3762 0.0265903 31.8223 1.19384 29.9853 3.0345C28.4171 4.65069 26.3113 5.59347 24.071 5.59347H23.3093C21.1139 5.59347 19.008 4.74048 17.4846 3.16919C17.171 2.85493 16.8573 2.54067 16.5437 2.2713C12.7353 -0.8264 7.13459 -0.736612 3.46056 2.54067C-0.975169 6.44646 -1.15439 13.2704 2.9677 17.4006C3.01251 17.4455 3.05731 17.4904 3.10212 17.5353C4.71511 19.0617 5.56641 21.2167 5.56641 23.4165V24.1797C5.56641 26.4244 4.6255 28.5344 3.0125 30.1057C1.13068 31.9464 0.0105495 34.5053 0.0105495 37.3337C0.0105495 40.162 1.17549 42.721 3.0125 44.5617C4.6255 46.133 5.56641 48.243 5.56641 50.4877V51.5203C5.56641 53.7201 4.6255 55.7852 3.05731 57.3116C1.08588 59.2421 -0.123866 61.9806 0.0105495 64.9885C0.234576 70.286 4.53588 74.551 9.77811 74.7306C12.8249 74.8204 15.558 73.6082 17.4846 71.588C19.008 70.0167 21.069 69.029 23.2645 69.029H24.1158C26.3113 69.029 28.3723 69.9718 29.8957 71.588C31.9119 73.698 34.8243 74.9101 38.0055 74.6857C42.9788 74.3265 47.0113 70.286 47.3698 65.2579C47.773 59.287 43.1133 54.3486 37.2438 54.3486C34.4658 54.3486 31.9119 55.4709 30.0749 57.3116C28.5067 58.8829 26.4009 59.8257 24.2054 59.8257H23.2645C21.069 59.8257 18.9184 58.9727 17.3502 57.3565C17.3054 57.3116 17.3054 57.3116 17.2606 57.2667C15.6476 55.6954 14.7067 53.5854 14.7067 51.3407V50.4428C14.7067 48.1981 15.6476 46.0881 17.2606 44.5168C19.1424 42.6761 20.2626 40.1171 20.2626 37.2888C20.2626 34.4605 19.0976 31.9015 17.2606 30.0608C15.6476 28.4895 14.7067 26.3795 14.7067 24.1348V23.3267C14.7067 21.082 15.6476 18.9719 17.2158 17.4006C17.2606 17.3558 17.2606 17.3558 17.3054 17.3109C17.3502 17.266 17.3502 17.266 17.395 17.2211C18.9632 15.6498 21.069 14.707 23.3093 14.707H24.1158C26.3561 14.707 28.4619 15.6498 30.0301 17.266C31.8671 19.1515 34.421 20.2739 37.2438 20.2739C40.0665 20.2739 42.6204 19.1066 44.4574 17.266C46.0256 15.6498 48.1315 14.707 50.3717 14.707H51.0886C53.3289 14.707 55.4347 15.6498 57.0029 17.266C58.8399 19.1515 61.3938 20.2739 64.2166 20.2739C70.0413 20.3188 74.701 15.3804 74.2978 9.40948Z"
                                                            fill="#F8BF1E"></path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="hidden lg:grid lg:grid-cols-2 gap-6 pt-8">
                                        <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                        <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                    </div>
                                    <div class="grid grid-col-1 lg:grid-cols-2 gap-0 md:gap-6">
                                        <div>
                                            <div class="flex pt-8 lg:hidden md:pt-8">
                                                <hr class="shrink-0 border-none w-full h-divider bg-black"
                                                    role="separator" />
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex py-6 uppercase"><a target=""
                                                        class="flex gap-2 items-center z-50 hover:z-50 "
                                                        href="/consensus-magazine">
                                                        <h2
                                                            class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                            Consensus Magazine</h2><svg class="" fill="none" height="24"
                                                            viewBox="0 0 25 24" width="25"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                                fill="#676767"></path>
                                                        </svg>
                                                    </a></div>
                                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <div class="
			  flex gap-4
				false
			">
                                                            <div class="bg-white flex gap-6 w-full shrink flex-col">
                                                                <div class="flex flex-col"><a
                                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                                        href="/consensus-magazine/2024/07/12/why-blockbuster-games-will-soon-be-built-on-modular-appchains">
                                                                        <h2 class="font-headline-xs font-normal">Why
                                                                            Blockbuster Games Will Soon Be Built on
                                                                            Modular Appchains</h2>
                                                                    </a>
                                                                    <p
                                                                        class="font-body-sm text-color-charcoal-600 mb-4 line-clamp-3 flex md:hidden">
                                                                        Mainnets like Ethereum’s aren’t suitable for
                                                                        major (AAA) game development. The only real
                                                                        solution is a horizontally scalable blockchain
                                                                        coupled with modularity and a gas-free
                                                                        experience for end-users, says Jack O’Holleran,
                                                                        CEO of SKALE Labs. </p>
                                                                    <p class="flex gap-2 flex-col"><span
                                                                            class="font-metadata-lg font-medium text-color-charcoal-900 uppercase flex md:hidden"><span
                                                                                class="mr-2">By
                                                                                <!-- --> <a title="Jack O’Holleran"
                                                                                    class="text-color-charcoal-900 hover:underline"
                                                                                    href="/author/jack-o-holleran">Jack
                                                                                    O’Holleran</a>
                                                                            </span></span><span
                                                                            class="font-metadata text-color-charcoal-600 uppercase">Jul
                                                                            12, 2024</span></p>
                                                                </div><a
                                                                    title="Why Blockbuster Games Will Soon Be Built on Modular Appchains"
                                                                    class="flex shrink-0 flex-col"
                                                                    href="/consensus-magazine/2024/07/12/why-blockbuster-games-will-soon-be-built-on-modular-appchains"><img
                                                                        alt="A scene from the trailer for Grand Theft Auto 6 (Rockstar Games)."
                                                                        loading="lazy" width="1920" height="1080"
                                                                        decoding="async" data-nimg="1"
                                                                        class="w-full md:w-60 md:h-[135px] lg:w-[416px] lg:h-[234px] rounded align-self-end aspect-video object-cover object-cover"
                                                                        style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAYAAAB/Ca1DAAAACXBIWXMAABYlAAAWJQFJUiTwAAAC4UlEQVR4nB2QTW/bBABAcy8S5YBW1o4lLHFix/F3bMf5cJzESZO2adKWtKUbG+vcrltaqhWBBqrWIMZQ+KgKk2BiEhIHqqENxA0G4sCFX7Df8xC9vcM7PL1YvWISBnmCkolrqeRkESGVIplMousKVb9M3jRRc1lc28CxLTRNQ9cUdFVGEtMIQoqUkERIJYm5jkIQmBRcBUPLouXEM0nMCBQsmWY1j2MpqDkJJ69h500MXaXgmniOgaZIKDkRVZHOOGZoCn5Ro1GWaZclOiWRopHGkAW6vszVrkXoG5QKOn7JpODouI5Bs1Eh8AsUbBXP0Si5OiVXIyYKMp4h8nZb4GAlxXAuQ8eScKQMa4HC9pLNbNMjbJZp1gqUPYNyMU8rrFD1XSqeSd23adZd2qFHLJMWKZsZttoJPlmL89lAJfIL9B2b3W6R24MqrU6dsFOjUXPxHP1sgWnIZ4t8z2A+LPDmQsBby01iOSlNYAlsNuIcX0nydN/h++0646s+X25W2F+rsjAXsNKvst7zmK+bVJwsZu4NbOUS7bLKRtsj6tXYWpklpmTi2HKcJe8iX2xc4vmhyu8jm0e3NO4tSVyvySz6KpvLLqO9NkfDDrfXi2x0FAahxOWWwtZcnr1Fn93/Cy3xPJY4TaDOEAXTfBMleHZf4eTdLDcbcfraNA1lhkFdZrTb5eG9Kzy40+OD6wHDVZetRZMbHYOoaRK1bGJFZYqKco6mPsWC+So78+f44VOFXx+V+fxAZyNMEKgX6FVyfBgt8O1RxOP7O3w3ivj68Brj9wYcRrPcWfUYdk1iLfUV5vRJetYki9bLrPuTjG4lePLQ4fTE5u47GVr5BA1LYr/r83hnjd/u3uT58Uf88/MJf56OOT3e4+T9Ph9HPrGlzASr2Qn62gTd/ATL3ktcbkyyt36eo+2LHCzPEKqvYbw+xVr8AuO0wE+WxV/DG7z445QX//7C30/G/PjgGl/th/wHPf6T3Jxy2ukAAAAASUVORK5CYII=&quot;)"
                                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe1206fb88d964021e30a0df2f2e0b25b532be3f3-3824x2082.png%3Fauto%3Dformat&amp;w=1920&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe1206fb88d964021e30a0df2f2e0b25b532be3f3-3824x2082.png%3Fauto%3Dformat&amp;w=3840&amp;q=75 2x"
                                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fe1206fb88d964021e30a0df2f2e0b25b532be3f3-3824x2082.png%3Fauto%3Dformat&amp;w=3840&amp;q=75" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/consensus-magazine/2024/07/11/how-digital-collectibles-are-shaping-athlete-legacies">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                How Digital Collectibles Are Shaping
                                                                                Athlete Legacies</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Jul
                                                                                11, 2024</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/consensus-magazine/2024/07/11/from-coin-operated-machines-to-token-operated-gaming">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                From Coin-Operated Machines to
                                                                                Token-Operated Gaming</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Jul
                                                                                11, 2024</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/consensus-magazine/2024/07/10/bragging-rights-are-key-to-retaining-web3-gamers">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                Bragging Rights Are Key to Retaining
                                                                                Web3 Gamers</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Jul
                                                                                10, 2024</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="flex md:hidden justify-center items-center"></div>
                                        </div>
                                        <div>
                                            <div class="flex pt-8 lg:hidden md:pt-8">
                                                <hr class="shrink-0 border-none w-full h-divider bg-black"
                                                    role="separator" />
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex py-6 uppercase"><a target=""
                                                        class="flex gap-2 items-center z-50 hover:z-50 " href="/learn">
                                                        <h2
                                                            class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
                                                            Learn</h2><svg class="" fill="none" height="24"
                                                            viewBox="0 0 25 24" width="25"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                                                fill="#676767"></path>
                                                        </svg>
                                                    </a></div>
                                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6">
                                                    <div class="col-span-1">
                                                        <div class="
			  flex gap-4
				false
			">
                                                            <div class="bg-white flex gap-6 w-full shrink flex-col">
                                                                <div class="flex flex-col"><a
                                                                        class="text-color-charcoal-900 mb-4 hover:underline"
                                                                        href="/learn/how-to-buy-solana">
                                                                        <h2 class="font-headline-xs font-normal">How to
                                                                            Buy Solana</h2>
                                                                    </a>
                                                                    <p
                                                                        class="font-body-sm text-color-charcoal-600 mb-4 line-clamp-3 flex md:hidden">
                                                                        Buying solana (SOL) is straightforward, but with
                                                                        numerous crypto exchanges on the market,
                                                                        it&#x27;s crucial potential investors consider
                                                                        other key factors before making a purchase. </p>
                                                                    <p class="flex gap-2 flex-col"><span
                                                                            class="font-metadata-lg font-medium text-color-charcoal-900 uppercase flex md:hidden"><span
                                                                                class="mr-2">By
                                                                                <!-- --> <a title="Joe Lautzenhiser"
                                                                                    class="text-color-charcoal-900 hover:underline"
                                                                                    href="/author/joe-lautzenhiser">Joe
                                                                                    Lautzenhiser</a>
                                                                            </span></span><span
                                                                            class="font-metadata text-color-charcoal-600 uppercase">May
                                                                            14, 2024</span></p>
                                                                </div><a title="How to Buy Solana"
                                                                    class="flex shrink-0 flex-col"
                                                                    href="/learn/how-to-buy-solana"><img
                                                                        alt="(Danny Nelson/CoinDesk)" loading="lazy"
                                                                        width="1920" height="1080" decoding="async"
                                                                        data-nimg="1"
                                                                        class="w-full md:w-60 md:h-[135px] lg:w-[416px] lg:h-[234px] rounded align-self-end aspect-video object-cover object-cover"
                                                                        style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAUDBAf/xAAhEAACAQUAAQUAAAAAAAAAAAABAwIABAURIQYSEyJRcf/EABYBAQEBAAAAAAAAAAAAAAAAAAEAAv/EABkRAAMBAQEAAAAAAAAAAAAAAAABAhEDUf/aAAwDAQACEQMRAD8AwDx7x2eWs2uQ5Qms6K5HRNUsrim2vJqYNcJMeb/aWouGKO1zlE/YOqb2OXvXwZbOuJzVOB+Mu1vlLu1PpNpLRB7fTs0VKz0mW9UUOQ0//9k=&quot;)"
                                                                        srcSet="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fa725a74d2ce68cac9490ede8de43044fc9a540a0-5184x3888.jpg%3Fauto%3Dformat&amp;w=1920&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fa725a74d2ce68cac9490ede8de43044fc9a540a0-5184x3888.jpg%3Fauto%3Dformat&amp;w=3840&amp;q=75 2x"
                                                                        src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fa725a74d2ce68cac9490ede8de43044fc9a540a0-5184x3888.jpg%3Fauto%3Dformat&amp;w=3840&amp;q=75" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/learn/restaking-101-what-are-restaking-and-liquid-restaking">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                What Is Restaking? What Is Liquid
                                                                                Restaking? What Is EigenLayer?</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">May
                                                                                2, 2024</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/learn/a-beginners-guide-to-ai-tokens">
                                                                            <h2 class="font-headline-2xs font-medium">A
                                                                                Beginner’s Guide to AI Tokens</h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Jan
                                                                                11, 2024</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="py-4">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="
			  flex gap-4
				false
			">
                                                                <div class="bg-white flex gap-6 w-full shrink">
                                                                    <div class="flex flex-col"><a
                                                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                                                            href="/learn/what-is-the-erc-7265-token-standard">
                                                                            <h2 class="font-headline-2xs font-medium">
                                                                                What Is the ERC-7265 Token Standard?
                                                                            </h2>
                                                                        </a>
                                                                        <p class="flex gap-2 flex-col"><span
                                                                                class="font-metadata text-color-charcoal-600 uppercase">Jan
                                                                                11, 2024</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hidden">
                                                                <hr class="shrink-0 bg-divider border-none w-full h-divider"
                                                                    role="separator" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                            <div class="hidden justify-center items-center"></div>
                                        </div>
                                    </div>
                                    <div class="hidden  justify-center items-center mt-6">
                                        <div class="w-full">
                                            <div class="color-black relative flex items-start justify-center aw970px ah250px"
                                                style="height:250px">
                                                <div id="homepage_mid_desktop_5" data-freestar-ad="true"
                                                    style="width:970px;height:250px"
                                                    class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;&gt;iframe]:m-auto aw970px ah250px">
                                                </div>
                                                <div style="width:970px;height:250px"
                                                    class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw970px ah250px">
                                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                                                        height="75" viewBox="0 0 100 75" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="opacity-30 [&amp;&gt;path]:fill-[#DCDCDD]">
                                                        <path
                                                            d="M37.1542 40.7009C39.0349 40.7009 40.5594 39.1733 40.5594 37.2889C40.5594 35.4045 39.0349 33.877 37.1542 33.877C35.2736 33.877 33.749 35.4045 33.749 37.2889C33.749 39.1733 35.2736 40.7009 37.1542 40.7009Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M64.3066 40.7009C66.1872 40.7009 67.7118 39.1733 67.7118 37.2889C67.7118 35.4045 66.1872 33.877 64.3066 33.877C62.4259 33.877 60.9014 35.4045 60.9014 37.2889C60.9014 39.1733 62.4259 40.7009 64.3066 40.7009Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M64.3066 67.9515C66.1872 67.9515 67.7118 66.4239 67.7118 64.5395C67.7118 62.6552 66.1872 61.1276 64.3066 61.1276C62.4259 61.1276 60.9014 62.6552 60.9014 64.5395C60.9014 66.4239 62.4259 67.9515 64.3066 67.9515Z"
                                                            fill="#F8BF1E"></path>
                                                        <path
                                                            d="M74.2978 9.40948C73.9393 4.42622 69.9517 0.385744 64.9783 0.0265903C61.7971 -0.197881 58.9295 1.01426 56.9133 3.0794C55.3899 4.65069 53.3289 5.59347 51.1334 5.59347H50.3269C48.0867 5.59347 45.9808 4.65069 44.4126 3.0345C42.5756 1.14894 40.0217 0.0265903 37.199 0.0265903C34.3762 0.0265903 31.8223 1.19384 29.9853 3.0345C28.4171 4.65069 26.3113 5.59347 24.071 5.59347H23.3093C21.1139 5.59347 19.008 4.74048 17.4846 3.16919C17.171 2.85493 16.8573 2.54067 16.5437 2.2713C12.7353 -0.8264 7.13459 -0.736612 3.46056 2.54067C-0.975169 6.44646 -1.15439 13.2704 2.9677 17.4006C3.01251 17.4455 3.05731 17.4904 3.10212 17.5353C4.71511 19.0617 5.56641 21.2167 5.56641 23.4165V24.1797C5.56641 26.4244 4.6255 28.5344 3.0125 30.1057C1.13068 31.9464 0.0105495 34.5053 0.0105495 37.3337C0.0105495 40.162 1.17549 42.721 3.0125 44.5617C4.6255 46.133 5.56641 48.243 5.56641 50.4877V51.5203C5.56641 53.7201 4.6255 55.7852 3.05731 57.3116C1.08588 59.2421 -0.123866 61.9806 0.0105495 64.9885C0.234576 70.286 4.53588 74.551 9.77811 74.7306C12.8249 74.8204 15.558 73.6082 17.4846 71.588C19.008 70.0167 21.069 69.029 23.2645 69.029H24.1158C26.3113 69.029 28.3723 69.9718 29.8957 71.588C31.9119 73.698 34.8243 74.9101 38.0055 74.6857C42.9788 74.3265 47.0113 70.286 47.3698 65.2579C47.773 59.287 43.1133 54.3486 37.2438 54.3486C34.4658 54.3486 31.9119 55.4709 30.0749 57.3116C28.5067 58.8829 26.4009 59.8257 24.2054 59.8257H23.2645C21.069 59.8257 18.9184 58.9727 17.3502 57.3565C17.3054 57.3116 17.3054 57.3116 17.2606 57.2667C15.6476 55.6954 14.7067 53.5854 14.7067 51.3407V50.4428C14.7067 48.1981 15.6476 46.0881 17.2606 44.5168C19.1424 42.6761 20.2626 40.1171 20.2626 37.2888C20.2626 34.4605 19.0976 31.9015 17.2606 30.0608C15.6476 28.4895 14.7067 26.3795 14.7067 24.1348V23.3267C14.7067 21.082 15.6476 18.9719 17.2158 17.4006C17.2606 17.3558 17.2606 17.3558 17.3054 17.3109C17.3502 17.266 17.3502 17.266 17.395 17.2211C18.9632 15.6498 21.069 14.707 23.3093 14.707H24.1158C26.3561 14.707 28.4619 15.6498 30.0301 17.266C31.8671 19.1515 34.421 20.2739 37.2438 20.2739C40.0665 20.2739 42.6204 19.1066 44.4574 17.266C46.0256 15.6498 48.1315 14.707 50.3717 14.707H51.0886C53.3289 14.707 55.4347 15.6498 57.0029 17.266C58.8399 19.1515 61.3938 20.2739 64.2166 20.2739C70.0413 20.3188 74.701 15.3804 74.2978 9.40948Z"
                                                            fill="#F8BF1E"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex pt-6">
                                    <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer data-module-name="footer" data-module-version="1.0.0" data-module-instance="default"
                class="bottom-0 flex w-full flex-col items-center bg-[#FAFAFA] px-0 pb-[64px] pt-4 lg:pb-0">
                <div
                    class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                    <div class="max-w-[100%]">
                        <div class="mb-8 flex w-full flex-col items-start justify-between lg:flex-row lg:items-center">
                            <div class="mb-0 lg:mb-0">
                                <a class="flex items-center justify-center"
                                    data-position="Logo" href="/">
                                    <img  src="/logo.png" style="height: 40px;" />
                                </a>
                            </div>
                        </div>
                        <hr class="my-6 border-[#A6A6A6]" />
                        <div class="grid grid-cols-2 gap-8 lg:grid-cols-6">
                            <div class="column" data-submodule-name="About">
                                <p
                                    class="font-title text-sm break-keep uppercase leading-[1.5] tracking-[0.1px] text-[#1A1A1A]">
                                    About</p>
                                <ul class="column-items mt-6 font-serif">
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a aria-label="About Us" href="">About Us</a></li>
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a aria-label="Masthead" href="">Masthead</a></li>
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a target="_blank" aria-label="Careers"
                                            href="">Careers</a></li>
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a aria-label="CoinDesk News" href="">CoinDesk News</a></li>
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a aria-label="Crypto API Documentation"
                                            href="">Crypto
                                            API Documentation</a></li>
                                </ul>
                            </div>
                            <div class="column" data-submodule-name="Contact">
                                <p
                                    class="font-title text-sm break-keep uppercase leading-[1.5] tracking-[0.1px] text-[#1A1A1A]">
                                    Contact</p>
                                <ul class="column-items mt-6 font-serif">
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a aria-label="Contact Us" href="">Contact Us</a></li>
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a aria-label="Accessibility" href="">Accessibility</a></li>
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a aria-label="Advertise" href="">Advertise</a></li>
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a  href="">Sitemap</a></li>
                                    <li
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline">
                                        <a aria-label="System Status" href="">System
                                            Status</a></li>
                                </ul>
                            </div>
                            <div data-submodule-name="disclaimer" data-submodule-version="1.0.0"
                                data-submodule-instance="default" class="col-span-4 flex flex-col gap-4">
                                <div class="font-title uppercase text-sm text-[#1A1A1A] leading-none">DISCLOSURE &amp;
                                    POLICES</div>
                                <div class="font-metadata leading-[1.5] tracking-[0.4px] text-[#676767]">CoinCrypto is an
                                    <!-- --> <a rel="noopener noreferrer" class="text-[#1A1A1A] underline"
                                        href="">award-winning</a>
                                    <!-- -->media outlet that covers the cryptocurrency industry. Its journalists abide
                                    by a strict set of
                                    <!-- --> <a rel="noopener noreferrer" class="text-[#1A1A1A] underline"
                                        href="/">editorial policies</a>.
                                    CoinCrypto has adopted a set of principles aimed at ensuring the integrity,
                                    editorial independence and freedom from bias of its publications. CoinCrypto is part
                                    of the Bullish group, which owns and invests in digital asset businesses and digital
                                    assets. CoinCrypto employees, including journalists, may receive Bullish group
                                    equity-based compensation. Bullish was incubated by technology investor Block.one.
                                </div>
                                <div class="flex-start flex flex-wrap gap-x-4 gap-y-2 self-stretch"><span
                                        class="font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline"><a
                                            aria-label="Ethics" href="">Ethics</a></span><span
                                        class="font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline"><a
                                            aria-label="Privacy" href="">Privacy</a></span><span
                                        class="font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline"><a
                                            aria-label="Terms of Use" href="">Terms of Use</a></span><span
                                        class="font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-black hover:underline"><a
                                            aria-label="Cookie Consent">Cookie Consent</a></span><span
                                        class="font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline"><a
                                            aria-label="Do Not Sell My Info" href="">Do Not Sell My
                                            Info</a></span></div>
                            </div>
                        </div>
                        <hr class="my-6 border-[#A6A6A6]" />
                        <div
                            class="xl:grid-cols-16 grid grid-cols-1 items-center gap-6 md:grid-cols-8 lg:grid-cols-12 lg:gap-0">
                            <div
                                class="year-dropdown font-metadata order-3 tracking-wide text-[#676767] md:col-span-8 lg:order-1 lg:col-span-3 xl:col-span-7">
                                © 2025 CoinCrypto.</div>
                            <div
                                class="order-1 flex h-full w-full flex-col items-center space-y-2 md:col-span-4 md:flex-col md:justify-between md:space-y-0 lg:order-2 lg:col-span-4 lg:w-auto lg:flex-row lg:justify-between xl:col-span-5">
                                <div class="social-icons flex h-full w-full items-center">
                                    <div class="flex w-full flex-col">
                                        <div data-submodule-name="social" data-submodule-version="1.0.0"
                                            data-submodule-instance="default"
                                            class="flex w-full flex-row items-center justify-between"><a
                                                aria-label="Twitter" data-position="Twitter" class="lg:pl-4 xl:pl-6"
                                                target="_blank" href=" "><svg width="16"
                                                    height="16" viewBox="0 0 1400 1027" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    aria-labelledby="twitter-svg-a11y-label-id">
                                                    <title id="twitter-svg-a11y-label-id">X icon</title>
                                                    <path
                                                        d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                                                        fill="#676767"></path>
                                                </svg></a><a aria-label="Facebook" data-position="Facebook"
                                                class="lg:pl-4 xl:pl-6" target="_blank"
                                                href=" "><svg width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.3447 13.6068L16.863 10.1942H13.621V7.9796C13.621 7.04596 14.0739 6.13593 15.526 6.13593H17V3.2306C17 3.2306 15.6623 3 14.3834 3C11.7132 3 9.96805 4.63437 9.96805 7.59321V10.1942H7V13.6068H9.96805V21.8566C10.5632 21.9509 11.1732 22 11.7945 22C12.4159 22 13.0259 21.9509 13.621 21.8566V13.6068H16.3447Z"
                                                        fill="#676767"></path>
                                                </svg></a><a aria-label="LinkedIn" data-position="LinkedIn"
                                                class="lg:pl-4 xl:pl-6" target="_blank"
                                                href=" "><svg width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.25362 9.21772H6.53986V22.1164H2.25362V9.21772ZM4.42543 3C2.95843 3 2 3.9631 2 5.22719C2 6.46529 2.93038 7.45638 4.36933 7.45638H4.39667C5.89171 7.45638 6.82276 6.46524 6.82276 5.22719C6.79471 3.9631 5.89176 3 4.42543 3ZM17.0638 8.91471C14.7886 8.91471 13.7693 10.1661 13.2007 11.0438V9.21772H8.91314C8.9699 10.4278 8.91314 22.1164 8.91314 22.1164H13.2007V14.9129C13.2007 14.527 13.2287 14.1427 13.3415 13.8663C13.652 13.0961 14.3574 12.2985 15.5407 12.2985C17.0931 12.2985 17.7131 13.4819 17.7131 15.2151V22.1163H22V14.72C22 10.7581 19.8856 8.91471 17.0638 8.91471Z"
                                                        fill="#676767"></path>
                                                </svg></a><a aria-label="RSSFeed" data-position="RSSFeed"
                                                class="lg:pl-4 xl:pl-6" target="_blank"
                                                href=" "><svg width="22"
                                                    height="22" fill="none" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.18 19.9999C7.38398 19.9999 8.36 19.0239 8.36 17.8199C8.36 16.6159 7.38398 15.6399 6.18 15.6399C4.97602 15.6399 4 16.6159 4 17.8199C4 19.0239 4.97602 19.9999 6.18 19.9999Z"
                                                        fill="#676767"></path>
                                                    <path
                                                        d="M5.59 10.2301C4.75 10.0901 4 10.7801 4 11.6301C4 12.3401 4.53 12.9101 5.23 13.0301C8.15 13.5401 10.45 15.8501 10.97 18.7701C11.09 19.4701 11.66 20.0001 12.37 20.0001C13.22 20.0001 13.91 19.2501 13.78 18.4101C13.1 14.2101 9.79 10.9001 5.59 10.2301ZM5.56 4.52009C4.73 4.43009 4 5.10009 4 5.93009C4 6.66009 4.55 7.26009 5.27 7.33009C11.28 7.93009 16.06 12.7101 16.66 18.7201C16.73 19.4501 17.33 20.0001 18.06 20.0001C18.9 20.0001 19.56 19.2701 19.48 18.4401C18.75 11.1001 12.91 5.25009 5.56 4.52009Z"
                                                        fill="#676767"></path>
                                                </svg></a><a aria-label="Instagram" data-position="Instagram"
                                                class="lg:pl-4 xl:pl-6" target="_blank"
                                                href=" "><svg width="22" height="22"
                                                    fill="none" viewBox="0 0 22 21" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.6837 4.55102C16.8149 4.55102 17.8998 5.0004 18.6997 5.8003C19.4996 6.6002 19.949 7.6851 19.949 8.81633V16.1837C19.949 17.3149 19.4996 18.3998 18.6997 19.1997C17.8998 19.9996 16.8149 20.449 15.6837 20.449H8.31633C7.1851 20.449 6.1002 19.9996 5.3003 19.1997C4.5004 18.3998 4.05102 17.3149 4.05102 16.1837V8.81633C4.05102 7.6851 4.5004 6.6002 5.3003 5.8003C6.1002 5.0004 7.1851 4.55102 8.31633 4.55102H15.6837ZM15.6837 3H8.31633C6.77516 3.0046 5.29842 3.61887 4.20865 4.70865C3.11887 5.79842 2.5046 7.27516 2.5 8.81633V16.1837C2.5046 17.7248 3.11887 19.2016 4.20865 20.2914C5.29842 21.3811 6.77516 21.9954 8.31633 22H15.6837C17.2248 21.9954 18.7016 21.3811 19.7914 20.2914C20.8811 19.2016 21.4954 17.7248 21.5 16.1837V8.81633C21.4954 7.27516 20.8811 5.79842 19.7914 4.70865C18.7016 3.61887 17.2248 3.0046 15.6837 3Z"
                                                        fill="#676767"></path>
                                                    <path
                                                        d="M17.0294 6.35297C16.8083 6.35297 16.5923 6.41852 16.4085 6.54132C16.2247 6.66413 16.0814 6.83868 15.9968 7.04291C15.9122 7.24713 15.8901 7.47185 15.9332 7.68865C15.9763 7.90546 16.0828 8.1046 16.2391 8.26091C16.3954 8.41721 16.5945 8.52366 16.8113 8.56678C17.0282 8.60991 17.2529 8.58778 17.4571 8.50318C17.6613 8.41859 17.8359 8.27534 17.9587 8.09154C18.0815 7.90775 18.147 7.69166 18.147 7.47061C18.147 7.32384 18.1181 7.17851 18.062 7.04291C18.0058 6.90731 17.9235 6.7841 17.8197 6.68032C17.7159 6.57653 17.5927 6.49421 17.4571 6.43804C17.3215 6.38187 17.1762 6.35297 17.0294 6.35297Z"
                                                        fill="#676767"></path>
                                                    <path
                                                        d="M11.9902 9.03738C12.6752 9.037 13.3449 9.2398 13.9147 9.62012C14.4844 10.0005 14.9285 10.5412 15.1908 11.174C15.4531 11.8068 15.5219 12.5032 15.3883 13.175C15.2548 13.8469 14.925 14.4641 14.4406 14.9484C13.9562 15.4328 13.3391 15.7626 12.6672 15.8962C11.9953 16.0297 11.299 15.961 10.6662 15.6987C10.0334 15.4363 9.49261 14.9922 9.11228 14.4225C8.73196 13.8528 8.52916 13.183 8.52954 12.498C8.5311 11.5807 8.8962 10.7014 9.54486 10.0527C10.1935 9.40404 11.0729 9.03894 11.9902 9.03738ZM11.9902 7.47059C10.9958 7.47253 10.0243 7.76919 9.19848 8.32309C8.37264 8.87699 7.72954 9.66327 7.35043 10.5826C6.97133 11.5018 6.87324 12.5129 7.06856 13.4879C7.26389 14.4629 7.74386 15.3582 8.44782 16.0605C9.15178 16.7628 10.0481 17.2407 11.0236 17.4337C11.9991 17.6268 13.0099 17.5263 13.9283 17.1451C14.8467 16.7638 15.6315 16.1189 16.1834 15.2917C16.7354 14.4646 17.0298 13.4924 17.0294 12.498C17.0291 11.8369 16.8985 11.1823 16.6451 10.5717C16.3916 9.9611 16.0202 9.40646 15.5522 8.93951C15.0841 8.47257 14.5286 8.10248 13.9174 7.85043C13.3062 7.59838 12.6513 7.4693 11.9902 7.47059Z"
                                                        fill="#676767"></path>
                                                </svg></a><a aria-label="YouTube" data-position="YouTube"
                                                class="lg:pl-4 xl:pl-6" target="_blank"
                                                href=" "><svg width="24" height="24"
                                                    fill="none" viewBox="0 0 24 19" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M23.4986 5.65459C23.2227 4.60964 22.4095 3.78682 21.3768 3.50753C19.505 3 12 3 12 3C12 3 4.49499 3 2.62318 3.50753C1.59071 3.78682 0.777377 4.60964 0.501423 5.65459C0 7.5485 0 11.5001 0 11.5001C0 11.5001 0 15.4517 0.501423 17.3454C0.777377 18.3904 1.59071 19.2134 2.62318 19.4927C4.49499 20 12 20 12 20C12 20 19.505 20 21.3768 19.4927C22.4095 19.2134 23.2227 18.3904 23.4986 17.3454C24 15.4517 24 11.5001 24 11.5001C24 11.5001 24 7.5485 23.4986 5.65459ZM9.59988 15.143V7.85719L15.8352 11.5001L9.59988 15.143Z"
                                                        fill="#676767"></path>
                                                </svg></a><a aria-label="TikTok" data-position="TikTok"
                                                class="lg:pl-4 xl:pl-6" target="_blank"
                                                href=""><svg width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.78998 17.745C11.2577 17.745 12.4475 16.61 12.4475 14.8745V2H15.6346C15.4559 4.34796 17.6168 6.61603 20 6.56415V9.80125C17.9619 9.80125 16.2288 8.87041 15.6256 8.35382V14.8745C15.6256 17.745 13.5349 21 9.78998 21C6.04501 21 4 17.745 4 14.8745C4 10.8231 7.96936 8.47349 10.5984 9.04778V12.3449C10.4661 12.2944 10.125 12.2197 9.83453 12.2197C8.35462 12.1608 7.13245 13.4572 7.13245 14.8745C7.13245 16.4598 8.32227 17.745 9.78998 17.745Z"
                                                        fill="#676767"></path>
                                                </svg></a><a aria-label="Discord" data-position="Discord"
                                                class="lg:pl-4 xl:pl-6" target="_blank"
                                                href=""><svg width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.6239 4.40921C18.2217 3.75695 16.7181 3.27639 15.1459 3.00116C15.1173 2.99585 15.0887 3.00912 15.0739 3.03567C14.8805 3.38436 14.6663 3.83925 14.5163 4.1968C12.8254 3.94015 11.1431 3.94015 9.48679 4.1968C9.33676 3.83131 9.11478 3.38436 8.92053 3.03567C8.90578 3.01001 8.87718 2.99673 8.84855 3.00116C7.27725 3.27551 5.7736 3.75607 4.37052 4.40921C4.35838 4.41452 4.34797 4.42338 4.34106 4.43488C1.48894 8.75461 0.707629 12.9682 1.09092 17.1295C1.09265 17.1498 1.10392 17.1693 1.11953 17.1817C3.00127 18.5827 4.82406 19.4332 6.61301 19.9969C6.64164 20.0058 6.67197 19.9951 6.69019 19.9712C7.11337 19.3854 7.49059 18.7676 7.81402 18.118C7.83311 18.08 7.81489 18.0348 7.77588 18.0198C7.17754 17.7897 6.6078 17.5091 6.05975 17.1906C6.0164 17.1649 6.01293 17.102 6.05281 17.0719C6.16814 16.9843 6.2835 16.8932 6.39363 16.8011C6.41355 16.7843 6.44131 16.7808 6.46474 16.7914C10.0652 18.4579 13.9631 18.4579 17.521 16.7914C17.5445 16.7799 17.5722 16.7834 17.593 16.8003C17.7032 16.8923 17.8185 16.9843 17.9347 17.0719C17.9746 17.102 17.972 17.1649 17.9286 17.1906C17.3806 17.5153 16.8108 17.7897 16.2116 18.0189C16.1726 18.034 16.1553 18.08 16.1744 18.118C16.5047 18.7667 16.882 19.3845 17.2973 19.9704C17.3147 19.9951 17.3459 20.0058 17.3745 19.9969C19.1721 19.4332 20.9949 18.5827 22.8766 17.1817C22.8931 17.1693 22.9035 17.1507 22.9053 17.1304C23.364 12.3194 22.1369 8.14042 19.6525 4.43576C19.6465 4.42338 19.6361 4.41452 19.6239 4.40921ZM8.35169 14.5957C7.26771 14.5957 6.37454 13.5868 6.37454 12.3478C6.37454 11.1087 7.25039 10.0998 8.35169 10.0998C9.46163 10.0998 10.3462 11.1176 10.3288 12.3478C10.3288 13.5868 9.45296 14.5957 8.35169 14.5957ZM15.6619 14.5957C14.5779 14.5957 13.6847 13.5868 13.6847 12.3478C13.6847 11.1087 14.5606 10.0998 15.6619 10.0998C16.7718 10.0998 17.6563 11.1176 17.639 12.3478C17.639 13.5868 16.7718 14.5957 15.6619 14.5957Z"
                                                        fill="#676767"></path>
                                                </svg></a><a aria-label="Telegram" data-position="Telegram"
                                                class="lg:pl-4 xl:pl-6" target="_blank"
                                                href=""><svg width="24" height="24"
                                                    viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.5 21L23.5 12L2.5 3V10L17.5 12L2.5 14V21Z"
                                                        fill="#676767"></path>
                                                </svg></a></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="order-2 flex flex-col justify-start md:col-span-4 md:justify-end lg:order-3 lg:col-span-4 xl:col-span-4">
                                <div class="flex w-full flex-col">
                                    <div class="flex flex-row items-center justify-start gap-4 md:justify-end"><a
                                            aria-label="AppStore" data-position="AppStore" target="_blank"
                                            href=""><svg
                                                xmlns="http://www.w3.org/2000/svg" width="120" height="40"
                                                viewBox="0 0 120 40" fill="none">
                                                <g clip-path="url(#clip0_211_554)">
                                                    <path
                                                        d="M110.471 0.00013H9.87062C9.50392 0.00013 9.14162 0.00013 8.77589 0.00213C8.46974 0.00413 8.16603 0.00994 7.85694 0.01483C7.18545 0.0227318 6.51554 0.0818063 5.85304 0.19154C5.19146 0.303663 4.55061 0.515046 3.95216 0.81854C3.35444 1.1246 2.80828 1.5223 2.33351 1.9972C1.85624 2.47077 1.4584 3.01815 1.15529 3.61829C0.851338 4.21724 0.640578 4.85907 0.530288 5.52161C0.418948 6.18332 0.359036 6.85265 0.351088 7.52361C0.341808 7.83021 0.340827 8.13783 0.335938 8.44447V31.5587C0.340827 31.8692 0.341808 32.17 0.351088 32.4806C0.359038 33.1516 0.418951 33.8209 0.530288 34.4825C0.640273 35.1455 0.851046 35.7877 1.15529 36.3868C1.45826 36.985 1.85616 37.5302 2.33351 38.0011C2.80648 38.4781 3.35299 38.8761 3.95216 39.1798C4.55061 39.4841 5.19139 39.6968 5.85304 39.8106C6.51566 39.9195 7.18549 39.9786 7.85694 39.9874C8.16603 39.9942 8.46974 39.9981 8.77589 39.9981C9.14161 40.0001 9.50394 40.0001 9.87062 40.0001H110.471C110.83 40.0001 111.195 40.0001 111.555 39.9981C111.859 39.9981 112.172 39.9942 112.477 39.9874C113.147 39.9791 113.815 39.92 114.477 39.8106C115.14 39.696 115.783 39.4834 116.385 39.1798C116.983 38.8759 117.529 38.478 118.002 38.0011C118.478 37.5284 118.877 36.9836 119.184 36.3868C119.486 35.7872 119.694 35.1451 119.803 34.4825C119.914 33.8208 119.976 33.1516 119.988 32.4806C119.992 32.17 119.992 31.8692 119.992 31.5587C120 31.1954 120 30.8341 120 30.4649V9.53626C120 9.17005 120 8.80677 119.992 8.44447C119.992 8.13783 119.992 7.83021 119.988 7.52357C119.976 6.85255 119.914 6.18337 119.803 5.52157C119.694 4.85941 119.485 4.21763 119.184 3.61825C118.566 2.41533 117.588 1.43616 116.385 0.81845C115.783 0.515697 115.14 0.30437 114.477 0.19145C113.815 0.0812328 113.147 0.0221378 112.477 0.01469C112.172 0.00981 111.859 0.00395 111.555 0.002C111.195 0 110.83 0.00013 110.471 0.00013Z"
                                                        fill="#A6A6A6"></path>
                                                    <path
                                                        d="M8.7808 39.125C8.47612 39.125 8.1788 39.1211 7.87651 39.1143C7.2503 39.1061 6.62554 39.0516 6.00737 38.9512C5.43096 38.8519 4.87258 38.6673 4.35063 38.4033C3.83348 38.1415 3.36179 37.7983 2.95363 37.3867C2.53957 36.98 2.19485 36.5082 1.93312 35.9902C1.66851 35.4688 1.48539 34.9099 1.39012 34.333C1.28725 33.7131 1.23159 33.0863 1.22362 32.458C1.21728 32.2471 1.20898 31.5449 1.20898 31.5449V8.44434C1.20898 8.44434 1.21782 7.75293 1.22367 7.5498C1.2313 6.92248 1.28664 6.29665 1.3892 5.67773C1.48464 5.09925 1.66791 4.53875 1.93266 4.01563C2.19343 3.49794 2.53624 3.02586 2.9478 2.61768C3.35891 2.20562 3.83211 1.8606 4.35014 1.59521C4.87089 1.33209 5.42822 1.14873 6.00346 1.05127C6.62366 0.949836 7.25059 0.894996 7.87897 0.88721L8.78129 0.875H111.55L112.463 0.8877C113.086 0.895099 113.707 0.94945 114.321 1.05029C114.902 1.14898 115.466 1.33362 115.992 1.59814C117.03 2.13299 117.875 2.97916 118.407 4.01807C118.668 4.53758 118.848 5.09351 118.942 5.66699C119.046 6.29099 119.104 6.92174 119.116 7.5542C119.119 7.8374 119.119 8.1416 119.119 8.44434C119.127 8.81934 119.127 9.17627 119.127 9.53613V30.4648C119.127 30.8281 119.127 31.1826 119.119 31.54C119.119 31.8652 119.119 32.1631 119.115 32.4697C119.104 33.0909 119.046 33.7104 118.944 34.3232C118.851 34.9043 118.669 35.4675 118.404 35.9932C118.141 36.5056 117.798 36.9733 117.389 37.3789C116.98 37.7927 116.508 38.1379 115.989 38.4014C115.464 38.6674 114.902 38.8527 114.321 38.9512C113.703 39.0522 113.078 39.1067 112.452 39.1143C112.159 39.1211 111.853 39.125 111.555 39.125L110.471 39.127L8.7808 39.125Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M25.1049 20.3006C25.1157 19.4659 25.3374 18.6475 25.7494 17.9216C26.1614 17.1956 26.7504 16.5857 27.4615 16.1485C27.0098 15.5034 26.4138 14.9724 25.721 14.5979C25.0282 14.2233 24.2575 14.0155 23.4703 13.9908C21.7911 13.8146 20.1631 14.9957 19.3074 14.9957C18.4352 14.9957 17.1177 14.0083 15.6989 14.0375C14.7813 14.0672 13.8869 14.334 13.103 14.8121C12.3192 15.2901 11.6725 15.9631 11.226 16.7654C9.29201 20.1138 10.7346 25.0349 12.5872 27.7415C13.5141 29.0668 14.5974 30.5473 16.0148 30.4948C17.4019 30.4372 17.9199 29.6103 19.5942 29.6103C21.253 29.6103 21.739 30.4948 23.1852 30.4614C24.6736 30.4372 25.6114 29.1302 26.5058 27.7923C27.1717 26.8479 27.6842 25.8042 28.0242 24.6997C27.1595 24.334 26.4215 23.7218 25.9024 22.9395C25.3833 22.1572 25.1059 21.2394 25.1049 20.3006Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M22.3735 12.2108C23.185 11.2366 23.5848 9.98445 23.488 8.72021C22.2482 8.85044 21.1029 9.44299 20.2804 10.3798C19.8783 10.8375 19.5703 11.3699 19.3741 11.9467C19.1778 12.5235 19.0972 13.1333 19.1367 13.7412C19.7569 13.7476 20.3704 13.6132 20.931 13.3481C21.4917 13.083 21.9849 12.6942 22.3735 12.2108Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M42.6382 27.1396H37.9048L36.7681 30.496H34.7632L39.2466 18.078H41.3296L45.813 30.496H43.7739L42.6382 27.1396ZM38.395 25.5907H42.147L40.2974 20.1435H40.2456L38.395 25.5907Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M55.4956 25.9697C55.4956 28.7832 53.9898 30.5908 51.7173 30.5908C51.1417 30.6209 50.5692 30.4883 50.0654 30.2082C49.5616 29.928 49.1469 29.5117 48.8687 29.0068H48.8257V33.4912H46.9673V21.4423H48.7661V22.9482H48.8003C49.0913 22.4457 49.513 22.0316 50.0206 21.7497C50.5283 21.4679 51.1028 21.3289 51.6831 21.3476C53.9809 21.3476 55.4956 23.164 55.4956 25.9697ZM53.5855 25.9697C53.5855 24.1367 52.6382 22.9316 51.1929 22.9316C49.773 22.9316 48.8179 24.1621 48.8179 25.9697C48.8179 27.7939 49.773 29.0156 51.1929 29.0156C52.6382 29.0156 53.5855 27.8193 53.5855 25.9697Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M65.4605 25.9697C65.4605 28.7832 63.9546 30.5908 61.6822 30.5908C61.1065 30.6209 60.534 30.4883 60.0302 30.2081C59.5264 29.928 59.1117 29.5117 58.8335 29.0068H58.7905V33.4912H56.9321V21.4423H58.7309V22.9482H58.7651C59.0561 22.4457 59.4778 22.0315 59.9854 21.7497C60.4931 21.4679 61.0676 21.3289 61.6479 21.3476C63.9458 21.3476 65.4605 23.164 65.4605 25.9697ZM63.5503 25.9697C63.5503 24.1367 62.603 22.9316 61.1577 22.9316C59.7378 22.9316 58.7827 24.1621 58.7827 25.9697C58.7827 27.7939 59.7378 29.0156 61.1577 29.0156C62.6031 29.0156 63.5503 27.8193 63.5503 25.9697Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M72.0464 27.0361C72.1841 28.2675 73.3804 29.0761 75.0152 29.0761C76.5816 29.0761 77.7085 28.2675 77.7085 27.1571C77.7085 26.1932 77.0288 25.6161 75.4195 25.2206L73.8101 24.8329C71.5298 24.2821 70.4712 23.2157 70.4712 21.4852C70.4712 19.3427 72.3384 17.871 74.9898 17.871C77.6138 17.871 79.4126 19.3427 79.4732 21.4852H77.5972C77.4849 20.246 76.4605 19.4979 74.9634 19.4979C73.4663 19.4979 72.4419 20.2548 72.4419 21.3563C72.4419 22.2343 73.0962 22.7509 74.6968 23.1463L76.0649 23.4823C78.6128 24.0848 79.6714 25.1083 79.6714 26.9247C79.6714 29.2479 77.8208 30.703 74.8774 30.703C72.1235 30.703 70.2642 29.2821 70.144 27.036L72.0464 27.0361Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M83.6821 19.2997V21.4423H85.4038V22.9139H83.6821V27.9052C83.6821 28.6805 84.0269 29.0419 84.7837 29.0419C84.9881 29.0383 85.1921 29.024 85.395 28.9989V30.4618C85.0547 30.5253 84.7089 30.5541 84.3628 30.5477C82.5298 30.5477 81.8149 29.8592 81.8149 28.1034V22.9139H80.4985V21.4423H81.8149V19.2997H83.6821Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M86.4009 25.9696C86.4009 23.121 88.0786 21.3309 90.6948 21.3309C93.3198 21.3309 94.9897 23.1209 94.9897 25.9696C94.9897 28.8261 93.3286 30.6083 90.6948 30.6083C88.062 30.6083 86.4009 28.826 86.4009 25.9696ZM93.0962 25.9696C93.0962 24.0155 92.2007 22.8622 90.6948 22.8622C89.189 22.8622 88.2944 24.0243 88.2944 25.9696C88.2944 27.9315 89.189 29.0761 90.6948 29.0761C92.2007 29.0761 93.0962 27.9315 93.0962 25.9696Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M96.522 21.4423H98.2944V22.9833H98.3374C98.4574 22.502 98.7393 22.0766 99.1359 21.7788C99.5325 21.4809 100.02 21.3286 100.515 21.3475C100.729 21.3468 100.943 21.37 101.152 21.4169V23.1551C100.882 23.0725 100.599 23.0346 100.317 23.0428C100.047 23.0319 99.7778 23.0795 99.5279 23.1824C99.2781 23.2853 99.0535 23.441 98.8695 23.6389C98.6855 23.8368 98.5465 24.0721 98.4621 24.3288C98.3777 24.5855 98.3498 24.8574 98.3804 25.1258V30.496H96.522L96.522 21.4423Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M109.72 27.8368C109.47 29.4803 107.87 30.6083 105.822 30.6083C103.188 30.6083 101.553 28.8436 101.553 26.0126C101.553 23.1727 103.197 21.3309 105.744 21.3309C108.249 21.3309 109.824 23.0516 109.824 25.7968V26.4335H103.429V26.5458C103.4 26.879 103.441 27.2146 103.552 27.5305C103.662 27.8463 103.838 28.1351 104.068 28.3777C104.299 28.6202 104.578 28.811 104.888 28.9373C105.197 29.0636 105.53 29.1225 105.865 29.1102C106.304 29.1514 106.745 29.0497 107.121 28.8202C107.498 28.5908 107.791 28.2459 107.956 27.8368L109.72 27.8368ZM103.438 25.1346H107.964C107.981 24.835 107.936 24.5352 107.831 24.254C107.726 23.9728 107.565 23.7163 107.356 23.5005C107.148 23.2847 106.897 23.1144 106.619 23.0002C106.342 22.886 106.044 22.8303 105.744 22.8368C105.441 22.835 105.141 22.8931 104.861 23.0079C104.581 23.1226 104.326 23.2917 104.112 23.5053C103.898 23.7189 103.728 23.9729 103.612 24.2526C103.496 24.5322 103.437 24.832 103.438 25.1346Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M38.1621 8.73101C38.5517 8.70305 38.9427 8.76191 39.3068 8.90335C39.6709 9.04478 39.9991 9.26526 40.2677 9.54889C40.5363 9.83251 40.7386 10.1722 40.86 10.5435C40.9814 10.9148 41.0188 11.3083 40.9697 11.6959C40.9697 13.6021 39.9395 14.6979 38.1621 14.6979H36.0068V8.73101H38.1621ZM36.9336 13.854H38.0586C38.337 13.8707 38.6156 13.825 38.8741 13.7204C39.1327 13.6158 39.3646 13.4548 39.5531 13.2493C39.7416 13.0437 39.8819 12.7987 39.9638 12.5321C40.0456 12.2655 40.067 11.9839 40.0264 11.708C40.0641 11.4332 40.0405 11.1534 39.9574 10.8887C39.8743 10.6241 39.7336 10.3811 39.5456 10.1771C39.3575 9.97322 39.1267 9.81341 38.8696 9.70917C38.6125 9.60494 38.3356 9.55885 38.0586 9.57422H36.9336V13.854Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M42.0164 12.4444C41.9881 12.1485 42.0219 11.8499 42.1158 11.5679C42.2096 11.2858 42.3614 11.0264 42.5613 10.8065C42.7613 10.5865 43.005 10.4107 43.2768 10.2904C43.5487 10.1702 43.8427 10.108 44.1399 10.108C44.4372 10.108 44.7312 10.1702 45.003 10.2904C45.2749 10.4107 45.5186 10.5865 45.7185 10.8065C45.9185 11.0264 46.0702 11.2858 46.1641 11.5679C46.2579 11.8499 46.2918 12.1485 46.2635 12.4444C46.2923 12.7406 46.2589 13.0396 46.1653 13.3221C46.0717 13.6047 45.92 13.8645 45.72 14.0849C45.52 14.3053 45.2761 14.4814 45.004 14.602C44.7319 14.7225 44.4376 14.7848 44.1399 14.7848C43.8423 14.7848 43.548 14.7225 43.2758 14.602C43.0037 14.4814 42.7598 14.3053 42.5598 14.0849C42.3598 13.8645 42.2082 13.6047 42.1146 13.3221C42.021 13.0396 41.9875 12.7406 42.0164 12.4444ZM45.3494 12.4444C45.3494 11.4683 44.9109 10.8975 44.1414 10.8975C43.3689 10.8975 42.9344 11.4683 42.9344 12.4444C42.9344 13.4283 43.369 13.9947 44.1414 13.9947C44.9109 13.9947 45.3494 13.4244 45.3494 12.4444Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M51.9092 14.6978H50.9873L50.0566 11.3813H49.9863L49.0596 14.6978H48.1465L46.9053 10.1948H47.8066L48.6133 13.6308H48.6797L49.6055 10.1948H50.458L51.3838 13.6308H51.4541L52.2568 10.1948H53.1455L51.9092 14.6978Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M54.1895 10.1949H55.0449V10.9102H55.1113C55.224 10.6533 55.414 10.4379 55.6549 10.2941C55.8957 10.1503 56.1755 10.0852 56.4551 10.1079C56.6742 10.0915 56.8942 10.1245 57.0988 10.2046C57.3034 10.2847 57.4873 10.4098 57.637 10.5707C57.7867 10.7315 57.8983 10.924 57.9635 11.1338C58.0287 11.3436 58.0458 11.5654 58.0137 11.7827V14.6977H57.125V12.0059C57.125 11.2823 56.8106 10.9224 56.1533 10.9224C56.0046 10.9155 55.8561 10.9408 55.718 10.9966C55.58 11.0525 55.4556 11.1375 55.3535 11.2459C55.2514 11.3543 55.1739 11.4834 55.1263 11.6246C55.0788 11.7657 55.0624 11.9154 55.0781 12.0635V14.6978H54.1895L54.1895 10.1949Z"
                                                        fill="white"></path>
                                                    <path d="M59.4297 8.43701H60.3184V14.6978H59.4297V8.43701Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M61.5535 12.4444C61.5252 12.1484 61.5591 11.8499 61.6529 11.5678C61.7468 11.2857 61.8986 11.0263 62.0985 10.8064C62.2985 10.5864 62.5422 10.4106 62.8141 10.2903C63.086 10.17 63.38 10.1079 63.6773 10.1079C63.9745 10.1079 64.2686 10.17 64.5404 10.2903C64.8123 10.4106 65.056 10.5864 65.256 10.8064C65.4559 11.0263 65.6077 11.2857 65.7016 11.5678C65.7954 11.8499 65.8293 12.1484 65.801 12.4444C65.8298 12.7406 65.7964 13.0396 65.7027 13.3221C65.6091 13.6046 65.4574 13.8645 65.2574 14.0849C65.0574 14.3053 64.8135 14.4814 64.5414 14.6019C64.2692 14.7225 63.9749 14.7847 63.6773 14.7847C63.3796 14.7847 63.0853 14.7225 62.8132 14.6019C62.541 14.4814 62.2971 14.3053 62.0971 14.0849C61.8971 13.8645 61.7454 13.6046 61.6518 13.3221C61.5581 13.0396 61.5247 12.7406 61.5535 12.4444ZM64.8865 12.4444C64.8865 11.4683 64.448 10.8975 63.6785 10.8975C62.906 10.8975 62.4715 11.4683 62.4715 12.4444C62.4715 13.4283 62.906 13.9947 63.6785 13.9947C64.448 13.9947 64.8865 13.4244 64.8865 12.4444Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M66.7368 13.4243C66.7368 12.6138 67.3403 12.1465 68.4116 12.0801L69.6313 12.0098V11.6211C69.6313 11.1455 69.3169 10.877 68.7095 10.877C68.2134 10.877 67.8696 11.0591 67.771 11.3774H66.9106C67.0015 10.604 67.729 10.1079 68.7505 10.1079C69.8794 10.1079 70.5161 10.6699 70.5161 11.6211V14.6978H69.6606V14.0649H69.5903C69.4476 14.2919 69.2472 14.477 69.0096 14.6012C68.772 14.7254 68.5056 14.7843 68.2378 14.7719C68.0488 14.7916 67.8577 14.7714 67.6769 14.7127C67.4962 14.654 67.3297 14.5581 67.1883 14.4311C67.0469 14.3042 66.9337 14.149 66.8559 13.9756C66.7781 13.8021 66.7376 13.6144 66.7368 13.4243ZM69.6313 13.0395V12.6631L68.5317 12.7334C67.9116 12.7749 67.6304 12.9858 67.6304 13.3828C67.6304 13.7881 67.9819 14.0239 68.4654 14.0239C68.607 14.0382 68.7501 14.0239 68.8861 13.9819C69.0221 13.9398 69.1482 13.8707 69.257 13.7789C69.3658 13.6871 69.455 13.5743 69.5193 13.4473C69.5836 13.3202 69.6217 13.1816 69.6313 13.0395Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M71.6841 12.4444C71.6841 11.0215 72.4155 10.1201 73.5532 10.1201C73.8346 10.1072 74.1139 10.1746 74.3585 10.3145C74.603 10.4544 74.8026 10.661 74.9341 10.9101H75.0005V8.43701H75.8892V14.6978H75.0376V13.9863H74.9673C74.8257 14.2338 74.6191 14.4378 74.3698 14.5763C74.1206 14.7148 73.8382 14.7825 73.5532 14.772C72.4077 14.772 71.6841 13.8706 71.6841 12.4444ZM72.6021 12.4444C72.6021 13.3994 73.0523 13.9741 73.8052 13.9741C74.5542 13.9741 75.0171 13.3911 75.0171 12.4483C75.0171 11.5098 74.5494 10.9185 73.8052 10.9185C73.0571 10.9185 72.6021 11.4971 72.6021 12.4444Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M79.5657 12.4444C79.5374 12.1485 79.5712 11.8499 79.6651 11.5679C79.7589 11.2858 79.9107 11.0264 80.1106 10.8065C80.3106 10.5865 80.5543 10.4107 80.8261 10.2904C81.098 10.1702 81.392 10.108 81.6892 10.108C81.9865 10.108 82.2805 10.1702 82.5524 10.2904C82.8242 10.4107 83.0679 10.5865 83.2679 10.8065C83.4678 11.0264 83.6196 11.2858 83.7134 11.5679C83.8072 11.8499 83.8411 12.1485 83.8128 12.4444C83.8416 12.7406 83.8082 13.0396 83.7146 13.3221C83.621 13.6047 83.4693 13.8645 83.2693 14.0849C83.0693 14.3053 82.8254 14.4814 82.5533 14.602C82.2812 14.7225 81.9869 14.7848 81.6892 14.7848C81.3916 14.7848 81.0973 14.7225 80.8252 14.602C80.553 14.4814 80.3091 14.3053 80.1092 14.0849C79.9092 13.8645 79.7575 13.6047 79.6639 13.3221C79.5703 13.0396 79.5369 12.7406 79.5657 12.4444ZM82.8987 12.4444C82.8987 11.4683 82.4602 10.8975 81.6907 10.8975C80.9182 10.8975 80.4837 11.4683 80.4837 12.4444C80.4837 13.4283 80.9183 13.9947 81.6907 13.9947C82.4602 13.9947 82.8987 13.4244 82.8987 12.4444Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M85.0054 10.1949H85.8608V10.9102H85.9273C86.0399 10.6533 86.2299 10.4379 86.4708 10.2941C86.7117 10.1503 86.9914 10.0852 87.271 10.1079C87.4901 10.0915 87.7101 10.1245 87.9147 10.2046C88.1193 10.2847 88.3033 10.4098 88.4529 10.5707C88.6026 10.7315 88.7142 10.924 88.7794 11.1338C88.8446 11.3436 88.8617 11.5654 88.8296 11.7827V14.6977H87.9409V12.0059C87.9409 11.2823 87.6265 10.9224 86.9692 10.9224C86.8205 10.9155 86.672 10.9408 86.5339 10.9966C86.3959 11.0525 86.2715 11.1375 86.1694 11.2459C86.0673 11.3543 85.9898 11.4834 85.9423 11.6246C85.8947 11.7657 85.8783 11.9154 85.894 12.0635V14.6978H85.0054V10.1949Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M93.8511 9.07373V10.2153H94.8267V10.9639H93.8511V13.2793C93.8511 13.751 94.0454 13.9575 94.4878 13.9575C94.601 13.9572 94.7142 13.9503 94.8267 13.937V14.6772C94.6671 14.7058 94.5054 14.721 94.3433 14.7226C93.355 14.7226 92.9614 14.375 92.9614 13.5068V10.9638H92.2466V10.2153H92.9614V9.07373H93.8511Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M96.0405 8.43701H96.9214V10.9185H96.9917C97.1098 10.6591 97.305 10.4425 97.5507 10.2982C97.7964 10.1539 98.0807 10.0888 98.3647 10.1118C98.5827 10.1 98.8005 10.1364 99.0028 10.2184C99.2051 10.3004 99.3868 10.4261 99.5349 10.5864C99.683 10.7468 99.7939 10.9378 99.8597 11.146C99.9255 11.3541 99.9445 11.5742 99.9155 11.7905V14.6978H99.0259V12.0098C99.0259 11.2905 98.6909 10.9263 98.063 10.9263C97.9103 10.9137 97.7567 10.9347 97.6129 10.9878C97.4691 11.0408 97.3387 11.1247 97.2307 11.2334C97.1227 11.3421 97.0397 11.4732 96.9877 11.6173C96.9356 11.7614 96.9157 11.9152 96.9292 12.0679V14.6977H96.0406L96.0405 8.43701Z"
                                                        fill="white"></path>
                                                    <path
                                                        d="M105.097 13.4819C104.977 13.8934 104.715 14.2494 104.358 14.4876C104.002 14.7257 103.573 14.8309 103.146 14.7846C102.849 14.7924 102.555 14.7356 102.282 14.6181C102.01 14.5006 101.766 14.3251 101.568 14.104C101.37 13.8829 101.223 13.6213 101.136 13.3375C101.049 13.0537 101.026 12.7544 101.066 12.4604C101.027 12.1655 101.051 11.8656 101.137 11.5809C101.224 11.2962 101.371 11.0335 101.567 10.8104C101.764 10.5873 102.007 10.4092 102.278 10.2879C102.55 10.1667 102.845 10.1053 103.142 10.1079C104.395 10.1079 105.151 10.9639 105.151 12.3779V12.688H101.971V12.7378C101.957 12.903 101.978 13.0693 102.032 13.2261C102.086 13.3828 102.173 13.5265 102.286 13.648C102.399 13.7694 102.536 13.866 102.688 13.9314C102.84 13.9968 103.005 14.0296 103.171 14.0278C103.383 14.0533 103.598 14.015 103.789 13.9178C103.98 13.8206 104.138 13.6688 104.242 13.4819L105.097 13.4819ZM101.971 12.0307H104.246C104.257 11.8796 104.236 11.7278 104.185 11.5851C104.134 11.4423 104.054 11.3119 103.95 11.202C103.845 11.0922 103.719 11.0053 103.579 10.9472C103.439 10.889 103.289 10.8607 103.137 10.8642C102.984 10.8623 102.831 10.8911 102.689 10.9491C102.546 11.007 102.417 11.0929 102.308 11.2016C102.2 11.3103 102.114 11.4397 102.056 11.5821C101.998 11.7245 101.969 11.877 101.971 12.0307Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_211_554">
                                                        <rect width="120" height="40" fill="white"
                                                            transform="translate(0.335938)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></a><a aria-label="GooglePlay" data-position="GooglePlay"
                                            target="_blank"
                                            href=""><svg
                                                xmlns="http://www.w3.org/2000/svg" width="135" height="40"
                                                viewBox="0 0 135 40" fill="none">
                                                <path
                                                    d="M130 0H5C2.23858 0 0 2.23858 0 5V35C0 37.7614 2.23858 40 5 40H130C132.761 40 135 37.7614 135 35V5C135 2.23858 132.761 0 130 0Z"
                                                    fill="black"></path>
                                                <path
                                                    d="M130 0.8C132.32 0.8 134.2 2.68 134.2 5V35C134.2 37.32 132.32 39.2 130 39.2H5C2.68 39.2 0.8 37.32 0.8 35V5C0.8 2.68 2.68 0.8 5 0.8H130ZM130 0H5C2.25 0 0 2.25 0 5V35C0 37.75 2.25 40 5 40H130C132.75 40 135 37.75 135 35V5C135 2.25 132.75 0 130 0Z"
                                                    fill="#A6A6A6"></path>
                                                <path
                                                    d="M47.4201 10.24C47.4201 11.08 47.1701 11.75 46.6701 12.24C46.1101 12.83 45.3701 13.13 44.4701 13.13C43.5701 13.13 42.8701 12.83 42.2601 12.23C41.6501 11.63 41.3501 10.88 41.3501 9.99999C41.3501 9.11999 41.6501 8.36999 42.2601 7.76999C42.8701 7.16999 43.6001 6.87 44.4701 6.87C44.9001 6.87 45.3101 6.95 45.7001 7.12C46.0901 7.29 46.4001 7.51 46.6401 7.79L46.1101 8.31999C45.7101 7.84999 45.1701 7.60999 44.4701 7.60999C43.8401 7.60999 43.2901 7.82999 42.8301 8.27999C42.3701 8.72 42.1401 9.29999 42.1401 10.01C42.1401 10.72 42.3701 11.3 42.8301 11.74C43.2901 12.18 43.8401 12.41 44.4701 12.41C45.1401 12.41 45.7001 12.19 46.1501 11.74C46.4401 11.45 46.6101 11.04 46.6501 10.52H44.4701V9.79999H47.3801C47.4101 9.95999 47.4201 10.11 47.4201 10.25V10.24Z"
                                                    fill="white" stroke="white" stroke-width="0.2"
                                                    stroke-miterlimit="10"></path>
                                                <path
                                                    d="M52.0303 7.74H49.3003V9.64H51.7603V10.36H49.3003V12.26H52.0303V13H48.5303V7H52.0303V7.74Z"
                                                    fill="white" stroke="white" stroke-width="0.2"
                                                    stroke-miterlimit="10"></path>
                                                <path
                                                    d="M55.2801 13H54.5101V7.74H52.8301V7H56.9501V7.74H55.2701V13H55.2801Z"
                                                    fill="white" stroke="white" stroke-width="0.2"
                                                    stroke-miterlimit="10"></path>
                                                <path d="M59.9399 13V7H60.7099V13H59.9399Z" fill="white" stroke="white"
                                                    stroke-width="0.2" stroke-miterlimit="10"></path>
                                                <path
                                                    d="M64.1302 13H63.3602V7.74H61.6802V7H65.8002V7.74H64.1202V13H64.1302Z"
                                                    fill="white" stroke="white" stroke-width="0.2"
                                                    stroke-miterlimit="10"></path>
                                                <path
                                                    d="M73.6101 12.22C73.0201 12.83 72.2901 13.13 71.4101 13.13C70.5301 13.13 69.8001 12.83 69.2101 12.22C68.6201 11.61 68.3301 10.87 68.3301 9.99999C68.3301 9.12999 68.6201 8.37999 69.2101 7.77999C69.8001 7.16999 70.5301 6.87 71.4101 6.87C72.2901 6.87 73.0101 7.16999 73.6101 7.77999C74.2001 8.38999 74.5001 9.12999 74.5001 9.99999C74.5001 10.87 74.2001 11.62 73.6201 12.22H73.6101ZM69.7801 11.72C70.2201 12.17 70.7701 12.39 71.4101 12.39C72.0501 12.39 72.6001 12.17 73.0401 11.72C73.4801 11.27 73.7101 10.7 73.7101 9.99999C73.7101 9.29999 73.4901 8.73 73.0401 8.27999C72.6001 7.82999 72.0501 7.60999 71.4101 7.60999C70.7701 7.60999 70.2201 7.82999 69.7801 8.27999C69.3401 8.73 69.1101 9.29999 69.1101 9.99999C69.1101 10.7 69.3301 11.27 69.7801 11.72Z"
                                                    fill="white" stroke="white" stroke-width="0.2"
                                                    stroke-miterlimit="10"></path>
                                                <path
                                                    d="M75.5801 13V7H76.5201L79.4401 11.67H79.4701L79.4401 10.51V7H80.2101V13H79.4101L76.3601 8.11H76.3301L76.3601 9.27V13.01H75.5901L75.5801 13Z"
                                                    fill="white" stroke="white" stroke-width="0.2"
                                                    stroke-miterlimit="10"></path>
                                                <path
                                                    d="M68.14 21.75C65.79 21.75 63.87 23.54 63.87 26C63.87 28.46 65.79 30.25 68.14 30.25C70.49 30.25 72.41 28.45 72.41 26C72.41 23.55 70.49 21.75 68.14 21.75ZM68.14 28.5801C66.85 28.5801 65.74 27.5201 65.74 26C65.74 24.48 66.85 23.42 68.14 23.42C69.43 23.42 70.54 24.47 70.54 26C70.54 27.53 69.43 28.5801 68.14 28.5801ZM58.82 21.75C56.47 21.75 54.55 23.54 54.55 26C54.55 28.46 56.47 30.25 58.82 30.25C61.17 30.25 63.09 28.45 63.09 26C63.09 23.55 61.17 21.75 58.82 21.75ZM58.82 28.5801C57.53 28.5801 56.42 27.5201 56.42 26C56.42 24.48 57.53 23.42 58.82 23.42C60.11 23.42 61.22 24.47 61.22 26C61.22 27.53 60.11 28.5801 58.82 28.5801ZM47.74 23.0601V24.8601H52.06C51.93 25.8801 51.59 26.6201 51.08 27.1301C50.45 27.7601 49.47 28.4501 47.75 28.4501C45.09 28.4501 43.01 26.3101 43.01 23.6501C43.01 20.9901 45.09 18.85 47.75 18.85C49.18 18.85 50.23 19.41 51 20.14L52.27 18.8701C51.19 17.8401 49.76 17.05 47.74 17.05C44.1 17.05 41.04 20.01 41.04 23.66C41.04 27.31 44.1 30.2701 47.74 30.2701C49.71 30.2701 51.19 29.63 52.35 28.42C53.54 27.23 53.91 25.5501 53.91 24.2001C53.91 23.7801 53.88 23.39 53.81 23.07H47.74V23.0601ZM93.05 24.46C92.7 23.51 91.62 21.75 89.41 21.75C87.2 21.75 85.4 23.47 85.4 26C85.4 28.38 87.2 30.25 89.62 30.25C91.57 30.25 92.7 29.06 93.16 28.37L91.71 27.4001C91.23 28.1101 90.57 28.5801 89.62 28.5801C88.67 28.5801 87.99 28.1401 87.56 27.2901L93.25 24.94L93.06 24.46H93.05ZM87.25 25.8801C87.2 24.2401 88.52 23.4001 89.47 23.4001C90.21 23.4001 90.84 23.77 91.05 24.3L87.25 25.8801ZM82.63 30H84.5V17.5H82.63V30ZM79.57 22.7001H79.51C79.09 22.2001 78.29 21.75 77.27 21.75C75.14 21.75 73.19 23.62 73.19 26.0201C73.19 28.42 75.14 30.26 77.27 30.26C78.29 30.26 79.09 29.8101 79.51 29.2901H79.57V29.9001C79.57 31.5301 78.7 32.4001 77.3 32.4001C76.16 32.4001 75.45 31.58 75.16 30.89L73.53 31.57C74 32.7 75.24 34.0801 77.3 34.0801C79.49 34.0801 81.34 32.7901 81.34 29.6501V22.01H79.57V22.7001ZM77.42 28.5801C76.13 28.5801 75.05 27.5 75.05 26.0201C75.05 24.5401 76.13 23.43 77.42 23.43C78.71 23.43 79.69 24.5301 79.69 26.0201C79.69 27.51 78.69 28.5801 77.42 28.5801ZM101.81 17.5H97.34V30H99.21V25.26H101.82C103.89 25.26 105.92 23.76 105.92 21.38C105.92 19 103.89 17.5 101.82 17.5H101.81ZM101.85 23.5201H99.2V19.23H101.85C103.25 19.23 104.04 20.3901 104.04 21.3701C104.04 22.3501 103.25 23.51 101.85 23.51V23.5201ZM113.39 21.73C112.04 21.73 110.64 22.33 110.06 23.64L111.72 24.3301C112.07 23.6401 112.73 23.41 113.42 23.41C114.38 23.41 115.37 23.9901 115.38 25.0201V25.1501C115.04 24.9601 114.32 24.67 113.43 24.67C111.64 24.67 109.83 25.65 109.83 27.48C109.83 29.15 111.29 30.23 112.93 30.23C114.18 30.23 114.88 29.67 115.31 29.01H115.37V29.98H117.17V25.19C117.17 22.97 115.51 21.73 113.37 21.73H113.39ZM113.16 28.5801C112.55 28.5801 111.7 28.2701 111.7 27.5201C111.7 26.5601 112.76 26.19 113.68 26.19C114.5 26.19 114.89 26.3701 115.38 26.6101C115.24 27.7701 114.24 28.59 113.16 28.59V28.5801ZM123.74 22L121.6 27.42H121.54L119.32 22H117.31L120.64 29.5801L118.74 33.7901H120.69L125.82 22H123.75H123.74ZM106.94 30H108.81V17.5H106.94V30Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M20.7198 19.42L10.0698 30.72C10.3998 31.95 11.5198 32.85 12.8498 32.85C13.3798 32.85 13.8798 32.71 14.3098 32.45L14.3398 32.43L26.3198 25.52L20.7098 19.41L20.7198 19.42Z"
                                                    fill="#EA4335"></path>
                                                <path
                                                    d="M31.4895 17.5H31.4795L26.3095 14.49L20.4795 19.68L26.3295 25.53L31.4795 22.56C32.3795 22.07 32.9895 21.12 32.9895 20.03C32.9895 18.94 32.3895 17.99 31.4895 17.51V17.5Z"
                                                    fill="#FBBC04"></path>
                                                <path
                                                    d="M10.0697 9.28003C10.0097 9.52003 9.96973 9.76003 9.96973 10.02V29.99C9.96973 30.25 9.99973 30.49 10.0697 30.73L21.0797 19.72L10.0697 9.28003Z"
                                                    fill="#4285F4"></path>
                                                <path
                                                    d="M20.7998 20L26.3098 14.49L14.3398 7.55001C13.9098 7.29001 13.3998 7.14001 12.8498 7.14001C11.5198 7.14001 10.3998 8.05002 10.0698 9.27002L20.7998 19.99V20Z"
                                                    fill="#34A853"></path>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
        <!--$-->
        <!--/$-->
    </div>
    
   <div id="modal"
        class="hamburger-modal bg-white-coindesk absolute left-0 flex w-screen flex-col overflow-y-auto overflow-x-hidden transition-all duration-500 ease-out sm:w-screen md:w-[328px] translate-x-0 z-200 hidden"
        style="top: 100px; height: calc(-100px + 100vh);">
        <div class="relative pb-20 p-4 md:pb-4 lg:px-4">
            <!--$--><a
                class="bg-new-yellow text-coindesk-black mb-8 flex h-10 w-full cursor-pointer flex-row items-center justify-center rounded p-2 font-sans text-sm font-semibold"
                href="/account"><span class="font-sans font-semibold text-2xs text-color-black ">My Account</span></a>
            <!--/$-->
            <div class="border-b-1"></div>
            <ul>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self" href="/"><span
                                class="h-auto"><span class="font-title font-bold">News</span></span></a></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">News</span>
                            <ul></ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self" href="/price"><span
                                class="h-auto"><span class="font-title font-bold">Prices</span></span></a></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Prices</span>
                            <ul></ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                            href="https://data.coindesk.com/"><span class="h-auto"><span
                                    class="font-title font-bold">Data</span></span></a><span
                            class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg class="h-full pb-2 pt-2"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="chevron_forward">
                                    <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2411_5870)">
                                        <path id="chevron_forward_2"
                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg></span></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Data</span>
                            <ul>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://data.coindesk.com/trade-data">Trade Data</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://data.coindesk.com/derivatives">Derivatives</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://data.coindesk.com/order-book">Order Book Data</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://data.coindesk.com/on-chain-data">On-Chain Data</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://developers.coindesk.com/documentation">API</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://data.coindesk.com/reports">Research &amp; Insights</a>
                                </li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://data.coindesk.com/data-catalogue">Data Catalogue</a>
                                </li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://data.coindesk.com/ai-machine-learning">AI &amp; Machine
                                        Learning</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                            href="https://indices.coindesk.com/"><span class="h-auto"><span
                                    class="font-title font-bold">Indices</span></span></a><span
                            class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg class="h-full pb-2 pt-2"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="chevron_forward">
                                    <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2411_5870)">
                                        <path id="chevron_forward_2"
                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg></span></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Indices</span>
                            <ul>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://indices.coindesk.com/multi-asset-indices">Multi-Asset
                                        Indices</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://indices.coindesk.com/reference-rates">Reference
                                        Rates</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self"
                                        href="https://indices.coindesk.com/strategies-and-services">Strategies and
                                        Services</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://developers.coindesk.com/documentation">API</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self"
                                        href="https://indices.coindesk.com/insights-and-announcements">Insights &amp;
                                        Announcements</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self"
                                        href="https://indices.coindesk.com/documentation-and-governance">Documentation &amp;
                                        Governance</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self" href="/reports"><span
                                class="h-auto"><span class="font-title font-bold">Research</span></span></a></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Research</span>
                            <ul></ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                            href="https://consensus.coindesk.com/"><span class="h-auto"><span
                                    class="font-title font-bold">Consensus</span></span></a></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Consensus</span>
                            <ul></ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                            href="https://www.coindesk.com/sponsored-content"><span class="h-auto"><span
                                    class="font-title font-bold">Sponsored</span></span></a></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Sponsored</span>
                            <ul></ul>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="border-b-1"></div>
            <ul class="pb-2 lg:pb-4">
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self" href="/videos"><span
                                class="h-auto"><span class="font-title">Videos</span></span></a><span
                            class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg class="h-full pb-2 pt-2"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="chevron_forward">
                                    <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2411_5870)">
                                        <path id="chevron_forward_2"
                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg></span></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Videos</span>
                            <ul>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/videos/coindesk-daily">CoinDesk Daily</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/videos/shorts">Shorts</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/videos/editors-picks">Editor's Picks</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                            href="/podcasts"><span class="h-auto"><span class="font-title">Podcasts</span></span></a><span
                            class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg class="h-full pb-2 pt-2"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="chevron_forward">
                                    <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2411_5870)">
                                        <path id="chevron_forward_2"
                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg></span></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Podcasts</span>
                            <ul>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/podcasts/coindesk-podcast-network">CoinDesk Podcast
                                        Network</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/podcasts/markets-daily">Markets Daily</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/podcasts/generation-c">Gen C</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/podcasts/unchained">Unchained with Laura Shin</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/podcasts/coindesk-podcast-network">The Mining Pod</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                            href="/newsletters"><span class="h-auto"><span
                                    class="font-title">Newsletters</span></span></a><span
                            class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg class="h-full pb-2 pt-2"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="chevron_forward">
                                    <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2411_5870)">
                                        <path id="chevron_forward_2"
                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg></span></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span
                                class="font-title ml-2 py-4 font-bold">Newsletters</span>
                            <ul>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/newsletters/the-node">The Node</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/newsletters/daybook-us">Crypto Daybook Americas</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/newsletters/state-of-crypto">State of Crypto</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/newsletters/crypto-long-short">Crypto Long &amp; Short</a>
                                </li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/newsletters/crypto-for-advisors">Crypto for Advisors</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                            href="https://data.coindesk.com/reports"><span class="h-auto"><span
                                    class="font-title">Research</span></span></a></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Research</span>
                            <ul></ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_blank"
                            href="https://events.coindesk.com/"><span class="h-auto"><span class="font-title">Webinars &amp;
                                    Events</span></span></a><span
                            class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg class="h-full pb-2 pt-2"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="chevron_forward">
                                    <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2411_5870)">
                                        <path id="chevron_forward_2"
                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg></span></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Webinars &amp;
                                Events</span>
                            <ul>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://consensus2025.coindesk.com/">Consensus 2025</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="https://policy-regulation.coindesk.com/">Policy &amp;
                                        Regulation Conference</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                            href="/sponsored-content"><span class="h-auto"><span
                                    class="font-title">Sponsored</span></span></a><span
                            class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg class="h-full pb-2 pt-2"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="chevron_forward">
                                    <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2411_5870)">
                                        <path id="chevron_forward_2"
                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg></span></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">Sponsored</span>
                            <ul>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/sponsored-content">Thought Leadership</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/press-release">Press Releases</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/sponsored-content/hub/coinw">CoinW</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/sponsored-content/hub/MEXC">MEXC</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/sponsored-content/hub/Phemex">Phemex</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/advertise">Advertise</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="m-2 flex flex-col items-center">
                    <div class="group flex w-full flex-row justify-between"><a
                            class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self" href="/"><span
                                class="h-auto"><span class="font-title">News Sections</span></span></a><span
                            class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center"><svg class="h-full pb-2 pt-2"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="chevron_forward">
                                    <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_2411_5870)">
                                        <path id="chevron_forward_2"
                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg></span></div>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4"><button
                                class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                    class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="chevron_forward">
                                        <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2411_5870)">
                                            <path id="chevron_forward_2"
                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                fill="#262626"></path>
                                        </g>
                                    </g>
                                </svg></button><span class="font-sans font-semibold text-2xs text-color-black ">Back to
                                menu</span></div>
                        <div class="border-b-1 mx-8 mb-2"></div>
                        <div class="flex w-full flex-col px-8"><span class="font-title ml-2 py-4 font-bold">News
                                Sections</span>
                            <ul>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/markets">Markets</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/business">Finance</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/tech">Tech</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/policy">Policy</a></li>
                                <li class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6"><a
                                        target="_self" href="/focus">Focus</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="mb-16 mt-8 flex flex-row justify-between space-x-4">
                <div class="flex flex-1"><button
                        class="flex h-[42px] w-full flex-row items-center justify-between rounded border border-[#A6A6A6] pl-4 pr-2"><span
                            class="inline-flex items-center gap-1"><span
                                class="font-sans font-normal text-2xs text-color-black capitalize text-[#676767]">English</span></span><svg
                            class="h-full rotate-90" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="chevron_forward">
                                <mask id="mask0_2411_5870" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9"></rect>
                                </mask>
                                <g mask="url(#mask0_2411_5870)">
                                    <path id="chevron_forward_2"
                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                        fill="#262626"></path>
                                </g>
                            </g>
                        </svg></button>
                    <div
                        class="bg-background absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out translate-x-full">
                        <div class="flex flex-row items-center justify-between p-6"><span
                                class="font-sans font-semibold text-2xs text-color-black ">Select
                                Language</span><button><svg height="24" viewBox="0 0 24 24" width="24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z">
                                    </path>
                                </svg></button></div>
                        <div class="right-0 top-full flex flex-col overflow-hidden bg-white">
                            <div class="h-full"><a
                                    class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4] pointer-events-none touch-none bg-[#f4f4f4] font-bold"
                                    href="/">English
                                    <!-- --> <span class="text-xs uppercase text-[#676767]">en</span><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="ml-auto">
                                        <mask id="mask0_2158_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect width="24" height="24" fill="#D9D9D9"></rect>
                                        </mask>
                                        <g mask="url(#mask0_2158_165)">
                                            <path
                                                d="M9.5503 17.3078L4.58105 12.3386L5.29455 11.6251L9.5503 15.8808L18.7061 6.7251L19.4196 7.4386L9.5503 17.3078Z"
                                                fill="#1C1B1F"></path>
                                        </g>
                                    </svg>
                                </a><a
                                    class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                    href="/es">Español
                                    <!-- --> <span class="text-xs uppercase text-[#676767]">es</span>
                                </a><a
                                    class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                    href="/fil">Filipino
                                    <!-- --> <span class="text-xs uppercase text-[#676767]">fil</span>
                                </a><a
                                    class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                    href="/fr">Français
                                    <!-- --> <span class="text-xs uppercase text-[#676767]">fr</span>
                                </a><a
                                    class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                    href="/it">Italiano
                                    <!-- --> <span class="text-xs uppercase text-[#676767]">it</span>
                                </a><a
                                    class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                    href="/pt-br">Português
                                    <!-- --> <span class="text-xs uppercase text-[#676767]">pt-br</span>
                                </a><a
                                    class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                    href="/ru">Русский
                                    <!-- --> <span class="text-xs uppercase text-[#676767]">ru</span>
                                </a><a
                                    class="inline-flex w-full items-center gap-2 px-6 py-4 text-sm leading-[1] outline-0 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4]"
                                    href="/uk">Українська
                                    <!-- --> <span class="text-xs uppercase text-[#676767]">uk</span>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div data-submodule-name="price/currency-display-settings" data-submodule-version="1.0.0"
                    data-submodule-instance="default" class="flex grow"></div>
            </div>
        </div>
    </div>
    <script src="https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/chunks/ea99ed70-7bc571f4635c5457.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks" async="">
    <script>
        (self.__next_f=self.__next_f||[]).push([0])
    </script>
    <script>
        self.__next_f.push([1,"1:\"$Sreact.fragment\"\n2:I[76118,[],\"default\"]\n3:I[14173,[\"8039\",\"static/chunks/app/error-a7bd2133f6a2add2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"default\"]\n4:I[74460,[],\"default\"]\n7:I[64535,[],\"OutletBoundary\"]\n9:I[64535,[],\"MetadataBoundary\"]\nb:I[64535,[],\"ViewportBoundary\"]\nd:I[12993,[],\"default\"]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/0688fb007df54365-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/0afaaeefb1f41aaf-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/0cebb527f4ccb6a7-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/1083a57c9a1ef3fe-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/1ef71e9b41a80409-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/20c7578d0443ce5e-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/2bccaad0486d83c0-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/2f4de1a69eaac703-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/4be2886863d40658-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/566536ffc16e8201-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/571c7ee409af65a2-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/5ad78c376df9db24-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/69d39251ec78fe0c-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/6f6167f6eae28031-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/7d66d975f14e01b2-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/87874345d8cec55a-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/b54294595938a807-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/bbc3f248745c1922-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/bbced8d8425678b8-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/ca4e41af2994ea48-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/da92883004cbabe7-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/dca0af9cea0328d7-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/e51c2121bb9abe74-s.p.woff\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/f5f2209128591ee3-s.p.woff2\",\"font\",{\"crossOrigin\":\"\",\"type\":\"font/woff2\"}]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/css/fe8ae9e03e55a394.css?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"style\"]\n:HL[\"https://coindesk-next-laep3of2c-coindesk.verce"])
    </script>
    <script>
        self.__next_f.push([1,"l.app/_next/static/css/961a74d75c619110.css?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"style\"]\n0:{\"P\":null,\"b\":\"bn8ctJ5mguJivP45IzS1H\",\"p\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app\",\"c\":[\"\",\"?viewport=desktop\u0026country=NG\u0026city=Lagos\u0026countryRegion=LA\u0026region=cpt1\u0026subregion=Western+Africa\u0026oficialCountryName=Federal+Republic+of+Nigeria\u0026currencyCode=NGN\u0026currencySymbol=%E2%82%A6\u0026currencyName=Nigerian+naira\u0026locale=en\"],\"i\":false,\"f\":[[[\"\",{\"children\":[\"(media)\",{\"children\":[\"__PAGE__?{\\\"viewport\\\":\\\"desktop\\\",\\\"country\\\":\\\"NG\\\",\\\"city\\\":\\\"Lagos\\\",\\\"countryRegion\\\":\\\"LA\\\",\\\"region\\\":\\\"cpt1\\\",\\\"subregion\\\":\\\"Western Africa\\\",\\\"oficialCountryName\\\":\\\"Federal Republic of Nigeria\\\",\\\"currencyCode\\\":\\\"NGN\\\",\\\"currencySymbol\\\":\\\"₦\\\",\\\"currencyName\\\":\\\"Nigerian naira\\\",\\\"locale\\\":\\\"en\\\"}\",{}]},\"$undefined\",\"$undefined\",true]}],[\"\",[\"$\",\"$1\",\"c\",{\"children\":[null,[\"$\",\"$L2\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\"],\"error\":\"$3\",\"errorStyles\":[],\"errorScripts\":[],\"template\":[\"$\",\"$L4\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":[[],[[\"$\",\"title\",null,{\"children\":\"404: This page could not be found.\"}],[\"$\",\"div\",null,{\"style\":{\"fontFamily\":\"system-ui,\\\"Segoe UI\\\",Roboto,Helvetica,Arial,sans-serif,\\\"Apple Color Emoji\\\",\\\"Segoe UI Emoji\\\"\",\"height\":\"100vh\",\"textAlign\":\"center\",\"display\":\"flex\",\"flexDirection\":\"column\",\"alignItems\":\"center\",\"justifyContent\":\"center\"},\"children\":[\"$\",\"div\",null,{\"children\":[[\"$\",\"style\",null,{\"dangerouslySetInnerHTML\":{\"__html\":\"body{color:#000;background:#fff;margin:0}.next-error-h1{border-right:1px solid rgba(0,0,0,.3)}@media (prefers-color-scheme:dark){body{color:#fff;background:#000}.next-error-h1{border-right:1px solid rgba(255,255,255,.3)}}\"}}],[\"$\",\"h1\",null,{\"className\":\"next-error-h1\",\"style\":{\"display\":\"inline-block\",\"margin\":\"0 20px 0 0\",\"padding\":\"0 23px 0 0\",\"fontSize\":24,\"fontWeight\":500,\"verticalAlign\":\"top\",\"lineHeight\":\"49px\"},\"children\":404}],[\"$\",\"div\",null,{\"style\":{\"display\":\"inline-block\"},\"children\":[\"$\",\"h2\",null,{\"style\":{\"fontSize\":14,\"fontWeight\":400,\"lineHeight\":\"49px\",\"margin\":0},\"children\":\"This page could not be found.\"}]}]]}]}]]],\"forbidden\":\"$undefined\",\"unauthorized\":\"$undefined\"}]]}],{\"children\":[\"(media)\",[\"$\",\"$1\",\"c\",{\"children\":[[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/css/fe8ae9e03e55a394.css?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\",\"nonce\":\"$undefined\"}],[\"$\",\"link\",\"1\",{\"rel\":\"stylesheet\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/css/961a74d75c619110.css?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\",\"nonce\":\"$undefined\"}]],\"$L5\"]}],{\"children\":[\"__PAGE__\",[\"$\",\"$1\",\"c\",{\"children\":[\"$L6\",null,[\"$\",\"$L7\",null,{\"children\":\"$L8\"}]]}],{},null,false]},null,false]},null,false],[\"$\",\"$1\",\"h\",{\"children\":[null,[\"$\",\"$1\",\"262ca41b-d2c5-49ff-8b9f-a91348d6eadf\",{\"children\":[[\"$\",\"$L9\",null,{\"children\":\"$La\"}],[\"$\",\"$Lb\",null,{\"children\":\"$Lc\"}],[\"$\",\"meta\",null,{\"name\":\"next-size-adjust\",\"content\":\"\"}]]}]]}],false]],\"m\":\"$undefined\",\"G\":[\"$d\",\"$undefined\"],\"s\":false,\"S\":false}\n6:[\"$\",\"section\",null,{\"id\":\"$undefined\",\"data-module-name\":\"homepage\",\"data-module-version\":\"1.0.0\",\"data-module-instance\":\"default\",\"className\":\"flex-grow\",\"children\":[\"$Le\",[\"$\",\"div\",null,{\"className\":\"container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6\",\"children\":[[\"$\",\"h1\",null,{\"className\":\"text-[0px]\",\"children\":\"CoinDesk: Bitcoin, Ethereum, Crypto News and Price Data\"}],\"$Lf\"]}],[\"$\",\"div\",null,{\"className\":\"flex\",\"children\":\"$L10\"}],[\"$\",\"div\",null,{\"className\":\"container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6\",\"children\":[\"$\",\"div\",null,{\"className\":\"grid\",\"children\":[[\"$\",\"div\",null,{\"className\":\"flex md:"])
    </script>
    <script>
        self.__next_f.push([1,"hidden flex-col justify-center items-center order-1\",\"children\":false}],[\"$\",\"div\",null,{\"className\":\"order-2\",\"children\":\"$L11\"}],[\"$\",\"div\",null,{\"className\":\"order-3\",\"children\":\"$L12\"}]]}]}],\"$L13\",[\"$\",\"div\",null,{\"className\":\"container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6\",\"children\":[\"$\",\"div\",null,{\"className\":\"grid\",\"children\":[[\"$\",\"div\",null,{\"className\":\"flex flex-col justify-center items-center order-1 lg:order-2 xl:hidden\",\"children\":false}],[\"$\",\"div\",null,{\"className\":\"order-2 lg:order-1\",\"children\":\"$L14\"}],[\"$\",\"div\",null,{\"className\":\"order-3\",\"children\":\"$L15\"}]]}]}]]}]\nc:[[\"$\",\"meta\",\"0\",{\"name\":\"viewport\",\"content\":\"width=device-width, initial-scale=1\"}]]\ne:null\n10:null\n16:I[66840,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"PreloadChunks\"]\n17:I[14341,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"SpecialCoverageModule\"]\n13:[[\"$\",\"$L16\",null,{\"moduleIds\":[\"app/components/base/home/special-coverage-module/index.tsx -\u003e ./module\"]}],[\"$\",\"$L17\",null,{\"articles\":[{\"url\":\"https://consensus2025.coindesk.com/\",\"sponsorText\":null,\"imageUrl\":\"https://cdn.sanity.io/images/s3y3vcno/production/bd67b758f7546e58d665991fa21313c083c7c003-1200x800.png?auto=format\",\"imageAlt\":\"Consensus Toronto 2025\",\"title\":\"Consensus Toronto 2025\",\"headline\":\"Consensus Toronto 2025\",\"description\":\"Check out the latest coverage and meet our top speakers. \",\"date\":null}],\"specialCoverageTitle\":\"CONSENSUS TORONTO\",\"specialCoverageUrl\":\"https://consensus2025.coindesk.com/\"}]]\n18:I[102,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"NewslettersModule\"]\n11:[[\"$\",\"$L16\",null,{\"moduleIds\":[\"app/components/base/home/newsletters-module/index.tsx -\u003e ./module\"]}],[\"$\",\"$L18\",null,{\"newslettersData\":[{\"title\":\"Crypto Daybook Americas\",\"frequency\":\"Every Weekday\",\"pathname\":\"/newsletters/daybook-us\",\"thumbnails\":[{\"_key\":\"9e1fe200c722\",\"image\":{\"title\":\"Crypto Daybook Americas\",\"_type\":\"image\",\"alt\":\"Crypto Daybook Americas\",\"asset\":{\"_ref\":\"image-fc006af244f37d4dd77223ac5ef460f9d74c0217-1314x1244-png\",\"_type\":\"reference\"}},\"_type\":\"featuredImage\",\"format\":\"Basic\",\"source\":{\"_type\":\"image\",\"alt\":\"Crypto Daybook Americas\",\"asset\":{\"_ref\":\"image-fc006af244f37d4dd77223ac5ef460f9d74c0217-1314x1244-png\",\"_type\":\"reference\"},\"title\":\"Crypto Daybook Americas\"}},{\"source\":{"])
    </script>
    <script>
        self.__next_f.push([1,"\"alt\":\"Crypto Daybook Americas\",\"asset\":{\"_ref\":\"image-259ba5cf9cd11e4bf76257869d73612632229baf-2400x1260-png\",\"_type\":\"reference\"},\"title\":\"Crypto Daybook Americas\",\"_type\":\"inlineImage\"},\"_key\":\"1efb0b8c188f\",\"_type\":\"featuredImage\",\"format\":\"Open Graph\"}],\"_type\":\"newsletter\",\"description\":\"Market analysis for crypto traders and investors.\",\"slug\":{\"current\":\"daybook-us\",\"_type\":\"slug\"},\"id\":\"fHCLJETB\",\"authors\":[{\"roles\":{\"editor\":false,\"contributor\":false,\"author\":true,\"podcastHost\":false},\"biography\":[{\"markDefs\":[],\"children\":[{\"text\":\"CoinDesk is the world leader in news, prices and information on bitcoin and other digital currencies.\\r\\n\\r\\nWe cover news and analysis on the trends, price movements, technologies, companies and people in the bitcoin and digital currency world.\",\"_key\":\"0\",\"_type\":\"span\",\"marks\":[]}],\"_type\":\"block\",\"style\":\"normal\",\"_key\":\"0\"}],\"_createdAt\":\"2024-09-09T18:29:12Z\",\"_updatedAt\":\"2025-03-17T20:53:49Z\",\"byline\":\"CoinDesk\",\"_type\":\"person\",\"active\":true,\"socialMedia\":[],\"profilePicture\":{\"_type\":\"image\",\"alt\":\"CoinDesk\",\"asset\":{\"_ref\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"reference\"},\"title\":\"CoinDesk\"},\"arc\":{\"updateDate\":\"2023-11-06T11:25:15.942Z\",\"arcID\":\"CoinDesk\"},\"_id\":\"nU11yqi6QiF4aQng6i2qla\",\"email\":\"contact@coindesk.com\",\"lastName\":\"Staff\",\"images\":[{\"source\":{\"description\":\"\",\"asset\":{\"_ref\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"reference\"},\"title\":\"CoinDesk\",\"tags\":[],\"_type\":\"image\",\"alt\":\"CoinDesk\"},\"_key\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"featuredImage\",\"format\":\"Basic\"}],\"_rev\":\"Ti5fFNNxaMZP27DWDhDm5G\",\"firstName\":\"CoinDesk\",\"slug\":{\"current\":\"coindesk\",\"_type\":\"slug\"}}],\"heading\":\"CoinDesk\",\"_id\":\"60c6c9f1-927e-4b92-af53-701559cbf7f6\",\"_rev\":\"PvgUwUCrEtdwpmV7mWTU6N\",\"tags\":[{\"_type\":\"reference\",\"_key\":\"42423c807ac1\",\"_ref\":\"9d0e9062-4d61-4a6c-8341-e19e7b6cbc8a\"}],\"meta\":{\"description\":\"Market analysis for crypto traders and investors.\",\"title\":\"Crypto Daybook Americas - The latest moves in crypto markets, in context\"},\"status\":\"active\",\"_createdAt\":\"2024-09-27T10:19:44Z\",\"_updatedAt\":\"2025-03-10T19:28:13Z\",\"date\":{\"publishedAt\":\"2024-09-27T10:19:43.736Z\",\"displayDate\":\"2024-08-31T17:00:00.000Z\",\"createDate\":\"2024-09-27T10:19:44Z\",\"updateDate\":\"2025-03-10T19:28:11.179Z\"}},{\"slug\":{\"current\":\"crypto-for-advisors\",\"_type\":\"slug\"},\"meta\":{\"description\":\"Defining crypto, digital assets and the future of finance for financial advisors.\",\"title\":\"Crypto for Advisors\"},\"_updatedAt\":\"2025-03-10T19:26:47Z\",\"_rev\":\"inhpkddCff95qFPaKLNig2\",\"title\":\"Crypto for Advisors\",\"frequency\":\"Every Thursday\",\"date\":{\"createDate\":\"2024-10-04T13:37:17.870Z\",\"updateDate\":\"2025-03-10T19:26:46.207Z\",\"publishedAt\":\"2024-10-04T13:55:16.629Z\",\"displayDate\":\"2024-09-06T13:00:00.000Z\"},\"_createdAt\":\"2024-10-04T13:55:16Z\",\"authors\":[{\"arc\":{\"arcID\":\"sarah-morton\",\"updateDate\":\"2023-11-06T11:29:53.606Z\"},\"_id\":\"1iDendM1XsMqbzYcfvLMI8\",\"_updatedAt\":\"2025-02-20T19:36:55Z\",\"lastName\":\"Morton\",\"images\":[{\"_key\":\"image-4a7d1f0515dd9217ed3c79ffaab3d2d23e5fcd02-2400x2400-png\",\"_type\":\"featuredImage\",\"format\":\"Basic\",\"source\":{\"_type\":\"image\",\"asset\":{\"_ref\":\"image-4a7d1f0515dd9217ed3c79ffaab3d2d23e5fcd02-2400x2400-png\",\"_type\":\"reference\"}}}],\"_rev\":\"LKwL9Eieq4kjX08UR9dkM3\",\"_type\":\"person\",\"active\":true,\"firstName\":\"Sarah\",\"profilePicture\":{\"_type\":\"image\",\"alt\":\"Sarah Morton\",\"asset\":{\"_ref\":\"image-4a7d1f0515dd9217ed3c79ffaab3d2d23e5fcd02-2400x2400-png\",\"_type\":\"reference\"},\"title\":\"Sarah Morton\"},\"_createdAt\":\"2024-09-09T18:46:54Z\",\"biography\":[{\"style\":\"normal\",\"_key\":\"0\",\"markDefs\":[],\"children\":[{\"_type\":\"span\",\"marks\":[],\"text\":\"Sarah Morton is Chief Strategy Officer and Co-founder of MeetAmi Innovations Inc. Sarah’s vision is simple – to empower generations to successfully invest in Digital Assets. To accomplish this, she leads the MeetAmi marketing and product teams to build easy-to-use software that manages complex transactions, meets regulatory and compliance requirements, and provides education t"])
    </script>
    <script>
        self.__next_f.push([1,"o demystify this complex technology. Her background bringing multiple tech companies to market ahead of the trend speaks to her visionary mindset.\\n\\n\",\"_key\":\"0\"}],\"_type\":\"block\"}],\"socialMedia\":[{\"_type\":\"socialMedia\",\"_key\":\"0\",\"platform\":\"X\",\"url\":\"MortonInsights\"},{\"_key\":\"2\",\"platform\":\"LinkedIn\",\"url\":\"sarahmortonvan\",\"_type\":\"socialMedia\"},{\"_type\":\"socialMedia\",\"_key\":\"7\",\"platform\":\"Personal Website\",\"url\":\"www.meetami.ca\"}],\"byline\":\"Sarah Morton\",\"email\":\"\",\"slug\":{\"current\":\"sarah-morton\",\"_type\":\"slug\"},\"roles\":{\"editor\":false,\"contributor\":false,\"author\":true,\"podcastHost\":false}}],\"thumbnails\":[{\"format\":\"Open Graph\",\"source\":{\"title\":\"Crypto for Advisors\",\"_type\":\"inlineImage\",\"alt\":\"Crypto for Advisors\",\"asset\":{\"_ref\":\"image-dfb812e17b5eff07c0d9a9f6d9f1df503b9ad76f-1200x630-png\",\"_type\":\"reference\"}},\"_key\":\"4afee8d09a17\",\"_type\":\"featuredImage\"}],\"companyType\":true,\"heading\":\"CoinDesk Indices\",\"tags\":[{\"_ref\":\"Ozfi2VpAI40hukSy8ciov6\",\"_type\":\"reference\",\"_key\":\"334d50546663\"}],\"pathname\":\"/newsletters/crypto-for-advisors\",\"description\":\"Defining crypto, digital assets and the future of finance for financial advisors.\",\"_id\":\"7e78b8be-99e1-4b2b-aaf6-3f11567dc45a\",\"_type\":\"newsletter\",\"status\":\"active\"},{\"_updatedAt\":\"2025-03-10T19:24:56Z\",\"_rev\":\"inhpkddCff95qFPaKLLhqx\",\"heading\":\"CoinDesk\",\"pathname\":\"/newsletters/the-protocol\",\"tags\":[{\"_ref\":\"LTI8EDa6t02yCkKghjTbg8\",\"_type\":\"reference\",\"_key\":\"c02d1afb6a89\"}],\"_id\":\"9b7368b4-a644-4042-a83b-4e38b01daebb\",\"slug\":{\"current\":\"the-protocol\",\"_type\":\"slug\"},\"thumbnails\":[{\"_type\":\"featuredImage\",\"format\":\"Open Graph\",\"source\":{\"_type\":\"inlineImage\",\"alt\":\"The Protocol\",\"asset\":{\"_ref\":\"image-fd005d96170171bc6db8ba31e0c68b367ef80ddc-1200x630-png\",\"_type\":\"reference\"},\"title\":\"The Protocol\"},\"_key\":\"b69659c9047d\"}],\"_type\":\"newsletter\",\"title\":\"The Protocol\",\"meta\":{\"description\":\"Exploring the tech behind crypto one block at a time.\",\"title\":\"The Protocol\"},\"status\":\"active\",\"companyType\":false,\"description\":\"Exploring the tech behind crypto one block at a time.\",\"authors\":[{\"_id\":\"nU11yqi6QiF4aQng6i2qla\",\"email\":\"contact@coindesk.com\",\"lastName\":\"Staff\",\"images\":[{\"source\":{\"alt\":\"CoinDesk\",\"description\":\"\",\"asset\":{\"_ref\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"reference\"},\"title\":\"CoinDesk\",\"tags\":[],\"_type\":\"image\"},\"_key\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"featuredImage\",\"format\":\"Basic\"}],\"_rev\":\"Ti5fFNNxaMZP27DWDhDm5G\",\"firstName\":\"CoinDesk\",\"slug\":{\"current\":\"coindesk\",\"_type\":\"slug\"},\"roles\":{\"editor\":false,\"contributor\":false,\"author\":true,\"podcastHost\":false},\"biography\":[{\"markDefs\":[],\"children\":[{\"text\":\"CoinDesk is the world leader in news, prices and information on bitcoin and other digital currencies.\\r\\n\\r\\nWe cover news and analysis on the trends, price movements, technologies, companies and people in the bitcoin and digital currency world.\",\"_key\":\"0\",\"_type\":\"span\",\"marks\":[]}],\"_type\":\"block\",\"style\":\"normal\",\"_key\":\"0\"}],\"_createdAt\":\"2024-09-09T18:29:12Z\",\"_updatedAt\":\"2025-03-17T20:53:49Z\",\"byline\":\"CoinDesk\",\"_type\":\"person\",\"active\":true,\"socialMedia\":[],\"profilePicture\":{\"_type\":\"image\",\"alt\":\"CoinDesk\",\"asset\":{\"_ref\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"reference\"},\"title\":\"CoinDesk\"},\"arc\":{\"updateDate\":\"2023-11-06T11:25:15.942Z\",\"arcID\":\"CoinDesk\"}}],\"_createdAt\":\"2024-10-04T13:54:03Z\",\"date\":{\"publishedAt\":\"2024-10-04T13:54:03.377Z\",\"displayDate\":\"2024-09-04T13:00:00.000Z\",\"createDate\":\"2024-10-04T13:37:17.870Z\",\"updateDate\":\"2025-03-10T19:24:55.291Z\"},\"frequency\":\"Every Wednesday\"},{\"_type\":\"newsletter\",\"description\":\"A must read for institutions. Insights, news and analysis delivered weekly.\",\"meta\":{\"title\":\"Crypto Long \u0026 Short\",\"description\":\"Insights, news and analysis for the professional investor.\"},\"heading\":\"CoinDesk Indices\",\"companyType\":true,\"pathname\":\"/newsletters/crypto-long-short\",\"frequency\":\"Every Wednesday\",\"_updatedAt\":\"2025-03-10T19:27:36Z\",\"date\":{\"createDate\":\"2024-09-27T10:25:54Z\",\"updateDate\":\"2025-03-"])
    </script>
    <script>
        self.__next_f.push([1,"10T19:27:33.201Z\",\"publishedAt\":\"2024-09-27T10:25:54.306Z\",\"displayDate\":\"2024-09-05T03:00:00.000Z\"},\"thumbnails\":[{\"source\":{\"title\":\"Crypto Long and Short preview\",\"_type\":\"image\",\"alt\":\"Crypto Long and Short preview\",\"asset\":{\"_ref\":\"image-9a552dc32aa7729ac860d94d5d34b6f60b7aa909-1233x1590-png\",\"_type\":\"reference\"}},\"_key\":\"185834a61733\",\"image\":{\"asset\":{\"_ref\":\"image-9a552dc32aa7729ac860d94d5d34b6f60b7aa909-1233x1590-png\",\"_type\":\"reference\"},\"_type\":\"image\"},\"_type\":\"featuredImage\",\"format\":\"Basic\"},{\"_type\":\"featuredImage\",\"format\":\"Open Graph\",\"source\":{\"_type\":\"inlineImage\",\"alt\":\"Crypto Long and Short\",\"asset\":{\"_ref\":\"image-0d8b5b706df8f29f38dac71906595c5414cc47d3-1200x630-png\",\"_type\":\"reference\"},\"title\":\"Crypto Long and Short\"},\"_key\":\"a4e5591a70a2\"}],\"tags\":[{\"_ref\":\"pQ4cTYdJFtsT33Gc5Nahh9\",\"_type\":\"reference\",\"_key\":\"3be4ad990fd5\"}],\"_createdAt\":\"2024-09-27T10:25:54Z\",\"_id\":\"c723d3a7-de7a-4122-ab50-74458895ef2c\",\"slug\":{\"_type\":\"slug\",\"current\":\"crypto-long-short\"},\"_rev\":\"inhpkddCff95qFPaKLO0sZ\",\"status\":\"active\",\"title\":\"Crypto Long \u0026 Short\",\"authors\":[{\"_updatedAt\":\"2025-02-20T19:36:55Z\",\"images\":[{\"_type\":\"featuredImage\",\"format\":\"Basic\",\"source\":{\"_type\":\"image\",\"asset\":{\"_ref\":\"image-15584010658bbd020791900571d59add63cf22fe-3355x3481-jpg\",\"_type\":\"reference\"}},\"_key\":\"image-15584010658bbd020791900571d59add63cf22fe-3355x3481-jpg\"}],\"biography\":[{\"markDefs\":[],\"children\":[{\"_type\":\"span\",\"marks\":[],\"text\":\"Alexandra Levis is the founder and CEO of Arro Financial Communications, a financial marketing and PR agency skilled at distilling complex stories into winning campaigns. Her firm's clients bridge the worlds of TradFi and DeFi, including traditional asset mangers and firms in the digital asset space . Prior to establishing the agency, she developed and ran marketing and public relations campaigns at Global X Funds, an NYC-based ETF issuer, where she served as Vice President of Marketing.  Levis graduated with a B.A. in International Relations from Tufts University.\",\"_key\":\"0\"}],\"_type\":\"block\",\"style\":\"normal\",\"_key\":\"0\"}],\"firstName\":\"Alexandra\",\"_id\":\"1iDendM1XsMqbzYcfvL8xR\",\"byline\":\"Alexandra Levis\",\"email\":\"\",\"roles\":{\"editor\":false,\"contributor\":false,\"author\":true,\"podcastHost\":false},\"_type\":\"person\",\"active\":true,\"profilePicture\":{\"alt\":\"Alexandra Levis bio photo\",\"description\":\"\",\"asset\":{\"_ref\":\"image-15584010658bbd020791900571d59add63cf22fe-3355x3481-jpg\",\"_type\":\"reference\"},\"title\":\"Alexandra Levis headshot\",\"tags\":[],\"_type\":\"image\"},\"_rev\":\"LKwL9Eieq4kjX08UR9dkM3\",\"socialMedia\":[{\"_type\":\"socialMedia\",\"_key\":\"2\",\"platform\":\"LinkedIn\",\"url\":\"alexandralevis\"}],\"arc\":{\"arcID\":\"alexandra-levis\",\"updateDate\":\"2024-08-29T16:29:11.383Z\"},\"_createdAt\":\"2024-09-09T18:41:26Z\",\"slug\":{\"current\":\"alexandra-levis\",\"_type\":\"slug\"},\"lastName\":\"Levis\"}]},{\"_updatedAt\":\"2025-03-10T19:25:43Z\",\"meta\":{\"description\":\"The biggest crypto news and ideas of the day\",\"title\":\"The Node - The biggest crypto news and ideas of the day\"},\"slug\":{\"_type\":\"slug\",\"current\":\"the-node\"},\"heading\":\"CoinDesk\",\"status\":\"active\",\"date\":{\"updateDate\":\"2025-03-10T19:25:41.126Z\",\"publishedAt\":\"2024-10-04T13:52:56.188Z\",\"displayDate\":\"2024-09-01T17:00:00.000Z\",\"createDate\":\"2024-10-04T13:37:17.870Z\"},\"tags\":[{\"_ref\":\"HxjM3LiV3wGcF7gmfC7jLv\",\"_type\":\"reference\",\"_key\":\"22ecfa8456f0\"}],\"_id\":\"da2f39f5-8b09-4023-b9b0-9ac459cae923\",\"thumbnails\":[{\"_type\":\"featuredImage\",\"format\":\"Open Graph\",\"source\":{\"alt\":\"The Node\",\"asset\":{\"_ref\":\"image-72e126fd4caeddd5e1c5d68073ecb93f85de3775-1200x630-png\",\"_type\":\"reference\"},\"title\":\"The Node\",\"_type\":\"inlineImage\"},\"_key\":\"63e96a286165\"}],\"title\":\"The Node\",\"frequency\":\"Every Weekday\",\"_rev\":\"PvgUwUCrEtdwpmV7mWSNhj\",\"_type\":\"newsletter\",\"authors\":[{\"_updatedAt\":\"2025-02-20T19:36:55Z\",\"images\":[{\"_type\":\"featuredImage\",\"format\":\"Basic\",\"source\":{\"_type\":\"image\",\"asset\":{\"_ref\":\"image-15584010658bbd020791900571d59add63cf22fe-3355x3481-jpg\",\"_type\":\"reference\"}},\"_key\":\"image-15584010658bbd020791900571d59add63cf22fe-3355x3481-jpg\"}],\"biography\":[{\"markDefs\":[],\"children\":[{\"_type\":\"span\",\"m"])
    </script>
    <script>
        self.__next_f.push([1,"arks\":[],\"text\":\"Alexandra Levis is the founder and CEO of Arro Financial Communications, a financial marketing and PR agency skilled at distilling complex stories into winning campaigns. Her firm's clients bridge the worlds of TradFi and DeFi, including traditional asset mangers and firms in the digital asset space . Prior to establishing the agency, she developed and ran marketing and public relations campaigns at Global X Funds, an NYC-based ETF issuer, where she served as Vice President of Marketing.  Levis graduated with a B.A. in International Relations from Tufts University.\",\"_key\":\"0\"}],\"_type\":\"block\",\"style\":\"normal\",\"_key\":\"0\"}],\"firstName\":\"Alexandra\",\"_id\":\"1iDendM1XsMqbzYcfvL8xR\",\"byline\":\"Alexandra Levis\",\"email\":\"\",\"roles\":{\"editor\":false,\"contributor\":false,\"author\":true,\"podcastHost\":false},\"_type\":\"person\",\"active\":true,\"profilePicture\":{\"title\":\"Alexandra Levis headshot\",\"tags\":[],\"_type\":\"image\",\"alt\":\"Alexandra Levis bio photo\",\"description\":\"\",\"asset\":{\"_ref\":\"image-15584010658bbd020791900571d59add63cf22fe-3355x3481-jpg\",\"_type\":\"reference\"}},\"_rev\":\"LKwL9Eieq4kjX08UR9dkM3\",\"socialMedia\":[{\"_type\":\"socialMedia\",\"_key\":\"2\",\"platform\":\"LinkedIn\",\"url\":\"alexandralevis\"}],\"arc\":{\"arcID\":\"alexandra-levis\",\"updateDate\":\"2024-08-29T16:29:11.383Z\"},\"_createdAt\":\"2024-09-09T18:41:26Z\",\"slug\":{\"current\":\"alexandra-levis\",\"_type\":\"slug\"},\"lastName\":\"Levis\"}],\"_createdAt\":\"2024-10-04T13:52:56Z\",\"description\":\"The biggest crypto news and ideas of the day.\",\"pathname\":\"/newsletters/the-node\"},{\"_createdAt\":\"2024-10-04T13:55:42Z\",\"authors\":[{\"active\":true,\"socialMedia\":[],\"profilePicture\":{\"_type\":\"image\",\"alt\":\"CoinDesk\",\"asset\":{\"_ref\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"reference\"},\"title\":\"CoinDesk\"},\"arc\":{\"updateDate\":\"2023-11-06T11:25:15.942Z\",\"arcID\":\"CoinDesk\"},\"_id\":\"nU11yqi6QiF4aQng6i2qla\",\"email\":\"contact@coindesk.com\",\"lastName\":\"Staff\",\"images\":[{\"source\":{\"tags\":[],\"_type\":\"image\",\"alt\":\"CoinDesk\",\"description\":\"\",\"asset\":{\"_ref\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"reference\"},\"title\":\"CoinDesk\"},\"_key\":\"image-aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800-png\",\"_type\":\"featuredImage\",\"format\":\"Basic\"}],\"_rev\":\"Ti5fFNNxaMZP27DWDhDm5G\",\"firstName\":\"CoinDesk\",\"slug\":{\"current\":\"coindesk\",\"_type\":\"slug\"},\"roles\":{\"editor\":false,\"contributor\":false,\"author\":true,\"podcastHost\":false},\"biography\":[{\"markDefs\":[],\"children\":[{\"text\":\"CoinDesk is the world leader in news, prices and information on bitcoin and other digital currencies.\\r\\n\\r\\nWe cover news and analysis on the trends, price movements, technologies, companies and people in the bitcoin and digital currency world.\",\"_key\":\"0\",\"_type\":\"span\",\"marks\":[]}],\"_type\":\"block\",\"style\":\"normal\",\"_key\":\"0\"}],\"_createdAt\":\"2024-09-09T18:29:12Z\",\"_updatedAt\":\"2025-03-17T20:53:49Z\",\"byline\":\"CoinDesk\",\"_type\":\"person\"}],\"description\":\"Examining the intersection of cryptocurrency and government.\",\"_id\":\"fafde0d6-e5f1-494b-b81f-9b9b85de9b84\",\"status\":\"active\",\"heading\":\"CoinDesk\",\"frequency\":\"Every Tuesday\",\"thumbnails\":[{\"_type\":\"featuredImage\",\"format\":\"Open Graph\",\"source\":{\"title\":\"State of Crypto\",\"_type\":\"inlineImage\",\"alt\":\"State of Crypto\",\"asset\":{\"_ref\":\"image-9ba15cef2d565e6a18c3f16d25f490235c80955f-1200x630-png\",\"_type\":\"reference\"}},\"_key\":\"ee77b26f8107\"}],\"_type\":\"newsletter\",\"meta\":{\"description\":\"Examining the intersection of cryptocurrency and government.\",\"title\":\"State of Crypto\"},\"_updatedAt\":\"2025-03-10T19:26:28Z\",\"date\":{\"updateDate\":\"2025-03-10T19:26:27.019Z\",\"publishedAt\":\"2024-10-04T13:57:47.935Z\",\"displayDate\":\"2024-09-03T13:00:00.000Z\",\"createDate\":\"2024-10-04T13:37:17.870Z\"},\"title\":\"State of Crypto\",\"slug\":{\"current\":\"state-of-crypto\",\"_type\":\"slug\"},\"_rev\":\"PvgUwUCrEtdwpmV7mWSUIR\",\"pathname\":\"/newsletters/state-of-crypto\",\"tags\":[{\"_ref\":\"FMjupGGFU7Vycr8ZFz5xhj\",\"_type\":\"reference\",\"_key\":\"95d147a42b0a\"}]}],\"isMobile\":false}]]\n19:I[86376,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b423"])
    </script>
    <script>
        self.__next_f.push([1,"1ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"PodcastsModule\"]\n14:[[\"$\",\"$L16\",null,{\"moduleIds\":[\"app/components/base/home/podcasts-module/index.tsx -\u003e ./module\"]}],[\"$\",\"$L19\",null,{\"podcastWidgetEpisodes\":[{\"slug\":{\"current\":\"consensus-hong-kong-a-gateway-to-asia-s-emerging-trends\",\"_type\":\"slug\"},\"pathname\":\"/podcasts/markets-daily/consensus-hong-kong-a-gateway-to-asia-s-emerging-trends\",\"title\":\"Consensus Hong Kong: A Gateway to Asia's Emerging Trends\",\"shortDescription\":\"The latest price moves and insights with Jennifer Sanasie and Consensus Hong Kong chairman Michael Lau.\",\"meta\":{\"title\":\"Consensus Hong Kong: A Gateway to Asia's Emerging Trends\",\"description\":\"The latest price moves and insights with Jennifer Sanasie and Consensus Hong Kong chairman Michael Lau.\"},\"art91Guid\":\"e05bbfac-7bd7-476a-a0ad-2eea41553323/4b99cb1c-1985-40a8-961c-fe7aaa775ff2\",\"date\":{\"displayDate\":\"2025-01-13T17:44:00.032Z\"},\"_id\":\"402a84a1-9b93-438a-9958-20ad354a7f07\",\"subheadline\":\"The latest price moves and insights with Jennifer Sanasie and Consensus Hong Kong chairman Michael Lau.\",\"thumbnails\":[{\"thumbFormat\":\"Basic\",\"image\":{\"alt\":\"Consensus Hong Kong: A Gateway to Asia's Emerging Trends\",\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/52f93c3100a6c6194b3afeccd536fe1b3cc329f9-3105x3105.png?auto=format\"}}}],\"serie\":{\"title\":\"Markets Daily Crypto Roundup\",\"pathname\":\"/podcasts/markets-daily\",\"platforms\":[{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/e1db402cdb2af7b3d2dd6c66047e7b1f0d88ff7a-24x24.svg?auto=format\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=castbox\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/18db0f315956f23ec81d4c08932994584c49b535-24x24.svg?auto=format\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=google_podcasts\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/a4636af1d0075fe11da69ac54e71161daf1aa3e7-24x24.svg?auto=format\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=itunes\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/2e9fd85a44b19ea513b09fcbd87de46ba9376d6a-24x24.svg?auto=format\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=pocket_casts\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/faa7f70762ec242837dc43bc7f7820f0a6a8fa2e-24x24.svg?auto=format\"}}},\"platformUrl\":\"https://rss.art19.com/markets-daily\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/477e27f4df4e4647ab22163731550b681e4cee7f-24x24.svg?auto=format\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=radio_public\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/ce9bf982682015b0c620743dec694de2ad133168-24x24.svg?auto=format\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=spotify\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/73c7a6f6b32d92bc4139636098ca0c7da6611da9-24x24.svg?auto=format\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=stitcher\"}],\"thumbnails\":[{\"thumbFormat\":\"Basic\",\"image\":{\"alt\":\"Markets Daily Crypto Roundup\",\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/dcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png?auto=format\"}}},{\"thumbFormat\":null,\"image\":null}]}}],\"featuredSeries\":[{\"title\":\"Markets Daily Crypto Roundup\",\"meta\":{\"title\":\"Markets Daily Crypto Roundup\",\"description\":"])
    </script>
    <script>
        self.__next_f.push([1,"\"Tune in as CoinDesk runs down daily action in bitcoin markets and some of the most important recent industry development.\"},\"platforms\":[{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/e1db402cdb2af7b3d2dd6c66047e7b1f0d88ff7a-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=castbox\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/18db0f315956f23ec81d4c08932994584c49b535-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=google_podcasts\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/a4636af1d0075fe11da69ac54e71161daf1aa3e7-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=itunes\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/2e9fd85a44b19ea513b09fcbd87de46ba9376d6a-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=pocket_casts\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/faa7f70762ec242837dc43bc7f7820f0a6a8fa2e-24x24.svg\"}}},\"platformUrl\":\"https://rss.art19.com/markets-daily\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/477e27f4df4e4647ab22163731550b681e4cee7f-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=radio_public\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/ce9bf982682015b0c620743dec694de2ad133168-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=spotify\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/73c7a6f6b32d92bc4139636098ca0c7da6611da9-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/MarketsDaily?platform=stitcher\"}],\"thumbnails\":[{\"thumbFormat\":\"Basic\",\"image\":{\"alt\":\"Markets Daily Crypto Roundup\",\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/dcb53cd25cdc93d87970998094977a84be89acb8-1024x768.png?auto=format\"}}},{\"thumbFormat\":null,\"image\":null}],\"date\":null,\"subheadline\":\"Tune in as CoinDesk runs down daily action in bitcoin markets and some of the most important recent industry development. \",\"authors\":[{\"slug\":{\"current\":\"coindesk\",\"_type\":\"slug\"},\"byline\":\"CoinDesk\",\"profilePicture\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/aa3baf920cae84f2151ee7df062b7a6a395c269c-800x800.png?auto=format\"}}}],\"_id\":\"Me0TMORO0XPkABUfcgORQK\",\"slug\":{\"current\":\"markets-daily\",\"_type\":\"slug\"},\"pathname\":\"/podcasts/markets-daily\"},{\"_id\":\"MDAkE3j8XV6MRQCLpbZaaT\",\"subheadline\":\"Generation Crypto is a weekly show focused on how brands and marketers are exploring and building in the Web3 ecosystem with hosts Avery Akkineni of Vayner3 and Head of Coindesk Studios, Sam Ewen. They will dive into how Fortune 500 brands and new start-ups alike are coming to the blockchain and utilizing new technologies. \",\"meta\":{\"title\":\"Gen C\",\"description\":\"Generation Crypto is a weekly show focused on how brands and marketers are exploring and building in the Web3 ecosystem with hosts Avery Akkineni of Vayner 3 and Head of Coindesk Studios, Sam Ewen. They will dive into how Fortune 500 brands and new start-ups alike are coming to the blockchain and utilizing new technologies.\"},\"platforms\":[{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/e1db402cdb2af7b3d2dd6c66047e7b1f0d88ff7a-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/SMCuIqwW?id=SMCuIqwW\u0026platform=castbox\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/18db0f315956f23ec81d4c08932994584c49b535-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/SMCuIqwW?id=SMCuIqwW\u0026platform=google_podcasts\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/a4636af1d0075fe11da69ac54e71161daf1aa3e7-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/SMCuIqwW?id=SMCuIqwW\u0026platform=itunes\"},{\"platfor"])
    </script>
    <script>
        self.__next_f.push([1,"m\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/2e9fd85a44b19ea513b09fcbd87de46ba9376d6a-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/SMCuIqwW?id=SMCuIqwW\u0026platform=pocket_casts\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/faa7f70762ec242837dc43bc7f7820f0a6a8fa2e-24x24.svg\"}}},\"platformUrl\":\"https://rss.art19.com/gen-c\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/477e27f4df4e4647ab22163731550b681e4cee7f-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/SMCuIqwW?id=SMCuIqwW\u0026platform=radio_public\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/ce9bf982682015b0c620743dec694de2ad133168-24x24.svg\"}}},\"platformUrl\":\"https://link.chtbl.com/SMCuIqwW?id=SMCuIqwW\u0026platform=spotify\"}],\"date\":null,\"slug\":{\"current\":\"generation-c\",\"_type\":\"slug\"},\"pathname\":\"/podcasts/generation-c\",\"title\":\"Gen C\",\"thumbnails\":[{\"thumbFormat\":\"Basic\",\"image\":{\"alt\":\"Gen C\",\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/88e2f948bde89ce417e72733e94fd83a631083b0-1024x768.png?auto=format\"}}},{\"thumbFormat\":null,\"image\":null}],\"authors\":[{\"slug\":{\"current\":\"sam-ewen\",\"_type\":\"slug\"},\"byline\":\"Sam Ewen\",\"profilePicture\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/68bea8baa0d0adb5a1b37ee073551e51829f2516-225x225.jpg?auto=format\"}}},{\"slug\":{\"current\":\"avery-akkineni\",\"_type\":\"slug\"},\"byline\":\" Avery  Akkineni\",\"profilePicture\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/9d10e43f4949943c76c87ba6047d8c5e14db0866-2487x2487.jpg?auto=format\"}}}]},{\"_id\":\"OcNal5eQKI3MJ90HclOOHC\",\"slug\":{\"current\":\"coindesks-money-reimagined\",\"_type\":\"slug\"},\"title\":\"CoinDesk’s Money Reimagined\",\"subheadline\":\"Join CoinDesk’s Michael Casey and Sheila Warren CEO of the Crypto Council for Innovation as they explore the connections between finance, human culture and our increasingly digital lives.\",\"platforms\":[{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/e1db402cdb2af7b3d2dd6c66047e7b1f0d88ff7a-24x24.svg\"}}},\"platformUrl\":\"https://castbox.fm/channel/id3348246\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/18db0f315956f23ec81d4c08932994584c49b535-24x24.svg\"}}},\"platformUrl\":\"https://podcasts.google.com/feed/aHR0cHM6Ly9yc3MuYXJ0MTkuY29tL2NvaW5kZXNrLXJlcG9ydHM\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/da1dcebe0244993153e9ccdd53b1b207b81c7ce8-24x24.svg\"}}},\"platformUrl\":\"https://www.iheart.com/podcast/268-coindesk-reports-71888013/\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/a4636af1d0075fe11da69ac54e71161daf1aa3e7-24x24.svg\"}}},\"platformUrl\":\"https://podcasts.apple.com/us/podcast/coindesks-money-reimagined/id1543450828\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/2e9fd85a44b19ea513b09fcbd87de46ba9376d6a-24x24.svg\"}}},\"platformUrl\":\"https://pca.st/sgcs8s57\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/faa7f70762ec242837dc43bc7f7820f0a6a8fa2e-24x24.svg\"}}},\"platformUrl\":\"https://rss.art19.com/coindesks-money-reimagined\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/477e27f4df4e4647ab22163731550b681e4cee7f-24x24.svg\"}}},\"platformUrl\":\"https://radiopublic.com/coindesk-reports-Wayv7X\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/ce9bf982682015b0c620743dec694de2ad133168-24x24.svg\"}}},\"platformUrl\":\"https://open.spotify.com/show/12cUPt4IKzuuaSIkY79NUc\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/73c7a6f6b32d92bc4139636098ca0c7da6611da9-24x24.svg\"}}},\"platformUrl\":\"https://www.stitcher.com/podcast/coindesk-reports\"}],\"thumbnails\":[{\"thumbFormat\":\"Basic\",\"image\":{\"alt\":\"CoinDesk’s Money Reim"])
    </script>
    <script>
        self.__next_f.push([1,"agined\",\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/ae506683922442e7ae37aaf09cd67bb45fc0effa-4000x3000.png?auto=format\"}}}],\"authors\":[{\"slug\":{\"_type\":\"slug\",\"current\":\"sheila-warren\"},\"byline\":\"Sheila Warren\",\"profilePicture\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/660608a684ab650e6df8a489e038a7030252c72b-567x567.png?auto=format\"}}},{\"slug\":{\"current\":\"michael-j-casey\",\"_type\":\"slug\"},\"byline\":\"Michael J. Casey\",\"profilePicture\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/1746aa162a07ae23999694bc43295237ca12ff2f-1424x1424.png?auto=format\"}}}],\"date\":null,\"pathname\":\"/podcasts/coindesks-money-reimagined\",\"meta\":{\"title\":\"CoinDesk’s Money Reimagined\",\"description\":\"Money Reimagined podcast explores the connections between finance, human culture and our digital lives with Michael Casey and Sheila Warren.\"}},{\"pathname\":\"/podcasts/unchained\",\"platforms\":[],\"thumbnails\":[{\"thumbFormat\":\"Basic\",\"image\":{\"alt\":\"Unchained\",\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/b270ce5e15a9de3073a17bad2f568ceba6659a98-749x749.png?auto=format\"}}}],\"authors\":[{\"slug\":{\"current\":\"laura-shin\",\"_type\":\"slug\"},\"byline\":\"Laura Shin\",\"profilePicture\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/dad44332c64ab9b2bb9bfef6f7c6e0f6440c4916-1067x1600.jpg?auto=format\"}}}],\"date\":null,\"_id\":\"1iDendM1XsMqbzYcfvSPJw\",\"slug\":{\"current\":\"unchained\",\"_type\":\"slug\"},\"title\":\"Unchained\",\"subheadline\":\"Unchained, your no hype resource for all things crypto by former Forbes senior editor Laura Shin, author of The Cryptopians.\",\"meta\":{\"title\":\"Unchained\",\"description\":\"Unchained, your no hype resource for all things crypto by former Forbes senior editor Laura Shin, author of The Cryptopians.\"}},{\"subheadline\":\"Join Bram Cohen as he and a growing cast of subject matter experts explore the hardest problems still unsolved in our modern world.\",\"meta\":{\"title\":\"Hard Problems with Bram Cohen\",\"description\":\"Join Bram Cohen as he and a growing cast of subject matter experts explore the hardest problems still unsolved in our modern world.\"},\"platforms\":[{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/e1db402cdb2af7b3d2dd6c66047e7b1f0d88ff7a-24x24.svg\"}}},\"platformUrl\":\"https://castbox.fm/channel/id4146407\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/18db0f315956f23ec81d4c08932994584c49b535-24x24.svg\"}}},\"platformUrl\":\"https://podcasts.google.com/feed/aHR0cHM6Ly9yc3MuYXJ0MTkuY29tL2hhcmQtcHJvYmxlbXMtd2l0aC1icmFtLWNvaGVu\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/da1dcebe0244993153e9ccdd53b1b207b81c7ce8-24x24.svg\"}}},\"platformUrl\":\"https://iheart.com/podcast/82685095/\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/a4636af1d0075fe11da69ac54e71161daf1aa3e7-24x24.svg\"}}},\"platformUrl\":\"https://podcasts.apple.com/us/podcast/hard-problems-with-bram-cohen/id1568128794\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/2e9fd85a44b19ea513b09fcbd87de46ba9376d6a-24x24.svg\"}}},\"platformUrl\":\"https://pca.st/w934e9ew\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/faa7f70762ec242837dc43bc7f7820f0a6a8fa2e-24x24.svg\"}}},\"platformUrl\":\"https://rss.art19.com/hard-problems-with-bram-cohen\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/477e27f4df4e4647ab22163731550b681e4cee7f-24x24.svg\"}}},\"platformUrl\":\"https://radiopublic.com/hard-problems-with-bram-cohen-Wkv9eX\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/ce9bf982682015b0c620743dec694de2ad133168-24x24.svg\"}}},\"platformUrl\":\"https://open.spotify.com/show/0a30qw3qfoOWHMYzlCQJMO\"},{\"platform\":{\"platformLogo\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/73c7a6f6b32d92bc4139636098ca0c7da6611da9-24x24.svg\"}}},\"platformUrl\":\"http"])
    </script>
    <script>
        self.__next_f.push([1,"s://www.stitcher.com/podcast/coindesk/hard-problems-with-bram-cohen\"}],\"thumbnails\":[{\"thumbFormat\":\"Basic\",\"image\":{\"alt\":\"Hard Problems with Bram Cohen\",\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/db591fd714577f3c712de7fbca205eced8b63d41-4000x3000.png?auto=format\"}}}],\"date\":null,\"_id\":\"EZdV0RBhu2PLYiLLY6VL7v\",\"slug\":{\"current\":\"hard-problems-bram-cohen\",\"_type\":\"slug\"},\"pathname\":\"/podcasts/hard-problems-bram-cohen\",\"authors\":[{\"slug\":{\"current\":\"adam-b-levine\",\"_type\":\"slug\"},\"byline\":\"Adam B. Levine\",\"profilePicture\":{\"asset\":{\"url\":\"https://cdn.sanity.io/images/s3y3vcno/production/13eb37ddf14ec4ef893dac63644917df67b24db6-1279x1443.jpg?auto=format\"}}}],\"title\":\"Hard Problems with Bram Cohen\"}]}]]\na:[[\"$\",\"meta\",\"0\",{\"charSet\":\"utf-8\"}],[\"$\",\"title\",\"1\",{\"children\":\"CoinDesk: Bitcoin, Ethereum, Crypto News and Price Data\"}],[\"$\",\"meta\",\"2\",{\"name\":\"description\",\"content\":\"Leader in cryptocurrency, Bitcoin, Ethereum, XRP, blockchain, DeFi, digital finance and Web 3.0 news with analysis, video and live price updates.\"}],[\"$\",\"link\",\"3\",{\"rel\":\"manifest\",\"href\":\"/manifest.webmanifest\",\"crossOrigin\":\"$undefined\"}],[\"$\",\"meta\",\"4\",{\"name\":\"robots\",\"content\":\"index, follow, nocache\"}],[\"$\",\"meta\",\"5\",{\"name\":\"googlebot\",\"content\":\"index, follow, max-video-preview:-1, max-image-preview:large, max-snippet:-1\"}],[\"$\",\"meta\",\"6\",{\"name\":\"page_url\",\"content\":\"https://www.coindesk.com\"}],[\"$\",\"meta\",\"7\",{\"name\":\"media_type\",\"content\":\"html\"}],[\"$\",\"meta\",\"8\",{\"name\":\"page_category\",\"content\":\"homepage\"}],[\"$\",\"meta\",\"9\",{\"name\":\"content_language\",\"content\":\"en\"}],[\"$\",\"link\",\"10\",{\"rel\":\"canonical\",\"href\":\"https://www.coindesk.com\"}],[\"$\",\"link\",\"11\",{\"rel\":\"alternate\",\"hrefLang\":\"en\",\"href\":\"https://www.coindesk.com\"}],[\"$\",\"link\",\"12\",{\"rel\":\"alternate\",\"hrefLang\":\"es\",\"href\":\"https://www.coindesk.com/es/\"}],[\"$\",\"link\",\"13\",{\"rel\":\"alternate\",\"hrefLang\":\"tl\",\"href\":\"https://www.coindesk.com/fil/\"}],[\"$\",\"link\",\"14\",{\"rel\":\"alternate\",\"hrefLang\":\"uk\",\"href\":\"https://www.coindesk.com/uk/\"}],[\"$\",\"link\",\"15\",{\"rel\":\"alternate\",\"hrefLang\":\"ru\",\"href\":\"https://www.coindesk.com/ru/\"}],[\"$\",\"link\",\"16\",{\"rel\":\"alternate\",\"hrefLang\":\"it\",\"href\":\"https://www.coindesk.com/it/\"}],[\"$\",\"link\",\"17\",{\"rel\":\"alternate\",\"hrefLang\":\"fr\",\"href\":\"https://www.coindesk.com/fr/\"}],[\"$\",\"link\",\"18\",{\"rel\":\"alternate\",\"hrefLang\":\"pt-BR\",\"href\":\"https://www.coindesk.com/pt-br/\"}],[\"$\",\"meta\",\"19\",{\"property\":\"fb:app_id\",\"content\":\"243125406422041\"}],[\"$\",\"meta\",\"20\",{\"property\":\"og:title\",\"content\":\"CoinDesk: Bitcoin, Ethereum, Crypto News and Price Data\"}],[\"$\",\"meta\",\"21\",{\"property\":\"og:description\",\"content\":\"Leader in cryptocurrency, Bitcoin, Ethereum, XRP, blockchain, DeFi, digital finance and Web 3.0 news with analysis, video and live price updates.\"}],[\"$\",\"meta\",\"22\",{\"property\":\"og:url\",\"content\":\"https://www.coindesk.com\"}],[\"$\",\"meta\",\"23\",{\"property\":\"og:locale\",\"content\":\"en\"}],[\"$\",\"meta\",\"24\",{\"property\":\"og:image\",\"content\":\"https://cdn.sanity.io/images/s3y3vcno/production/4fc82af41ef1603634aef19e553d6c1d453fca6b-2400x1260.png\"}],[\"$\",\"meta\",\"25\",{\"property\":\"og:image:width\",\"content\":\"1200\"}],[\"$\",\"meta\",\"26\",{\"property\":\"og:image:height\",\"content\":\"628\"}],[\"$\",\"meta\",\"27\",{\"property\":\"og:image:alt\",\"content\":\"CoinDesk\"}],[\"$\",\"meta\",\"28\",{\"name\":\"twitter:card\",\"content\":\"summary_large_image\"}],[\"$\",\"meta\",\"29\",{\"name\":\"twitter:site\",\"content\":\"@coindesk\"}],[\"$\",\"meta\",\"30\",{\"name\":\"twitter:creator\",\"content\":\"@coindesk\"}],[\"$\",\"meta\",\"31\",{\"name\":\"twitter:creator:id\",\"content\":\"1418565129\"}],[\"$\",\"meta\",\"32\",{\"name\":\"twitter:title\",\"content\":\"CoinDesk: Bitcoin, Ethereum, Crypto News and Price Data\"}],[\"$\",\"meta\",\"33\",{\"name\":\"twitter:description\",\"content\":\"Leader in cryptocurrency, Bitcoin, Ethereum, XRP, blockchain, DeFi, digital finance and Web 3.0 news with analysis, video and live price updates.\"}],[\"$\",\"meta\",\"34\",{\"name\":\"twitter:image\",\"content\":\"https://cdn.sanity.io/images/s3y3vcno/production/4fc82af41ef1603634aef19e553d6c1d453fca6b-2400x1260.png\"}],[\"$\",\"meta\",\"35\",{\"name\":\"twitter:image:width\",\"cont"])
    </script>
    <script>
        self.__next_f.push([1,"ent\":\"1200\"}],[\"$\",\"meta\",\"36\",{\"name\":\"twitter:image:height\",\"content\":\"628\"}],[\"$\",\"meta\",\"37\",{\"name\":\"twitter:image:alt\",\"content\":\"CoinDesk\"}]]\n8:null\n1a:\"$Sreact.suspense\"\n1b:I[81201,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"LeaderboardModule\"]\n1f:I[48151,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"default\"]\n1c:T40e,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAIAAADwazoUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACqklEQVR4nAGfAmD9AE9CMVxTO2NcQGZdQmdgRGNbQlBFMz0yJVBRNnyIZ5CYiJCTjpOUk6ilp9DNztbQ1KObonZwdmJhYVpcWABTRTRfVjxlXkJnX0RpYUZlWUBUQzBGNCZdTj6WkIG1ta2kpqGUlJGcmZi3s7O/uruhm52EgH92dW5wcGMAVUg2YFc9ZV9CZ2BEZV1EW004SjcmPiwgUkA2kYN9zsrH0M/Ns7KvmJeTlJGOlpSRkI2Jh4N8e3hrdHFhAFZKNl9XPGVfQWReQlVOOUA1KDUoHjElHUE1LnxxbsnDxOXh5NLQ0KKhnICAeX19dYGAd397cXRvYm1nWABaTTheVztjXz9gXD9HQi8tJR0oHxkqIRs6Mi1zamq8tbnd193SzdGgnpp3eG10dWl/fXJ9eHBybGJsYlYAcFg+YVk6YF49XVs9Qz4sKSEaJR0XKSAaOjIucGdosqmv1MzTzMfLnJqVcXNkcXJkhoV+jomIiIB9gXZuAI1qRmdcOl1cOltaO0A7KSceGCQbFyYfGTQsKWVbXaWcocnByMjCx5uZk21wX29zZJKSj6ejqKmipKignwCWb0VnXDhaWzhZWTlCPissJR0nIB0qIx80LSpdVFWYj5W5sbe4srWRkYhnbVltc2OXmJiwrLO0rrK6tLgAjWc8YFgzVFYzVlg1TEswQT4tPzoyRT87T0lGamJijYSIm5WXk5CNen5uYmtTbXRilJWVpaGon5mcnJaaAIBcNV1VM1laOGBhQGNjRWRiSmhkVnNsaHt0coV9fo6Gh4+KiYiFfoGCcnuAbIWHeqCdnqWepI2HiHl2dQB9WzxpXkRwbVR/emSJgnCOhneUioKckJCelJSilpimnJ6tpaWvpqSxqKKwqaKyq6e8tLa8srefmJh8fHYUwCY6bgScZgAAAABJRU5ErkJggg==1d:T40e,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAIAAADwazoUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACqklEQVR4nAGfAmD9AE9CMVxTO2NcQGZdQmdgRGNbQlBFMz0yJVBRNnyIZ5CYiJCTjpOUk6ilp9DNztbQ1KObonZwdmJhYVpcWABTRTRfVjxlXkJnX0RpYUZlWUBUQzBGNCZdTj6WkIG1ta2kpqGUlJGcmZi3s7O/uruhm52EgH92dW5wcGMAVUg2YFc9ZV9CZ2BEZV1EW004SjcmPiwgUkA2kYN9zsrH0M/Ns7KvmJeTlJGOlpSRkI2Jh4N8e3hrdHFhAFZKNl9XPGVfQWReQlVOOUA1KDUoHjElHUE1LnxxbsnDxOXh5NLQ0KKhnICAeX19dYGAd397cXRvYm1nWABaTTheVztjXz9gXD9HQi8tJR0oHxkqIRs6Mi1zamq8tbnd193SzdGgnpp3eG10dWl/fXJ9eHBybGJsYlYAcFg+YVk6YF49XVs9Qz4sKSEaJR0XKSAaOjIucGdosqmv1MzTzMfLnJqVcXNkcXJkhoV+jomIiIB9gXZuAI1qRmdcOl1cOltaO0A7KSceGCQbFyYfGTQsKWVbXaWcocnByMjCx5uZk21wX29zZJKSj6ejqKmipKignwCWb0VnXDhaWzhZWTlCPissJR0nIB0qIx80LSpdVFWYj5W5sbe4srWRkYhnbVltc2OXmJiwrLO0rrK6tLgAjWc8YFgzVFYzVlg1TEswQT4tPzoyRT87T0lGamJijYSIm5WXk5CNen5uYmtTbXRilJWVpaGon5mcnJaaAIBcNV1VM1laOGBhQGNjRWRiSmhkVnNsaHt0coV9fo6Gh4+KiYiFfoGCcnuAbIWHeqCdnqWepI2HiHl2dQB9WzxpXkRwbVR/emSJgnCOhneUioKckJCelJSilpimnJ6tpaWvpqSxqKKwqaKyq6e8tLa8srefmJh8fHYUwCY6bgScZgAAAABJRU5ErkJggg==1e:[[\"jCxj2jdm\",\"uniswap-sponsor-0325,cdtv,bo-hines,the-white-house\"],[\"6uTfKQrT\",\"bitcoinseason2-tv\"],[\"0MoArtmA\",\"theminingpod_tv,theminingpod-tv\"],[\"evYBG9Sx\",\"markets-daily,uniswap-sponsor-0325,markets_daily_tv,markets-daily,markets-daily-tv,cdtv\"],[\"cv2484ZP\",\"bitcoinseason2-tv\"],[\"EXnq3NG4\",\"cdtv\"],[\"3YlFRvxM\",\"theminingpod_tv,theminingpod-tv\"],[\"UCaRPeN7\",\"markets-daily,uniswap-sponsor-0325,markets_daily_tv,markets-daily,markets-daily-tv,cdtv\"],[\"EMfNqkuQ\",\"bitcoinseason2-tv\"],[\"h8Ix77X2\",\"markets-daily,uniswap-sponsor-0325,markets_daily_tv,ma"])
    </script>
    <script>
        self.__next_f.push([1,"rkets-daily,markets-daily-tv,cdtv\"]]\nf:[\"$\",\"$1a\",null,{\"fallback\":[\"$\",\"div\",null,{\"className\":\"lg:flex gap-2\",\"children\":[[\"$\",\"div\",null,{\"className\":\"hidden xl:block w-full\",\"children\":[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"max-w-md p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow animate-pulse dark:divide-gray-700 md:p-6 dark:border-gray-700\",\"children\":[[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"])
    </script>
    <script>
        self.__next_f.push([1,"\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-between pt-4\",\"children\":[[\"$\",\"div\",null,{\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700\"}]]}],[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12\"}]]}]]}]}],[\"$\",\"div\",null,{\"className\":\"w-full\",\"children\":[[\"$\",\"div\",null,{\"className\":\"mb-8\",\"children\":[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"mb-4 space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center\",\"children\":[[\"$\",\"div\",null,{\"className\":\"w-full\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[480px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[440px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-center w-full h-48 bg-gray-300 rounded sm:w-96 dark:bg-gray-700\",\"children\":[\"$\",\"svg\",null,{\"className\":\"w-10 h-10 text-gray-200 dark:text-gray-600\",\"aria-hidden\":\"true\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"fill\":\"currentColor\",\"viewBox\":\"0 0 20 18\",\"children\":[\"$\",\"path\",null,{\"d\":\"M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z\"}]}]}]]}]}],[\"$\",\"div\",null,{\"className\":\"flex gap-8 w-full\",\"children\":[[\"$\",\"div\",null,{\"className\":\" w-full xl:w-1/2 hidden xl:block\",\"children\":[[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"mb-4 space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center\",\"children\":[[\"$\",\"div\",null,{\"className\":\"w-full\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[480px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[440px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-center w-full h-48 bg-gray-300 rounded sm:w-96 dark:bg-gray-700\",\"children\":[\"$\",\"svg\",null,{\"className\":\"w-10 h-10 text-gray-200 dark:text-gray-600\",\"aria-hidden\":\"true\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"fill\":\"currentColor\",\"viewBox\":\"0 0 20 18\",\"children\":[\"$\",\"path\",null,{\"d\":\"M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 "])
    </script>
    <script>
        self.__next_f.push([1,"4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z\"}]}]}]]}],[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"mb-4 space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center\",\"children\":[[\"$\",\"div\",null,{\"className\":\"w-full\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[480px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[440px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-center w-full h-48 bg-gray-300 rounded sm:w-96 dark:bg-gray-700\",\"children\":[\"$\",\"svg\",null,{\"className\":\"w-10 h-10 text-gray-200 dark:text-gray-600\",\"aria-hidden\":\"true\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"fill\":\"currentColor\",\"viewBox\":\"0 0 20 18\",\"children\":[\"$\",\"path\",null,{\"d\":\"M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z\"}]}]}]]}],[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center\",\"children\":[[\"$\",\"div\",null,{\"className\":\"w-full\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[480px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[440px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}],[\"$\",\"div\",null,{\"className\":\"flex items-center justify-center w-full h-48 bg-gray-300 rounded sm:w-96 dark:bg-gray-700\",\"children\":[\"$\",\"svg\",null,{\"className\":\"w-10 h-10 text-gray-200 dark:text-gray-600\",\"aria-hidden\":\"true\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"fill\":\"currentColor\",\"viewBox\":\"0 0 20 18\",\"children\":[\"$\",\"path\",null,{\"d\":\"M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z\"}]}]}]]}]]}],[\"$\",\"div\",null,{\"className\":\"w-full xl:w-1/2 xl:block\",\"children\":[[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"max-w-full animate-pulse mb-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[330px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[300px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}],[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"max-w-full animate-pulse mb-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 b"])
    </script>
    <script>
        self.__next_f.push([1,"g-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[330px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[300px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}],[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"max-w-full animate-pulse mb-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[330px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[300px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}],[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"max-w-full animate-pulse mb-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[330px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[300px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}],[\"$\",\"div\",null,{\"role\":\"status\",\"className\":\"max-w-full animate-pulse mb-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[330px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[300px] mb-2.5\"}],[\"$\",\"div\",null,{\"className\":\"h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[360px]\"}]]}]]}]]}]]}]]}],\"children\":[[\"$\",\"$L16\",null,{\"moduleIds\":[\"app/components/base/home/leaderboard-module/index.tsx -\u003e ./module\"]}],[[\"$\",\"$L1b\",null,{\"leaderbordArticle\":{\"slug\":\"crypto-will-expand-dominance-of-u-s-dollar-trump-says\",\"__image\":{\"source\":{\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHAwb/xAAhEAACAQMEAwEAAAAAAAAAAAABAgMABBEFBhIxFBUhIv/EABUBAQEAAAAAAAAAAAAAAAAAAAME/8QAGhEBAAMBAQEAAAAAAAAAAAAAAQACAxIxEf/aAAwDAQACEQMRAD8AiO3/AEUWi2sl7BHNcfouCfvzoV1bx7Y1DU4wLC2sYUgGUbt2NR+KV1jwrECtXu7iSTm8rs2MZJoNMe62Pvsoz0rUBPIw3jFZw69Olhw8cYxx6opK7EtknJopqnIEnZ//2Q==\",\"alt\":\"U.S. President Donald Trump speaks at the Digital Asset Summit in New York City. (Nikhilesh De)\",\"priority\":true,\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/1a81a5661312f11618bedd60f17f6ca7a2879dd1-1920x1080.jpg?auto=format\",\"width\":416}},\"__featuredImages\":[{\"format\":\"Basic\",\"metadata\":{\"_ref\":\"image-1a81a5661312f11618bedd60f17f6ca7a2879dd1-1920x1080-jpg\",\"hotspot\":null,\"crop\":null},\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/1a81a5661312f11618bedd60f17f6ca7a2879dd1-1920x1080.jpg?auto=format\",\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHAwb/xAAhEAACAQMEAwEAAAAAAAAAAAABAgMABBEFBhIxFBUhIv/EABUBAQEAAAAAAAAAAAAAAAAAAAME/8QAGhEBAAMBAQEAAAAAA"])
    </script>
    <script>
        self.__next_f.push([1,"AAAAAAAAQACAxIxEf/aAAwDAQACEQMRAD8AiO3/AEUWi2sl7BHNcfouCfvzoV1bx7Y1DU4wLC2sYUgGUbt2NR+KV1jwrECtXu7iSTm8rs2MZJoNMe62Pvsoz0rUBPIw3jFZw69Olhw8cYxx6opK7EtknJopqnIEnZ//2Q==\",\"alt\":\"U.S. President Donald Trump speaks at the Digital Asset Summit in New York City. (Nikhilesh De)\",\"priority\":true}}],\"sectionDetails\":[{\"name\":\"Policy\",\"sectionSlug\":\"policy\"}],\"title\":\"Crypto Will 'Expand Dominance of U.S. Dollar,' Trump Says \",\"pathname\":\"/policy/2025/03/20/crypto-will-expand-dominance-of-u-s-dollar-trump-says\",\"articleDates\":{\"createDate\":\"2025-03-20T14:22:24Z\",\"publishedAt\":\"2025-03-20T15:15:32.762Z\",\"updateDate\":\"2025-03-20T15:28:03.032Z\",\"displayDate\":\"2025-03-20T15:15:32.762Z\"},\"_type\":\"article\",\"meta\":{\"title\":\"Crypto Will 'Expand Dominance of U.S. Dollar,' Trump Says \",\"description\":\"The U.S. president did not announce any new executive actions on Thursday.\"},\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Nikhilesh De\",\"authorSlug\":\"nikhilesh-de\"},{\"name\":null,\"byline\":\"Helene Braun\",\"authorSlug\":\"helene-braun\"}],\"video\":null,\"description\":\"The U.S. president did not announce any new executive actions on Thursday.\",\"tags\":[{\"slug\":\"policy\",\"title\":\"Policy\"},{\"slug\":\"donald-trump\",\"title\":\"Donald Trump\"},{\"slug\":\"top-stories\",\"title\":\"Top Stories\"}]},\"sponsoredContent\":{\"featuredImages\":[{\"format\":\"Basic\",\"imageUrl\":\"https://cdn.sanity.io/images/s3y3vcno/production/e8d2e6943998fde1069c586d1ad7ab45db600465-1280x960.jpg\",\"imageAlt\":\" \"}],\"videoId\":null,\"videoPlataform\":null,\"isSponsored\":true,\"title\":\"PlatON: Paving the Way to Become the Visa of Web 3.0\",\"articleDates\":{\"createDate\":\"2025-02-27T21:54:45.038Z\",\"publishedAt\":\"2025-02-27T21:56:43.498Z\",\"updateDate\":\"2025-02-27T21:56:43.498Z\",\"displayDate\":\"2025-02-27T21:56:43.498Z\"},\"authorDetails\":[{\"name\":null,\"byline\":\"CoinDesk\",\"authorSlug\":\"coindesk\"}],\"imageAlt\":[\" \"],\"_type\":\"sponsored_content\",\"meta\":{\"title\":\"PlatON: Paving the Way to Become the Visa of Web 3.0\",\"description\":null},\"imageUrl\":[\"https://cdn.sanity.io/images/s3y3vcno/production/e8d2e6943998fde1069c586d1ad7ab45db600465-1280x960.jpg\"],\"videoData\":null,\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/e8d2e6943998fde1069c586d1ad7ab45db600465-1280x960.jpg?auto=format\",\"width\":1280,\"height\":960,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQGB//EACMQAAIBBAEDBQAAAAAAAAAAAAECAwAEBRIRBiFRIiMxQWH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAwb/xAAbEQACAwADAAAAAAAAAAAAAAAAAQIDERMhMf/aAAwDAQACEQMRAD8AyfGYV2yKWtx7Z2CsfnirK/wT9O3IXYPCyhhIPsGncb02LPCxX0km8kq7keKWyeRSS1eKUSPKVCAlvSqjwK3NdazUHblKXXguxiY87r3/AGip+Ujc8c0UpUluM//Z\",\"alt\":\"CoinDesk\"}},\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"alt\":\"CoinDesk\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/e8d2e6943998fde1069c586d1ad7ab45db600465-1280x960.jpg?auto=format\",\"width\":1280,\"height\":960,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQGB//EACMQAAIBBAEDBQAAAAAAAAAAAAECAwAEBRIRBiFRIiMxQWH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAwb/xAAbEQACAwADAAAAAAAAAAAAAAAAAQIDERMhMf/aAAwDAQACEQMRAD8AyfGYV2yKWtx7Z2CsfnirK/wT9O3IXYPCyhhIPsGncb02LPCxX0km8kq7keKWyeRSS1eKUSPKVCAlvSqjwK3NdazUHblKXXguxiY87r3/AGip+Ujc8c0UpUluM//Z\"}}],\"sectionDetails\":[{\"name\":\"Sponsored Content\",\"sectionSlug\":\"sponsored-content\"}],\"sponsor\":{\"title\":\"PlatON\",\"url\":\"https://www.platon.network/\"},\"pathname\":\"/sponsored-content/platon-paving-the-way-to-become-the-visa-of-web-3-0\",\"description\":null,\"slug\":\"platon-paving-the-way-to-become-the-visa-of-web-3-0\",\"storyType\":null},\"articles\":[{\"title\":\"Tether Ranks Among Top Buyers of U.S. Treasuries in 2024, Firm Says\",\"_type\":\"article\",\"storyType\":\"News\",\"authorDetails\":[{\"name\""])
    </script>
    <script>
        self.__next_f.push([1,":null,\"byline\":\"Krisztian Sandor\",\"authorSlug\":\"krisztian-sandor\"}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996.jpg?auto=format\",\"width\":152,\"height\":152,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABgAFB//EACIQAAEEAgIDAAMAAAAAAAAAAAIBAwQFABIGESEiUQeRwf/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFhEBAQEAAAAAAAAAAAAAAAAAABES/9oADAMBAAIRAxEAPwBJWnZwoSRKyNDp4op37FsfX3D97a0bdW7ZW9s9bNtHoQAXhF+dYBOwm2HMa85Mp1Sdh7H0XSL6/MLw29/x9yIyVdkmCifvKO4115VOV8d2rgbRXAQhXXLMngzaNcTrQTyiNf3LJoj/2Q==\",\"alt\":\"Treasury image via Shutterstock\"},\"metadata\":null},\"description\":\"The firm said it purchased a net $33.1 billion worth of U.S. Treasury securities last year,\",\"videoId\":null,\"articleDates\":{\"createDate\":\"2025-03-20T15:55:11Z\",\"publishedAt\":\"2025-03-20T18:03:59.679Z\",\"updateDate\":\"2025-03-20T18:07:30.187Z\",\"displayDate\":\"2025-03-20T18:03:59.679Z\"},\"slug\":\"tether-ranks-among-top-foreign-buyers-of-u-s-treasuries-in-2024-firm-says\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABgAFB//EACIQAAEEAgIDAAMAAAAAAAAAAAIBAwQFABIGESEiUQeRwf/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFhEBAQEAAAAAAAAAAAAAAAAAABES/9oADAMBAAIRAxEAPwBJWnZwoSRKyNDp4op37FsfX3D97a0bdW7ZW9s9bNtHoQAXhF+dYBOwm2HMa85Mp1Sdh7H0XSL6/MLw29/x9yIyVdkmCifvKO4115VOV8d2rgbRXAQhXXLMngzaNcTrQTyiNf3LJoj/2Q==\",\"alt\":\"Treasury image via Shutterstock\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996.jpg?auto=format\",\"width\":1000,\"height\":1000},\"metadata\":{\"_ref\":\"image-0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996-jpg\",\"hotspot\":null,\"crop\":null}}],\"pathname\":\"/business/2025/03/20/tether-ranks-among-top-foreign-buyers-of-u-s-treasuries-in-2024-firm-says\",\"tags\":[{\"slug\":\"stablecoins\",\"title\":\"Stablecoins\"},{\"slug\":\"tether\",\"title\":\"Tether\"},{\"slug\":\"usdt\",\"title\":\"USDT\"},{\"slug\":\"u-s-treasury\",\"title\":\"U.S. Treasury\"}],\"meta\":{\"title\":\"USDT Issuer Tether Ranks Among Top Foreign Buyers of U.S. Treasuries in 2024, Firm Says\",\"description\":\"The data underscores the Trump administration's argument for crypto and stablecoins being key for preserving the U.S. dollar's global dominance.\"},\"videoPlataform\":null,\"sectionDetails\":[{\"name\":\"Finance\",\"sectionSlug\":\"business\"}]},{\"videoId\":null,\"videoPlataform\":null,\"title\":\"Bitcoin Miners Feel Squeeze as Hashprice Erases Post-Election Gains\",\"authorDetails\":[{\"name\":null,\"byline\":\"Tom Carreras\",\"authorSlug\":\"tom-carreras\"},{\"name\":null,\"byline\":\"AI Boost\",\"authorSlug\":\"ai-boost\"}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/63cf712ed31623c54c8672ad792413a4ffc9eb09-1238x697.png?auto=format\",\"width\":152,\"height\":152,\"placeholder\":\"$1c\",\"alt\":\"bitcoin miner (Shutterstock)\"},\"metadata\":null},\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"$1d\",\"alt\":\"bitcoin miner (Shutterstock)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/63cf712ed31623c54c8672ad792413a4ffc9eb09-1238x697.png?auto=format\",\"width\":1000,\"height\":1000},\"metadata\":{\"_ref\":\"image-63cf712ed31623c54c8672ad792413a4ffc9eb09-1238x697-png\",\"hotspot\":{\"y\":0.4288826598579039,\"height\":0.3494414781989832,\"_type\":\"sanity.imageHotspot\",\"width\":0.24125107020547906,\"x\":0.40340057791095896},\"crop\":{\"_type\":\"sanity.imageCrop\",\"right\":0,\"top\":0,\"left\":0,\"bottom\":0}}}],\"sectionDetails\":[{\"name\":\"Markets\",\"sectionSlug\":\"markets\"}],\"slug\":\"bitcoin-miners-feel-squeeze-as-hashprice-erases-post-election-gains\",\"articleDates\":{\"createDate\":\"2025-03-20T17:52:16Z\",\"publishedAt\":\"2025-03-20T18:06:22.060Z\",\"updateDate\":\"2025-03-20T18:06:22.0"])
    </script>
    <script>
        self.__next_f.push([1,"60Z\",\"displayDate\":\"2025-03-20T18:06:20.958Z\"},\"_type\":\"article\",\"description\":\"Transaction fees made up just 1.3% of total block rewards in February, marking the lowest share since the last bear market bottom in 2022.\",\"tags\":[{\"slug\":\"bitcoin-mining\",\"title\":\"Bitcoin Mining\"},{\"slug\":\"hashrate\",\"title\":\"Hashrate\"}],\"storyType\":\"News\",\"pathname\":\"/markets/2025/03/20/bitcoin-miners-feel-squeeze-as-hashprice-erases-post-election-gains\",\"meta\":{\"title\":\"Bitcoin Miners Feel the Squeeze as Hashprice Erases Post-Election Gains\",\"description\":\"Transaction fees made up just 1.3% of total block rewards in February, marking their lowest share since the last bear market bottom in 2022.\"}},{\"pathname\":\"/markets/2025/03/20/biotech-s-atai-life-sciences-joins-roster-of-firms-with-bitcoin-treasury-strategies\",\"articleDates\":{\"createDate\":\"2025-03-20T16:57:00Z\",\"publishedAt\":\"2025-03-20T17:05:57.543Z\",\"updateDate\":\"2025-03-20T17:05:57.543Z\",\"displayDate\":\"2025-03-20T17:05:57.543Z\"},\"title\":\"Biotech's ATAI Life Sciences Joins Roster of Firms With Bitcoin Treasury Strategies\",\"_type\":\"article\",\"meta\":{\"title\":\"Biopharmaceutical Firm ATAI Life Sciences Joins Roster of Firms With BTC Treasury Strategies\",\"description\":\"Christian Angermayer, the firm’s chairman, stated that it will acquire $5 million in bitcoin.\"},\"storyType\":\"News\",\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/481052af7f9f862b9bfc9963b8014324ced045f6-1900x1268.jpg?auto=format\",\"width\":152,\"height\":152,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAUGBP/EACEQAAEDBQACAwAAAAAAAAAAAAECAwQABRESIQYUIjFh/8QAFgEBAQEAAAAAAAAAAAAAAAAABQME/8QAHREAAgIBBQAAAAAAAAAAAAAAAAECAwQREyExUf/aAAwDAQACEQMRAD8AS+VxZ0suOQQ4GUYwEmmXiVwkRI/r3MqSvmm57Vm7bEakLXtlwA/HHK2SbHBjyil1kPq44FL+x+UVROc8l1vpFbElXqKkXBKk52oqsVZoIPGUjIzgUUpsv0xPIguD/9k=\",\"alt\":\"\u003cem\u003e\u003ca href=\\\"https://www.shutterstock.com/image-photo/businessman-taking-profit-bitcoin-trading-on-456071359\\\"\u003eBusiness miniature image\u003c/a\u003e via Shutterstock.\u003c/em\u003e\"},\"metadata\":null},\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/481052af7f9f862b9bfc9963b8014324ced045f6-1900x1268.jpg?auto=format\",\"width\":1000,\"height\":1000,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAUGBP/EACEQAAEDBQACAwAAAAAAAAAAAAECAwQABRESIQYUIjFh/8QAFgEBAQEAAAAAAAAAAAAAAAAABQME/8QAHREAAgIBBQAAAAAAAAAAAAAAAAECAwQREyExUf/aAAwDAQACEQMRAD8AS+VxZ0suOQQ4GUYwEmmXiVwkRI/r3MqSvmm57Vm7bEakLXtlwA/HHK2SbHBjyil1kPq44FL+x+UVROc8l1vpFbElXqKkXBKk52oqsVZoIPGUjIzgUUpsv0xPIguD/9k=\",\"alt\":\"\u003cem\u003e\u003ca href=\\\"https://www.shutterstock.com/image-photo/businessman-taking-profit-bitcoin-trading-on-456071359\\\"\u003eBusiness miniature image\u003c/a\u003e via Shutterstock.\u003c/em\u003e\"},\"metadata\":{\"_ref\":\"image-481052af7f9f862b9bfc9963b8014324ced045f6-1900x1268-jpg\",\"hotspot\":{\"width\":0.23258240582191791,\"x\":0.46066325984588985,\"y\":0.4039302052740752,\"height\":0.31048361735228275,\"_type\":\"sanity.imageHotspot\"},\"crop\":{\"right\":0,\"top\":0,\"left\":0,\"bottom\":0,\"_type\":\"sanity.imageCrop\"}}}],\"videoId\":null,\"videoPlataform\":null,\"description\":\"Christian Angermayer, the firm’s chairman, stated that it will acquire $5 million in BTC.\",\"tags\":[{\"slug\":\"bitcoin\",\"title\":\"Bitcoin\"},{\"slug\":\"atai-life-sciences\",\"title\":\"atai Life Sciences\"},{\"slug\":\"bitcoin-treasury-reserve-asset\",\"title\":\"Bitcoin Treasury Reserve Asset\"}],\"slug\":\"biotech-s-atai-life-sciences-joins-roster-of-firms-with-bitcoin-treasury-strategies\",\"authorDetails\":[{\"name\":null,\"byline\":\"Tom Carreras\",\"authorSlug\":\"tom-carreras\"}],\"sectionDetails\":[{\"name\":\"Markets\",\"sectionSlug\":\"markets\"}]},{\"title\":\"Kraken to Buy NinjaTrader for $1.5B "])
    </script>
    <script>
        self.__next_f.push([1,"to Enter U.S. Crypto Futures Market\",\"pathname\":\"/business/2025/03/20/kraken-buys-ninjatrader-for-usd1-5b-to-enter-u-s-crypto-futures-market\",\"_type\":\"article\",\"slug\":\"kraken-buys-ninjatrader-for-usd1-5b-to-enter-u-s-crypto-futures-market\",\"articleDates\":{\"createDate\":\"2025-03-20T05:46:53.956Z\",\"publishedAt\":\"2025-03-20T05:57:52.986Z\",\"updateDate\":\"2025-03-20T17:24:52.908Z\",\"displayDate\":\"2025-03-20T05:57:52.986Z\"},\"authorDetails\":[{\"name\":null,\"byline\":\"Parikshit Mishra\",\"authorSlug\":\"parikshit-mishra\"},{\"name\":null,\"byline\":\"Jamie Crawley\",\"authorSlug\":\"jamie-crawley\"}],\"__image\":{\"source\":{\"alt\":\"(Kraken)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/b40a09ecac1334e17574f556c1f2cb1e9c68b091-2576x1449.png?auto=format\",\"width\":152,\"height\":152,\"placeholder\":\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAYAAAB/Ca1DAAAACXBIWXMAAAsTAAALEwEAmpwYAAACgUlEQVR4nF3OSWsTAQCG4fklHtxQqsamzTbZZsk022QySWaSZtLGSWKaqTUUixuCiK0rCIp4EcGzguhFf4CCiB48CYKIePIgKIpoentl0qDi4YHv9PIJ2eYKc/NH0OaX0eoembqHanso9gDZ9sg2jmM712m0bmHMr5Ox15CtFdLWMumat6U6IOWrDBC0xlZIrQ9QrSUUawm55uuTsY7ScG5xzH3BKfcNw/YzXOce5fpllOqQZGVpi9kfS5T7CH5EtfootcPIVV8PqdJDrixhNjZYbT9lo/uVy51fXHC/cXrxLY51F9kYEje6xI3eX6UeglLroVT9QBfJ7JIuu6TKHfLVEywfesgl7xPXBiOu9ja56P5gtf6KQn4DMdchpruIegdRd8c7pncQJNPFlzYOkSq1SZYWUYxlHOsOZ7vvuDH8xc3VTa6vjDjb/oBduE1EdgnPNYkV20QL/8i3EdLG4jiS1BdIFB1SRZdy6QrD6kvWne9c6Yy45m1ydfAFz3pCSjrKjGwTzjpEci0iuQXCudaW7AJCUndIFBzihSZivomWX6NbfMyZ0mfOV0as10dsOD9Ys1+TV88TTFrMqvb4Yeh/WhMhnm8g5hrEsjZRrY4qr7EoPeKY+p4zhS+cM39y0vyInblDSGxxMF0eB2cz9YkGM/8QxKxFVLOIaDVCskkwUiG8r4cWuMh89AF96TlN6T5i1OOAWGJaMgnKNYKKz5qw/xCimSph1SSklJmVShyIzbF7f4Jdu1NM7TKY2dMhuL/FvtkigYTOdNqcqDAt+aoTtTEh7Ifk0jg2k9YJpooE4jmmQhI7psJs2znN9r1RpiJzBJI6gaQxUSaQ8pkTlbHfDMe8Q+EFSgAAAAAASUVORK5CYII=\"},\"metadata\":null},\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAYAAAB/Ca1DAAAACXBIWXMAAAsTAAALEwEAmpwYAAACgUlEQVR4nF3OSWsTAQCG4fklHtxQqsamzTbZZsk022QySWaSZtLGSWKaqTUUixuCiK0rCIp4EcGzguhFf4CCiB48CYKIePIgKIpoentl0qDi4YHv9PIJ2eYKc/NH0OaX0eoembqHanso9gDZ9sg2jmM712m0bmHMr5Ox15CtFdLWMumat6U6IOWrDBC0xlZIrQ9QrSUUawm55uuTsY7ScG5xzH3BKfcNw/YzXOce5fpllOqQZGVpi9kfS5T7CH5EtfootcPIVV8PqdJDrixhNjZYbT9lo/uVy51fXHC/cXrxLY51F9kYEje6xI3eX6UeglLroVT9QBfJ7JIuu6TKHfLVEywfesgl7xPXBiOu9ja56P5gtf6KQn4DMdchpruIegdRd8c7pncQJNPFlzYOkSq1SZYWUYxlHOsOZ7vvuDH8xc3VTa6vjDjb/oBduE1EdgnPNYkV20QL/8i3EdLG4jiS1BdIFB1SRZdy6QrD6kvWne9c6Yy45m1ydfAFz3pCSjrKjGwTzjpEci0iuQXCudaW7AJCUndIFBzihSZivomWX6NbfMyZ0mfOV0as10dsOD9Ys1+TV88TTFrMqvb4Yeh/WhMhnm8g5hrEsjZRrY4qr7EoPeKY+p4zhS+cM39y0vyInblDSGxxMF0eB2cz9YkGM/8QxKxFVLOIaDVCskkwUiG8r4cWuMh89AF96TlN6T5i1OOAWGJaMgnKNYKKz5qw/xCimSph1SSklJmVShyIzbF7f4Jdu1NM7TKY2dMhuL/FvtkigYTOdNqcqDAt+aoTtTEh7Ifk0jg2k9YJpooE4jmmQhI7psJs2znN9r1RpiJzBJI6gaQxUSaQ8pkTlbHfDMe8Q+EFSgAAAAAASUVORK5CYII=\",\"alt\":\"(Kraken)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/b40a09ecac1334e17574f556c1f2cb1e9c68b091-2576x1449.png?auto=format\",\"width\":1000,\"height\":1000},\"metadata\":{\"_ref\":\"image-b40a09ecac1334e17574f556c1f2cb1e9c68b091-2576x1449-png\",\"hotspot\":null,\"crop\":null}}],\"videoId\":null,\"storyType\":\"News\",\"sectionDetails\":[{\"name\":\"Finance\",\"sectionSlug\":\"business\"}],\"videoPlataform\":null,\"description\":\"The deal could  be a way for the crypto exchange to move into another asset class and increase its users.\",\"tags\":[{\"slug\":\"kraken\",\"title\":\"Kraken\"},{\"slug\":\"m-a\",\"title\":\"M\u0026A\"},{\"slug\":\"futures\",\"title\":\"Futures\"},{\"slug\":\"mergers-and-acquisitions\",\"title\":\"mergers and acquisitions\"},{\"slug\":\"derivatives\",\"title\":\"Derivatives\"},{\"slug\":\"crypto-exchanges\",\"title\":\"Crypto Exchanges\"}],\"meta\":{\"title\":\"Crypto Exchange Kraken Agrees to Buy Futures Platform NinjaTrader for $1.5B\",\"description\":\"The deal could  be a way for the crypto exchange to move into another asset class and increase its users.\"}},{\"__image\":{\"source\":{\"height\":152,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgo"])
    </script>
    <script>
        self.__next_f.push([1,"KCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAYHBAX/xAAkEAACAQMDAwUAAAAAAAAAAAABAgMABBEFBhITISIxQVGRof/EABUBAQEAAAAAAAAAAAAAAAAAAAMA/8QAGREBAAIDAAAAAAAAAAAAAAAAAQACERIh/9oADAMBAAIRAxEAPwCJaHpkd3N05JkgRV5FnP5TZubbelWOiRT2EpkuOQD+Xp2+KndrcyJcxwrjg48gabLrD7Rjnfk0rXJUsT7AVJZsI8iV11ROzhlcHGTRWSZir4BP3RSZhYn/2Q==\",\"alt\":\"President Donald Trump (Shutterstock)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/cdcf9842ba42c5e5ccb3f6bd464225a8b6206f40-1500x1000.jpg?auto=format\",\"width\":152},\"metadata\":null},\"videoPlataform\":null,\"title\":\"Gold Surges, Bitcoin Rallies, Stocks Down Since Trump's Electoral Win — What’s Driving the Chaos?\",\"slug\":\"gold-surges-bitcoin-rallies-stocks-down-since-trump-s-electoral-win-what-s-driving-the-chaos\",\"pathname\":\"/markets/2025/03/20/gold-surges-bitcoin-rallies-stocks-down-since-trump-s-electoral-win-what-s-driving-the-chaos\",\"articleDates\":{\"createDate\":\"2025-03-20T10:19:08Z\",\"publishedAt\":\"2025-03-20T11:14:46.716Z\",\"updateDate\":\"2025-03-20T15:53:11.438Z\",\"displayDate\":\"2025-03-20T11:14:46.716Z\"},\"tags\":[{\"slug\":\"bitcoin\",\"title\":\"Bitcoin\"},{\"slug\":\"gold\",\"title\":\"Gold\"},{\"slug\":\"s-p\",\"title\":\"S\u0026P\"},{\"slug\":\"nasdaq\",\"title\":\"Nasdaq\"}],\"authorDetails\":[{\"name\":null,\"byline\":\"James Van Straten\",\"authorSlug\":\"james-van-straten\"},{\"name\":null,\"byline\":\"Omkar Godbole\",\"authorSlug\":\"omkar-godbole\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/cdcf9842ba42c5e5ccb3f6bd464225a8b6206f40-1500x1000.jpg?auto=format\",\"width\":1000,\"height\":1000,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAYHBAX/xAAkEAACAQMDAwUAAAAAAAAAAAABAgMABBEFBhITISIxQVGRof/EABUBAQEAAAAAAAAAAAAAAAAAAAMA/8QAGREBAAIDAAAAAAAAAAAAAAAAAQACERIh/9oADAMBAAIRAxEAPwCJaHpkd3N05JkgRV5FnP5TZubbelWOiRT2EpkuOQD+Xp2+KndrcyJcxwrjg48gabLrD7Rjnfk0rXJUsT7AVJZsI8iV11ROzhlcHGTRWSZir4BP3RSZhYn/2Q==\",\"alt\":\"President Donald Trump (Shutterstock)\"},\"metadata\":{\"_ref\":\"image-cdcf9842ba42c5e5ccb3f6bd464225a8b6206f40-1500x1000-jpg\",\"hotspot\":null,\"crop\":null}}],\"videoId\":null,\"sectionDetails\":[{\"name\":\"Markets\",\"sectionSlug\":\"markets\"}],\"_type\":\"article\",\"description\":\"Initially BTC decoupled from stocks, but the positive correlation has strengthened during the recent downturn.\",\"storyType\":\"News\",\"meta\":{\"title\":\"Gold (XAU) Surges, Bitcoin (BTC) Rallies, Stocks Slip Since Trump's Electoral Win — What’s Driving the Chaos?\",\"description\":\"Initially BTC decoupled from stocks, but the positive correlation has strengthened during the recent downturn.\"}},{\"title\":\"Gotbit Founder Aleksei Andriunin Pleads Guilty to Wire Fraud, Market Manipulation\",\"pathname\":\"/policy/2025/03/20/gotbit-founder-aleksei-andriunin-pleads-guilty-to-wire-fraud-market-manipulation\",\"description\":\"Prosecutors are recommending that Andriunin, 26, spends no more than 24 months in a U.S. prison.\",\"meta\":{\"title\":\"Gotbit Founder Aleksei Andriunin Pleads Guilty to Wire Fraud, Market Manipulation\",\"description\":\"Prosecutors are recommending that Andriunin, 26, spends no more than 24 months in a U.S. prison.\"},\"storyType\":\"News\",\"sectionDetails\":[{\"name\":\"Policy\",\"sectionSlug\":\"policy\"}],\"articleDates\":{\"createDate\":\"2025-03-20T16:56:08.188Z\",\"publishedAt\":\"2025-03-20T17:05:56.025Z\",\"updateDate\":\"2025-03-20T17:05:56.025Z\",\"displayDate\":\"2025-03-20T17:05:56.025Z\"},\"_type\":\"article\",\"slug\":\"gotbit-founder-aleksei-andriunin-pleads-guilty-to-wire-fraud-market-manipulation\",\"videoId\":null,\"tags\":[{\"slug\":\"department-of-justice\",\"title\":\"Department of Justice\"},{\"slug\":\"market-manipulation\",\"title\":\"Market Manipulation\"},{\"slug\":\"crime\",\"title\":\"Crime\"},{\"slug\":\"lawsuits\",\"title\":\"lawsuits\"}],\"authorDetails\":[{\"name\":null,\"byline\":\"Cheyenne Ligon\",\"authorSlug\":\"cheyenne-ligon\"}],\"__image\":{\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGB"])
    </script>
    <script>
        self.__next_f.push([1,"cUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHBf/EACUQAAIBAwMCBwAAAAAAAAAAAAECAwAEEQUGEhMhFBUiQVFxgf/EABYBAQEBAAAAAAAAAAAAAAAAAAQBA//EABkRAQADAQEAAAAAAAAAAAAAAAEAAhEhMf/aAAwDAQACEQMRAD8A3ZbmBdSaOHkrJJgcgAAKWt37qsbK/MctyQyrxKqc4z8ik+21VdVsIRL1VvmPrlR8D7xS9qmz9V82ZLiVCjuB1mfJ7++KNYF2z5EU0MqbsrmxN+iw2/HAsiyASMQxwufyipjFpctkvh450kVDjky96KjXejNC+cSf/9k=\",\"alt\":\"Alexey Andryunin\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920.jpg?auto=format\",\"width\":152,\"height\":152},\"metadata\":null},\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920.jpg?auto=format\",\"width\":1000,\"height\":1000,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHBf/EACUQAAIBAwMCBwAAAAAAAAAAAAECAwAEEQUGEhMhFBUiQVFxgf/EABYBAQEBAAAAAAAAAAAAAAAAAAQBA//EABkRAQADAQEAAAAAAAAAAAAAAAEAAhEhMf/aAAwDAQACEQMRAD8A3ZbmBdSaOHkrJJgcgAAKWt37qsbK/MctyQyrxKqc4z8ik+21VdVsIRL1VvmPrlR8D7xS9qmz9V82ZLiVCjuB1mfJ7++KNYF2z5EU0MqbsrmxN+iw2/HAsiyASMQxwufyipjFpctkvh450kVDjky96KjXejNC+cSf/9k=\",\"alt\":\"Alexey Andryunin\"},\"metadata\":{\"_ref\":\"image-0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920-jpg\",\"hotspot\":null,\"crop\":null}}],\"videoPlataform\":null},{\"title\":\"As Congress Talks Up Its Earth-Shaking Crypto Bill, Regulators Are Already at Work\",\"_type\":\"article\",\"meta\":{\"title\":\"As Congress Talks Up Its Earth-Shaking Crypto Bill, Regulators Are Already at Work\",\"description\":\"While the Securities and Exchange Commission prepares for a crypto roundtable, policy moves at the agencies are getting more done than higher-profile rhetoric.\"},\"storyType\":\"News\",\"videoId\":null,\"videoPlataform\":null,\"pathname\":\"/policy/2025/03/20/as-congress-talks-up-its-earth-shaking-crypto-bill-regulators-are-already-at-work\",\"articleDates\":{\"createDate\":\"2025-03-20T14:00:05Z\",\"publishedAt\":\"2025-03-20T15:04:07.222Z\",\"updateDate\":\"2025-03-20T16:02:55.627Z\",\"displayDate\":\"2025-03-20T15:04:07.222Z\"},\"slug\":\"as-congress-talks-up-its-earth-shaking-crypto-bill-regulators-are-already-at-work\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"height\":1000,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHCP/EACIQAAIBAwMFAQAAAAAAAAAAAAECAwAEEQUGEhMhMUFRQv/EABYBAQEBAAAAAAAAAAAAAAAAAAQBAv/EABkRAAMBAQEAAAAAAAAAAAAAAAABAiEDE//aAAwDAQACEQMRAD8AzRZIr3ADEAE+flUy721pVtst50dZLxQG6nLHn1ikPTYI0mkLLzIHbPqnrcBE+zdOm4hGbAbj+sfaO+dVqYv2icaJ9PGGlaih3Ic0VUjDo//Z\",\"alt\":\"SEC Acting Chairman Mark Uyeda\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/be0b47c1dcd16cffc5d2d1408c2df0c6ec6aa29e-3560x2373.jpg?auto=format\",\"width\":1000},\"metadata\":{\"_ref\":\"image-be0b47c1dcd16cffc5d2d1408c2df0c6ec6aa29e-3560x2373-jpg\",\"hotspot\":{\"_type\":\"sanity.imageHotspot\",\"width\":0.45724529109589085,\"x\":0.5950208690068498,\"y\":0.41372874372660406,\"height\":0.14753152124727448},\"crop\":{\"top\":0,\"left\":0,\"bottom\":0,\"_type\":\"sanity.imageCrop\",\"right\":0}}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/be0b47c1dcd16cffc5d2d1408c2df0c6ec6aa29e-3560x2373.jpg?auto=format\",\"width\":152,\"height\":152,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHCP/EACIQAAIBAwMFAQAAAAAAAAAAAAECAwAEEQUGEhMhMUFRQv/EABYBAQEBAAAAAAAAAAAAAAAAAAQBAv/EABkRAAMBAQEAAAAAAAAAAA"])
    </script>
    <script>
        self.__next_f.push([1,"AAAAABAiEDE//aAAwDAQACEQMRAD8AzRZIr3ADEAE+flUy721pVtst50dZLxQG6nLHn1ikPTYI0mkLLzIHbPqnrcBE+zdOm4hGbAbj+sfaO+dVqYv2icaJ9PGGlaih3Ic0VUjDo//Z\",\"alt\":\"SEC Acting Chairman Mark Uyeda\"},\"metadata\":null},\"description\":\"While the Securities and Exchange Commission prepares for a crypto roundtable, policy moves at the agencies are getting more done than higher-profile rhetoric.\",\"tags\":[{\"slug\":\"regulation\",\"title\":\"Regulation\"},{\"slug\":\"u-s-securities-and-exchange-commission\",\"title\":\"U.S. Securities and Exchange Commission\"},{\"slug\":\"u-s-commodity-futures-trading-commission\",\"title\":\"U.S. Commodity Futures Trading Commission\"},{\"slug\":\"office-of-the-comptroller-of-the-currency\",\"title\":\"Office of the Comptroller of the Currency\"},{\"slug\":\"u-s-federal-deposit-insurance-corp\",\"title\":\"U.S. Federal Deposit Insurance Corp.\"},{\"slug\":\"crypto-legislation\",\"title\":\"crypto legislation\"},{\"slug\":\"top-stories\",\"title\":\"Top Stories\"}],\"authorDetails\":[{\"name\":null,\"byline\":\"Jesse Hamilton\",\"authorSlug\":\"jesse-hamilton\"}],\"sectionDetails\":[{\"name\":\"Policy\",\"sectionSlug\":\"policy\"},{\"name\":\"News Analysis\",\"sectionSlug\":\"news-analysis\"}]},{\"pathname\":\"/markets/2025/03/20/ether-spot-etfs-in-u-s-saw-usd358-million-outflows-in-11-day-stretch\",\"articleDates\":{\"createDate\":\"2025-03-20T12:41:52Z\",\"publishedAt\":\"2025-03-20T13:04:18.600Z\",\"updateDate\":\"2025-03-20T13:18:46.427Z\",\"displayDate\":\"2025-03-20T13:04:18.600Z\"},\"description\":\"Despite the outflows, the funds have seen a cumulative net inflow of $2.45 billion since their inception..\",\"meta\":{\"title\":\"U.S. Ether (ETH) Spot ETFs See Net Withdrawals for 11th Straight Day\",\"description\":\"Despite the outflows, the funds have seen a cumulative net inflow of $2.45 billion since their inception..\"},\"videoPlataform\":null,\"_type\":\"article\",\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Francisco Rodrigues\",\"authorSlug\":\"francisco-rodrigues\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0fda186e57eed31cfc280d2fe680adfc47aaecde-1920x1280.jpg?auto=format\",\"width\":1000,\"height\":1000,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGgAAAQUBAAAAAAAAAAAAAAAAAAECBAUGCP/EACAQAAICAQUAAwAAAAAAAAAAAAECABEDBAUSEyFBYYH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAAH/xAAbEQACAQUAAAAAAAAAAAAAAAAAAQIREjFBUf/aAAwDAQACEQMRAD8A51GIrnK+VF1CK4XkS1fAEZkY9qkm7AMm4mKIwWvfqOitINNvKKzig86x+wmp27Zset0wzFwhJquFwk6GK7h//9k=\",\"alt\":\"Stock market price charts (Anne Nygård/Unsplash)\"},\"metadata\":{\"_ref\":\"image-0fda186e57eed31cfc280d2fe680adfc47aaecde-1920x1280-jpg\",\"hotspot\":null,\"crop\":null}}],\"videoId\":null,\"tags\":[{\"slug\":\"ethereum\",\"title\":\"Ethereum\"},{\"slug\":\"ether-etfs\",\"title\":\"Ether ETFs\"}],\"sectionDetails\":[{\"name\":\"Markets\",\"sectionSlug\":\"markets\"}],\"title\":\"Ether Spot ETFs in U.S. Saw $358 Million Outflows in 11-Day Stretch\",\"slug\":\"ether-spot-etfs-in-u-s-saw-usd358-million-outflows-in-11-day-stretch\",\"__image\":{\"source\":{\"width\":152,\"height\":152,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGgAAAQUBAAAAAAAAAAAAAAAAAAECBAUGCP/EACAQAAICAQUAAwAAAAAAAAAAAAECABEDBAUSEyFBYYH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAAH/xAAbEQACAQUAAAAAAAAAAAAAAAAAAQIREjFBUf/aAAwDAQACEQMRAD8A51GIrnK+VF1CK4XkS1fAEZkY9qkm7AMm4mKIwWvfqOitINNvKKzig86x+wmp27Zset0wzFwhJquFwk6GK7h//9k=\",\"alt\":\"Stock market price charts (Anne Nygård/Unsplash)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0fda186e57eed31cfc280d2fe680adfc47aaecde-1920x1280.jpg?auto=format\"},\"metadata\":null}},{\"_type\":\"article\",\"meta\":{\"title\":\"BitcoinOS: ZK Proofs for Bitcoin Without Needing 'Problematic' Fork of the Network\",\"description\":\"BitcoinOS contributor and crypto OG Edan Yago describes forks on Bitcoin as like \\\"open-hear"])
    </script>
    <script>
        self.__next_f.push([1,"t surgery.\\\"\"},\"authorDetails\":[{\"name\":null,\"byline\":\"Jamie Crawley\",\"authorSlug\":\"jamie-crawley\"}],\"videoId\":null,\"sectionDetails\":[{\"name\":\"Tech\",\"sectionSlug\":\"tech\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAUBBAb/xAAkEAACAAYBAwUAAAAAAAAAAAABAgADBAUGESEHE7ESFDEyYf/EABUBAQEAAAAAAAAAAAAAAAAAAAIA/8QAFxEBAQEBAAAAAAAAAAAAAAAAAAEREv/aAAwDAQACEQMRAD8A1VkxHHns1JPmW9CWkhyefnUTiVFjuQUtROk21VWRMMog7HIhvizs1hoATse3XxCnpMPTR31R9RXvoQYdLspstlorksqVRIF7YbX7zBFLqPUTUyPSOQOyvkwQNXL/2Q==\",\"alt\":\"Photo of Edan Yago standing in front of  a sponsor board. (Courtesy: BitcoinOS)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679.jpg?auto=format\",\"width\":1000,\"height\":1000},\"metadata\":{\"_ref\":\"image-678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679-jpg\",\"hotspot\":{\"y\":0.5613692029354334,\"height\":0.44488776883341774,\"_type\":\"sanity.imageHotspot\",\"width\":0.3415637142443783,\"x\":0.46942978308945105},\"crop\":{\"_type\":\"sanity.imageCrop\",\"right\":0,\"top\":0.19526580241863037,\"left\":0,\"bottom\":0}}}],\"title\":\"Bitcoin DeFi Expansion Faces Fork Dilemma as Developers Explore ZK Proofs\",\"slug\":\"bitcoin-defi-expansion-faces-fork-dilemma-as-developers-explore-zk-proofs\",\"storyType\":\"News\",\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679.jpg?auto=format\",\"width\":152,\"height\":152,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAUBBAb/xAAkEAACAAYBAwUAAAAAAAAAAAABAgADBAUGESEHE7ESFDEyYf/EABUBAQEAAAAAAAAAAAAAAAAAAAIA/8QAFxEBAQEBAAAAAAAAAAAAAAAAAAEREv/aAAwDAQACEQMRAD8A1VkxHHns1JPmW9CWkhyefnUTiVFjuQUtROk21VWRMMog7HIhvizs1hoATse3XxCnpMPTR31R9RXvoQYdLspstlorksqVRIF7YbX7zBFLqPUTUyPSOQOyvkwQNXL/2Q==\",\"alt\":\"Photo of Edan Yago standing in front of  a sponsor board. (Courtesy: BitcoinOS)\"},\"metadata\":null},\"description\":\"BitcoinOS contributor and crypto OG Edan Yago describes forks on Bitcoin as like \\\"open-heart surgery.\\\"\",\"tags\":[{\"slug\":\"bitcoin\",\"title\":\"Bitcoin\"},{\"slug\":\"zero-knowledge\",\"title\":\"Zero knowledge\"},{\"slug\":\"zero-knowledge-proofs\",\"title\":\"Zero-Knowledge Proofs\"},{\"slug\":\"edan-yago\",\"title\":\"edan yago\"},{\"slug\":\"bitcoin-forks\",\"title\":\"Bitcoin Forks\"},{\"slug\":\"forks\",\"title\":\"Forks\"}],\"videoPlataform\":null,\"pathname\":\"/tech/2025/03/20/bitcoin-defi-expansion-faces-fork-dilemma-as-developers-explore-zk-proofs\",\"articleDates\":{\"createDate\":\"2025-03-19T16:33:02Z\",\"publishedAt\":\"2025-03-20T15:54:33.423Z\",\"updateDate\":\"2025-03-20T15:54:33.423Z\",\"displayDate\":\"2025-03-20T15:54:33.423Z\"}}],\"isMobile\":false,\"video\":{\"siteId\":\"jCGTjK65\",\"placementId\":\"cF5d0hUf\",\"tags\":\"$Q1e\",\"title\":\"$undefined\",\"mediaId\":\"XLE8HNrO\",\"slug\":\"$undefined\",\"options\":{\"showTitle\":true,\"showDescription\":true}},\"showAtf\":true,\"livestream\":null}],[\"$\",\"div\",null,{\"className\":\"grid\",\"children\":[[\"$\",\"div\",null,{\"className\":\"order-1\"}],[\"$\",\"div\",null,{\"className\":\"hidden md:flex flex-col justify-center items-center order-2 pt-5\",\"children\":[\"$\",\"div\",null,{\"className\":\"min-w-full min-h-full justify-center items-center\",\"children\":[\"$\",\"$L1f\",null,{\"adId\":\"homepage_mid_desktop_0\",\"refId\":\"homepage_leaderboard\",\"targeting\":{\"adIndex\":\"0\"}}]}]}]]}]]]}]\n20:I[29697,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dp"])
    </script>
    <script>
        self.__next_f.push([1,"l_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"MostReadOpinionModule\"]\n21:T63a,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAVCAIAAADJt1n/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAETUlEQVR4nE3TaVNaZxQHcL5KU22MgsYNxY0oqIkaE0frhEYLehFQEEEUBBFlkbK4IBI2RUFQQRQQhHtZlHvZnXY60/ZFmzadtt+kg5jozP/NM3N+c+Y8z3NQ0VQ+mspDSA6Es5Fk5jKWPDz1ylRa9oKAxeXxlyUancHh8QWiyfBNBoSzIJwD4TwIFwmqiJE8BOfAZMYPXRttDgZrrrOLUF9X31Bf34rD9fX1MZhsvcXmAxMlDCFF+Rhng7GkYe9wEqB1tLTgqqsI9c9ft2LftDURsc/xOCxlYvLDvj2UQEA4e4fzEFJAxYo4F0Vy7kCYsyDofvGC1I2XASTbEvtMIXJLF7eY45SX+P4uvEAk9oagUs8vuFAa++jMD0zRR3oIuxwgv6f9w+/8O+L96LPnLEoTd+L9qy4ajX505nvAqQIqni7EUvlYKu88888wZ+fejwa14t881r/A83+vg79futIWtUM4Mz3cB1AoNpcbQnKlZtF7fJfji6CAvyRhTHqUwuCWAjRsIAeGK53SymetU0nTw/1MKrDvcIFw9gGXZCxdOA9G1DKpfAbY5U0beUzTPNO0wNxiUX+gjovHhmdHBngA2Wo2h6+RaLo0aeHutu8SAWMew7ZjhXuytuCWCk4lC84Vno0/a19k7fPoiokR8QRpb0cXjsOPcGkGJB9LwNceF2xSZy2arGUzY9JmzNqIShxY5fkkXB39O+nU2KHZFLlOQak8VMJQ8dGLicKZRPAS3t8pmNU/WTZuzRuwXuld4R7zGKf8aS3wTsGZPnadgMnMff09/uxBMBq2mW908qxegewoIa3cLZy3c+iHnCnV1Pi2QuYLgZ+f6h5noeKny0JILpKA/S5XQCNPaNdSelVqdzOuVvglixY2VcYALEbTVQJ+hPOou+96n0gy7XV7D2RrHjE/qVP9eGC6te4G5MtyCmmJRj10OCPJ4m484NIZTBbjiySs+0e7UsWeYPFUIgpvqUIbym0WnTbQy56g2OzOcLE492U3ip0jN+lgDD4JRNQ7Vg5fuq3V+8xWx9rqLndWRZvkDA2Se4gz35MVqk3byfn5VTyUSJU86jwct3v8Gr2VLZAOjgLdr8flKn0eyaYufHaJSE0mib99KwYmBfMCCm2OTOcsite1hj27238ejqOEUi3A5Pe+GWts68M0dNe1DFBZongy98+fn25Dl2eyZbtw/tho1H2wDY8x6nBEbHtvz+A7Mp27uKJEtRKGaptfVtTgy6pan1bj0Q29PYNkg/X446f/fv35l1OTeU+jdp96LS4feYZfje36qqKhrKoJ3dCJ7ehHVdYRntUSKmo6yzHt32DaK2uJje1vmfNrV7FUKIqsKnSsOaFGZzpwB0XrO23EoSfPGp9UNpWhW8rQOBQG+wrT2FtVR3xa3VGObq+sI9Y09w+O0rfNzhMftCzXUei89S3TBYgYD739w5SyquYydEs5pvXrqub/AdnnyPd4jO42AAAAAElFTkSuQmCC22:T6de,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEyElEQVR4nG2T+U9UVxiG7z/VpL80tRQbjDVSqxFFWRXJ2FagCioqwjDgMAszwyqbuFFl2BSRGqsVjEStUgGlQKEgjLNy586dO3eAweRp7iCmbfrDm5Nz3vM+33dO8gmRSAxVXUeN/r8iK++JaOsHKf/QxztqDEVdQ47EEMLqGooa+xiIw9X/hmP/Am3qYxF1nbAa2wDK6lp8o0kz4lXVjcDmeVybIC286UU1bx05sk4oEkNSYgiSorW6caiZSvT9R20E1pCVVSQpgrgsExTDhMIryJGNJ4Y+gMTwWlyCLxglIK2wHFqNGxo0rL6PS1ZjcZB74R2zv08w9fQZsy9HeTs9i9cdIBiKEtJA8ip+aYWAtIrwZnqJyeklZubcuLwhgvJqvLLWcWA5xOzYOE+6uuiz2+izmnjY0shIVyejQ8PMzy2yHFQJSFHcgQieQATh1p2H9PQO0t//C6OvpvH4w4SUNcRQlD/GJhhoqqO98Huqs1Opzc3EebaQ/ioDtxtqGLl/nyWXD38wissns+iWEOrq2zFV2bCaHQwOPmJhKRAH+gMSI4MDXC4uoFWXxsXD+2nVZeA8lUfn2eNcPXuc/os1TI+N4xcV3vllFlwigqW6kdISPaXnyujuHmBu3osUXsPnCfCkt5tLx7+jPnsfdRl7uXg4lfYfDnEpP4fWvGyc5wsZu3cPn0/EK0ZY8kgINnsz5aUGys7pcTr7+XPOHf9kt8vL8I3r1OakUZq8jbJvtlO5Zwf29G9pzE2lWXeAruICxgZ/xu8TCUgqbn8YweFooaLsAobzFXQ6+5mefceyvIrH7WOo8zqOI2lU7EnGmpqC7eBubAeTcWRq0P30mfXMvBxFlCIsSyregAa0N3NBb6SitBJn10C8Q0leJSjKjA8/4oa+mMYjmTTnZFKXnULl3m2U795K/dEDPLjeiuvtIsHwCgExgscvI9TVtlFlMMWh3T13mZv3IIdXUZQV3PPzDDs7aCvKp2L/Lop2fEFB0qcU7/iM5oIsnt5x4nZ7EOUofg3okxGaGtuxGi2YKqvo7bvLXwvuODCiTYikMDM+Tne9nbOpyei+/IT8pE8xpHzFldM6Ht5sZ2L0N1yLLjw+Ebc3iNDadAW7qRqL0Uxfn9ahOz5aSmQNRdGeHmJs5DGtJT9SsieRsr1bqdWlcFV/kqs2Ez1NNp4N/MSbp4+YfDWK0NZ0DYfZgdVoprdX+0MXYkhFVlYIh1eQJIWpV6N02cuxHtqFOTOZluI82q02zMVnqMlPx1maw23rSW7XGxBaGq9QY3FQXWWlp2eAqZm3BEQlPqeiKDM3NcVgZwcNZ/IxZe/CdjSNK9U26h1tnM7NpTItibrDSdQd+ZoGXTJCra2eaqMF6wUzzs5bTEzO4/ZJeL3LzE6+ZvDGZSxniijLzcaYtZuLp/K41nIdQ7mdYym7MOzbguXgFoypW7CkJSIY9RVUlJRiKC2j/VIHz1+8ZnZ6lsnnIwzdbKO6UEdeZib6/BM0nDhGR6WetvrL5B0tRLczEdOBBOwZCZgObMGUloBQdvo0Z4qKOFVYhMPeyMMHj3nx6z2GrtXQaSigcP9OslPSsZQ7cNprueVw0GCsISslA932z7GlJ1KXtZXqtATM6Qn8DfE29aWkuC6lAAAAAElFTkSuQmCC12:[[\"$\",\"$L16\",null,{\"moduleIds\":[\"app/components/base/home/most-read-opinion-module/index.tsx -\u003e ./module\"]}],[\"$\",\"$L20\",null,{\"mostReadArticles\":[{\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAGAAAAwEBAAA"])
    </script>
    <script>
        self.__next_f.push([1,"AAAAAAAAAAAAAAAIGBQf/xAAkEAACAQMEAAcAAAAAAAAAAAABAgMABAUGERIhFCIxMkJxkf/EABYBAQEBAAAAAAAAAAAAAAAAAAMCBf/EABwRAAEEAwEAAAAAAAAAAAAAAAABAgMRBAVBE//aAAwDAQACEQMRAD8ArWxyTyyASAooJbj2aSztrCOYiSIMrL5Wlbj3W5b4a0xyv4NXj59E8t9/2lutN4+8W3e6WSXcnpn6H1VSbSd3aBZhRM5anLNQY822TkSKRZE9QVINFWp0zjGdy0Te4/KislVtbF8j/9k=\",\"alt\":\"\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/8d7b52647532c8388bbc60b32ca762a1d543b993-5500x3417.jpg?auto=format\"}}],\"title\":\"Bitcoin Pulls Back With Markets Nervous Ahead of Fed Meeting Results\",\"pathname\":\"/markets/2025/03/18/bitcoin-pulls-back-with-markets-nervous-ahead-of-fed-meeting-results\",\"articleDates\":{\"createDate\":\"2025-03-18T18:32:27.099Z\",\"publishedAt\":\"2025-03-18T18:57:25.942Z\",\"updateDate\":\"2025-03-18T18:58:11.897Z\",\"displayDate\":\"2025-03-18T18:57:25.942Z\"},\"description\":\"The Nasdaq and S\u0026P 500 were both lower by more than 1% about an hour before the close.\",\"meta\":{\"title\":\"FOMC Preview: Bitcoin Price (BTC) Heads Lower\",\"description\":\"The Nasdaq and S\u0026P 500 were both lower by more than 1% about an hour before the close.\"},\"authorDetails\":[{\"byline\":\"Stephen Alpher\",\"authorSlug\":\"stephen-alpher\"}]},{\"pathname\":\"/markets/2025/03/18/bitcoin-storm-could-be-brewing-crypto-onchain-options-platform-derive-says\",\"articleDates\":{\"createDate\":\"2025-03-18T06:55:39Z\",\"publishedAt\":\"2025-03-18T07:46:47.092Z\",\"updateDate\":\"2025-03-18T07:54:37.034Z\",\"displayDate\":\"2025-03-18T07:46:47.092Z\"},\"description\":\"  BTC currently faces low volatility, but a storm could be coming, Derive's Nick Forster said.\",\"meta\":{\"title\":\"Bitcoin News: BTC Price Storm Could Be Brewing, Crypto OnChain Options Platform Derive Says\",\"description\":\"  BTC currently faces low volatility, but a storm could be coming, Derive's Nick Forster said.\"},\"authorDetails\":[{\"byline\":\"Omkar Godbole\",\"authorSlug\":\"omkar-godbole\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/8b8e1fd91c3dad9359794177c3a7ddc60acfdd0e-1280x853.jpg?auto=format\",\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAYEBQf/xAAmEAABAwMCBQUAAAAAAAAAAAACAQMEAAUSBhETITFRYRQVIiWh/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAL/xAAZEQEBAAMBAAAAAAAAAAAAAAABAAIREiH/2gAMAwEAAhEDEQA/AEjQUk7bLcK58UWkHkLRbZL58U6Pa/M3UZgQV6fLJf2sr9r9e42YyXmCVN1wWpUO0vMyD+wfLl1VKlwF9pHUyXK7TZEs3CiFuvaiqptXUBM3VMu60U4J03//2Q==\",\"alt\":\"BTC storm could be looming, per Derive. (Myriams-Fotos/Pixabay)\"}}],\"title\":\"Bitcoin Storm Could Be Brewing, Crypto OnChain Options Platform Derive Says\"},{\"title\":\"Ripple CEO Confident of XRP Being Included in U.S. Strategic Reserve, Says IPO Is 'Possible'\",\"pathname\":\"/markets/2025/03/20/ripple-s-ceo-confident-of-xrp-in-u-s-strategic-reserve-says-ipo-is-possible\",\"articleDates\":{\"createDate\":\"2025-03-20T04:11:23.663Z\",\"publishedAt\":\"2025-03-20T04:15:45.533Z\",\"updateDate\":\"2025-03-20T22:39:06.841Z\",\"displayDate\":\"2025-03-20T04:15:25.421Z\"},\"description\":\"XRP has recently climbed 11% to over $2.51, becoming the third-largest token by market capitalization behind bitcoin and ether\",\"meta\":{\"title\":\"Ripple, XRP Price News: Garlinghouse Confident of XRP Being Included U.S. Strategic Reserve\",\"description\":\"XRP has recently climbed 11% to over $2.51, becoming the third-largest token by market capitalization behind bitcoin and ether\"},\"authorDetails\":[{\"byline\":\"Shaurya Malwa\",\"authorSlug\":\"shaurya-malwa\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUGAwT/xAAiEAACAgICAgIDAAAAAAAAAAABAgMRAAQFMRMhBhIyQXH/xAAXAQADAQAAAAAAAAAAAAAAAAADBAUG/8QAHREAAQUBAAMAAAAAAAAAAAAAAQACAwQRIQVhkf/aAAwDAQACEQMRAD8AT6+izOaiulurzSX"])
    </script>
    <script>
        self.__next_f.push([1,"XiVkRQG8gv0aII7zn5XlTxmm8kNlG6V/ZJ/v6yY+KNuc1yz78k3jgg/KzffQrN5e8nIy5FC053vsFAdSYAebo+Ksi40yr9hDI3urAvDGWj5WhJjnZV+xwy06ZwOakjSAX/9k=\",\"alt\":\"Ripple CEO Brad Garlinghouse speaking at the DC Blockchain Summit 2019. \",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/d6639cd4e3d71b95d80f1bc4a0cb6bbf4accb2e2-2048x1536.jpg?auto=format\",\"width\":416,\"height\":234}}]},{\"title\":\"Michael Saylor's Strategy Funding More Bitcoin Purchases With New Preferred Stock\",\"pathname\":\"/markets/2025/03/18/michael-saylor-s-strategy-funding-more-bitcoin-purchases-with-new-preferred-stock\",\"articleDates\":{\"createDate\":\"2025-03-18T13:58:53Z\",\"publishedAt\":\"2025-03-18T14:12:09.526Z\",\"updateDate\":\"2025-03-18T18:51:44.285Z\",\"displayDate\":\"2025-03-18T14:12:09.526Z\"},\"description\":\"The world's largest corporate holder of bitcoin is looking to raise around $500 million in an offering of Perpetual Preferred Strife Stock.\",\"meta\":{\"title\":\"Strategy Funding More BTC Purchases With New Preferred Stock\",\"description\":\"The world's largest corporate holder of bitcoin is looking to raise around $500 million in an offering of Perpetual Preferred Strife Stock.\"},\"authorDetails\":[{\"byline\":\"James Van Straten\",\"authorSlug\":\"james-van-straten\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/00e7304e15455e431051c733121e5e07d51210fc-5184x3888.jpg?auto=format\",\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAYHBAX/xAAiEAACAQMDBQEAAAAAAAAAAAABAwIABAUGERMHEiFRYSL/xAAWAQEBAQAAAAAAAAAAAAAAAAADAQL/xAAbEQEAAgIDAAAAAAAAAAAAAAABAAISISIxQf/aAAwDAQACEQMRAD8A5mqLFuR0lgXjh4HQMWsjPu7Z/ameRhDAFtqohrSRIH2Ka5lMtIOwdndtUsv5lExJI970gYjHszmpkYlTjObWcUZy8UFa7XyKgHW2am3t4sgTVHeQEhsd/FFUpvQ7U4ZIW8bGSgfyZu87faKuLNcZ/9k=\",\"alt\":\"Executive Chairman of MSTR, Michael Saylor (Danny Nelson/CoinDesk)\"}}]},{\"title\":\"XRP Zooms 10% as Garlinghouse Says SEC Is Dropping Case Against Ripple\",\"pathname\":\"/markets/2025/03/19/xrp-zooms-10-higher-as-garlinghouse-says-sec-is-dropping-case-against-ripple\",\"articleDates\":{\"createDate\":\"2025-03-19T13:17:26Z\",\"publishedAt\":\"2025-03-19T13:26:44.343Z\",\"updateDate\":\"2025-03-19T14:20:44.473Z\",\"displayDate\":\"2025-03-19T13:26:44.343Z\"},\"description\":\"Earlier reports said that the long-standing legal battle between Ripple and the agency is nearing its end.\",\"meta\":{\"title\":\"SEC to Drop Appeal of Ripple Ruling, Ending 4-Year Legal Fight, CEO Says\",\"description\":\"Earlier reports said that the long-standing legal battle between Ripple and the agency is nearing its end.\"},\"authorDetails\":[{\"byline\":\"Krisztian Sandor\",\"authorSlug\":\"krisztian-sandor\"},{\"byline\":\"Helene Braun\",\"authorSlug\":\"helene-braun\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/260b57a4fe560b018cc5f2eb91b9df196b57dc92-3773x2122.jpg?auto=format\",\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAYHBAX/xAAmEAACAQMCBAcAAAAAAAAAAAABAgMABAUGIQcRJEESEzEyUWGB/8QAFQEBAQAAAAAAAAAAAAAAAAAAAwX/xAAcEQEAAgMAAwAAAAAAAAAAAAABAgMABDEREhP/2gAMAwEAAhEDEQA/AF9rmaDNQ2zPE0cDdQHYD8A710MXZXWqo57rGWJjjSQxrIntPL5pR1NGkWsomjUKZLfxN9k+pq18K+mwfkwAJEXLFQO9SLNuVNZadcp/IsfTgZNMg99jLprWVpY3j2Kiit2tCW1JeMSeZbfeinhsEokk7htaPgc//9k=\",\"alt\":\"Brad Garlinghouse, the CEO of Ripple Labs (Jesse Hamilton/CoinDesk)\"}}]},{\"articleDates\":{\"createDate\":\"2025-03-19T14:55:52Z\",\"publishedAt\":\"2025-03-19T18:07:53.200Z\",\"updateDate\":\"2025-03-19T18:26:23.822Z\",\"displayDate\":\"2025-03-19T18:07:53.200Z\"},\"description\":\"The U.S. central bank continues to expect the fed funds rate to end 2025 at 3.9%, or roughly two rate cuts by year-end."])
    </script>
    <script>
        self.__next_f.push([1,"\",\"meta\":{\"title\":\"Bitcoin (BTC) Holds Near $84K Following Fed Decision\",\"description\":\"The U.S. central bank continues to expect the fed funds rate to end 2025 at 3.9%, or roughly two rate cuts by year-end.\"},\"authorDetails\":[{\"byline\":\"Krisztian Sandor\",\"authorSlug\":\"krisztian-sandor\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/53bff5a314aa0c494894d49f43bde129462c1c3f-7502x4503.jpg?auto=format\",\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAABwAF/8QAIhAAAQMDBQADAAAAAAAAAAAAAQIDBAAGEQUSEzFRIUFh/8QAFQEBAQAAAAAAAAAAAAAAAAAAAwT/xAAbEQACAgMBAAAAAAAAAAAAAAABAgARAxIxIf/aAAwDAQACEQMRAD8AAhoi40SM6XUKDucAdiku2wxDsSXGeQwUOA7yr36o10GU7OnRo8khTXIlOB5SteLbcS11Mx2kNoKD0PCKnZdjXDL8TaqWqwIIyNOkpdOGF7T8g47FVa8WdI2KHIcJUQPwVUnIAIPs/9k=\",\"alt\":\"U.S. Federal Reserve Chairman Jerome Powell (Chip Somodevilla/Getty Images)\"}}],\"title\":\"Fed Holds Rates Steady, Cuts Growth Outlook, Raises Inflation Forecast\",\"pathname\":\"/markets/2025/03/19/fed-holds-rates-steady-cuts-growth-outlook-raises-inflation-forecast\"},{\"articleDates\":{\"createDate\":\"2025-03-17T19:44:26Z\",\"publishedAt\":\"2025-03-17T21:00:15.509Z\",\"updateDate\":\"2025-03-17T21:00:15.509Z\",\"displayDate\":\"2025-03-17T21:00:15.509Z\"},\"description\":\"A crypto rally to new highs may have to wait until later this year, said Coinbase Institutional's head of research. \",\"meta\":{\"title\":\"Bitcoin News: BTC Price Stalls at $84K Ahead of FOMC Meeting, Analyst Warns of Another Leg Lower\",\"description\":\"Crypto prices could find a bottom in the next few weeks and rally to new highs later in the year, said Coinbase Institutional's head of research. \"},\"authorDetails\":[{\"byline\":\"Krisztian Sandor\",\"authorSlug\":\"krisztian-sandor\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAMEBQf/xAAiEAACAQQCAQUAAAAAAAAAAAABAgMABAUREiEGEyIxQXH/xAAVAQEBAAAAAAAAAAAAAAAAAAADAv/EABkRAQACAwAAAAAAAAAAAAAAAAABERIhUf/aAAwDAQACEQMRAD8A4E5mitYoRjTG0Z2WU73VN1m71lIljnWT6BX4FYD5a89jeqd6p83kGRZgzTciOuxUVB856S8l0zEnmN0VLJlLh3LMVJ/KKTQrf//Z\",\"alt\":\"\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/1c8a63f6ee7a414798e251b283ea2323da6d3264-4147x2765.jpg?auto=format\",\"width\":416,\"height\":234}}],\"title\":\"Bitcoin Edges Higher to $84K as Analyst Warns of Another Leg Down for Crypto\",\"pathname\":\"/markets/2025/03/17/bitcoin-stalls-at-usd84k-ahead-of-fomc-meeting-analyst-warns-of-another-leg-down-for-crypto\"},{\"description\":\"Analysts from QCP Capital suggest that while a rate cut is unlikely, any dovish signal could ignite upside momentum for bitcoin, potentially lifting altcoins in its wake.\",\"meta\":{\"title\":\"BTC, DOGE, XRP News: Dogecoin, Ripple XRP Lose 3% as BTC Traders Look to FOMC\",\"description\":\"Analysts from QCP Capital suggest that while a rate cut is unlikely, any dovish signal could ignite upside momentum for bitcoin, potentially lifting altcoins in its wake.\"},\"authorDetails\":[{\"byline\":\"Shaurya Malwa\",\"authorSlug\":\"shaurya-malwa\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/3a002f48caafa2490cd4b97e071543e635f6f7bc-6000x3375.jpg?auto=format\",\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAUGB//EACQQAAEDAgUFAQAAAAAAAAAAAAEAAgMEBQYREyEiEjNBU5Fh/8QAFgEBAQEAAAAAAAAAAAAAAAAAAQID/8QAGxEAAgEFAAAAAAAAAAAAAAAAABESAQIDEyH/2gAMAwEAAhEDEQA/AMu"])
    </script>
    <script>
        self.__next_f.push([1,"wm2CG4Uxl6Ty4tPlXFYymqbi9g0o5fWNj8WY2Ak4wt4O4G4+JncaiV+P2uc9xdqMGf5kopj7I22K2KKqa3NEhCEzn7hQhCz//2Q==\",\"alt\":\"Photo of Federal Reserve Chair Jerome Powell\"}}],\"title\":\"DOGE, XRP Down 3% as Bitcoin Traders Eye Wednesday Fed Decision\",\"pathname\":\"/markets/2025/03/18/doge-xrp-down-3-as-bitcoin-traders-eye-wednesday-fed-decision\",\"articleDates\":{\"createDate\":\"2025-03-18T11:59:34Z\",\"publishedAt\":\"2025-03-18T12:32:35.932Z\",\"updateDate\":\"2025-03-18T12:32:35.932Z\",\"displayDate\":\"2025-03-18T12:32:35.932Z\"}},{\"description\":\"Charlie Morris, founder of ByteTree, likens this gold rally to a \\\"proper gold rush\\\".\",\"meta\":{\"title\":\"Gold Leads the Way, BTC Follows; History Suggests a Familiar Pattern\",\"description\":\"Charlie Morris, founder of ByteTree, likens this gold rally to a \\\"proper gold rush\\\".\"},\"authorDetails\":[{\"byline\":\"James Van Straten\",\"authorSlug\":\"james-van-straten\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/885942a1e3da7da3639f616185325276a7b04225-1920x1280.jpg?auto=format\",\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAcEBQYI/8QAIhAAAgICAgICAwAAAAAAAAAAAQMCBAARBQYSQRMVUWFx/8QAFgEBAQEAAAAAAAAAAAAAAAAABAMF/8QAGxEAAgIDAQAAAAAAAAAAAAAAAQMAAhESIQT/2gAMAwEAAhEDEQA/AFT03hG9l5A1k2Uo8Rslktb/AJjP53oPA1+OXSQyf3JXsCMwdn2T+BnP1S6+o+Dq7JQZE7BBzScx3K/doIRGMEzA3N0Cfkmf2czvQp9mDS2BFrYsVOw7IN0Mp2212kea5GJ8TsYZSFsySSSSfeGNAOOyGwn/2Q==\",\"alt\":\"Stacked gold bars (Scottsdale Mint/Unsplash)\"}}],\"title\":\"Gold Leads the Way, Bitcoin Follows; History Suggests a Familiar Pattern\",\"pathname\":\"/markets/2025/03/18/gold-leads-the-way-bitcoin-follows-history-suggests-a-familiar-pattern\",\"articleDates\":{\"createDate\":\"2025-03-18T09:27:58Z\",\"publishedAt\":\"2025-03-18T10:13:29.262Z\",\"updateDate\":\"2025-03-18T13:11:13.465Z\",\"displayDate\":\"2025-03-18T10:13:29.112Z\"}},{\"articleDates\":{\"createDate\":\"2025-03-19T13:56:53Z\",\"publishedAt\":\"2025-03-19T17:07:57.531Z\",\"updateDate\":\"2025-03-19T17:07:57.531Z\",\"displayDate\":\"2025-03-19T17:07:57.531Z\"},\"description\":\"The Dubai Land Department's initiative aims to expand access and transparency for property investments using blockchain rails.\",\"meta\":{\"title\":\"Real-World Asset News: Dubai Starts Real Estate Tokenization Pilot, Forecasts $16B Market by 2033\",\"description\":\"The Dubai Land Department's initiative aims to expand access and transparency for property investments using blockchain rails.\"},\"authorDetails\":[{\"byline\":\"Krisztian Sandor\",\"authorSlug\":\"krisztian-sandor\"}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"width\":416,\"height\":234,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAUGB//EACQQAAIBAwMDBQAAAAAAAAAAAAECAwAEEQUGIRIVMRMyUVJh/8QAFwEAAwEAAAAAAAAAAAAAAAAAAgMEBf/EAB4RAAIBAwUAAAAAAAAAAAAAAAABAgMEFBMVISIx/9oADAMBAAIRAxEAPwBBtuYdxhtLlyLYKQVI8E1bS7PTBlAAj+xrJu6rDrq+o7HByePiqqffRuoUsoJZ/dyp8H8rTzpUesUSO21OWyxj2tlAUUMp8EUUrsNb1SK2VIiQo4x1Cil7wl6FgSP/2Q==\",\"alt\":\"Skyscrapers in Dubai (Kent Tupas/Unsplash)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/f50eacd5c63481f8ce96abd38d7e91f5aafb284e-1440x1080.jpg?auto=format\"}}],\"title\":\"Dubai Starts Real Estate Tokenization Pilot, Forecasts $16B Market by 2033\",\"pathname\":\"/business/2025/03/19/dubai-starts-real-estate-tokenization-pilot-forecasts-usd16b-market-by-2033\"}],\"opinionArticles\":[{\"storyType\":\"Opinion\",\"pathname\":\"/opinion/2025/03/18/crypto-for-humans-lessons-from-the-bybit-hack\",\"_type\":\"article\",\"authorDetails\":[{\"name\":null,\"byline\":\"Ben Charoenwong\",\"authorSlug\":\"ben-charoenwong\",\"__profilePicture\":{\"source\":{\"alt\":\"Ben Charoenwong\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/65511a3b252"])
    </script>
    <script>
        self.__next_f.push([1,"8b20ffefa3c49224dbc311f842bdc-1451x1558.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$21\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"alt\":\"(Clint Patterson/Unsplash)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/8e922d09b64e4533f3891d14e1293be06a720287-6024x4024.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAYDBwj/xAAiEAACAQMCBwAAAAAAAAAAAAABAgADBBEFIQYTFSJBUWH/xAAXAQADAQAAAAAAAAAAAAAAAAABAgME/8QAGxEAAgMBAQEAAAAAAAAAAAAAAQIAAwQREjH/2gAMAwEAAhEDEQA/AMwWw7gcx+4W1PTlRbe7fxnP31K+QkDaS02KtkHeXptNTdEwa8q6U8seRi15bbqlbksCmdoRaqVGLkkmEDOCSeRq85RQvfk//9k=\"},\"metadata\":{\"_ref\":\"image-8e922d09b64e4533f3891d14e1293be06a720287-6024x4024-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/8e922d09b64e4533f3891d14e1293be06a720287-6024x4024.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAYDBwj/xAAiEAACAQMCBwAAAAAAAAAAAAABAgADBBEFIQYTFSJBUWH/xAAXAQADAQAAAAAAAAAAAAAAAAABAgME/8QAGxEAAgMBAQEAAAAAAAAAAAAAAQIAAwQREjH/2gAMAwEAAhEDEQA/AMwWw7gcx+4W1PTlRbe7fxnP31K+QkDaS02KtkHeXptNTdEwa8q6U8seRi15bbqlbksCmdoRaqVGLkkmEDOCSeRq85RQvfk//9k=\",\"alt\":\"(Clint Patterson/Unsplash)\"},\"metadata\":{\"_ref\":\"image-8e922d09b64e4533f3891d14e1293be06a720287-6024x4024-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Opinion\",\"sectionSlug\":\"opinion\"}],\"_id\":\"fe036488-1266-49f1-ada1-b53166eefddc\",\"title\":\"Crypto for Humans: Lessons from the Bybit Hack\",\"articleDates\":{\"createDate\":\"2025-03-18T21:57:13.766Z\",\"publishedAt\":\"2025-03-18T22:04:03.297Z\",\"updateDate\":\"2025-03-18T22:09:25.058Z\",\"displayDate\":\"2025-03-18T22:04:03.297Z\"},\"description\":\"The exploit showed that human failings, not technical glitches, are the most important factors in such incidents, says INSEAD's Ben Charoenwong. \",\"meta\":{\"title\":\"Crypto for Humans: Lessons from the Bybit Hack\",\"description\":\"The exploit showed that human failings, not technical glitches, are the most important factors in such incidents, says INSEAD's Ben Charoenwong. \"},\"slug\":\"crypto-for-humans-lessons-from-the-bybit-hack\"},{\"description\":\"Blockchain-powered mechanisms like retroactive funding would incentivize building for impact and the long-term, says Meg Lister, General Manager at Gitcoin’s Grants Labs.\",\"storyType\":\"Opinion\",\"__image\":{\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAAAAYH/8QAIxAAAgIBAwMFAAAAAAAAAAAAAQMCBAAREiEFBjEVIjJBYf/EABcBAAMBAAAAAAAAAAAAAAAAAAECBQb/xAAaEQACAgMAAAAAAAAAAAAAAAAAARIhETFR/9oADAMBAAIRAxEAPwCl6f3HX9UabadpTHWMwSDp9cYR3bCVmRdHegnd7yfH5k2yIs91MDxvAV48ZMuu2IU7ioNIXFhERoOOczKvRfis2bjG8q0uDYPAhKI2jjgYzD6TmtUTNrCQdPmcYsX0EUf/2Q==\",\"alt\":\"Caden Tormey/Unsplash\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/12ff3e583b35197a34a6c540aaac50b3822d5dda-3840x2160.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-12ff3e583b35197a34a6c540aaac50b3822d5dda-3840x2160-jpg\",\"hotspot\":null,\"crop\":null}},\"title\":\"How Funding Fragmentation Holds Ethereum Back\",\"articleDates\":{\"createDate\":\"2025-03-18T21:15:39.208Z\",\"publishedAt\":\"2025-03-18T21:48:00.502Z\",\"updateDate\":\"2025-03-18T21:48:00.502Z\",\"displayDate\":\"2025-03-18T21:48:00.502Z\"},\"_type\":\"article\",\"meta\":{\"title\":\"How Funding Fragmentation Holds Ethereum Back\",\"description\":\"Blockchain-powered mechanisms like retroactive funding would incentivize "])
    </script>
    <script>
        self.__next_f.push([1,"building for impact and the long-term, says Meg Lister, General Manager at Gitcoin’s Grants Labs.\"},\"slug\":\"how-funding-fragmentation-holds-ethereum-back\",\"authorDetails\":[{\"name\":null,\"byline\":\"Meg Lister\",\"authorSlug\":\"meg-lister\",\"__profilePicture\":null}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/12ff3e583b35197a34a6c540aaac50b3822d5dda-3840x2160.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAAAAYH/8QAIxAAAgIBAwMFAAAAAAAAAAAAAQMCBAAREiEFBjEVIjJBYf/EABcBAAMBAAAAAAAAAAAAAAAAAAECBQb/xAAaEQACAgMAAAAAAAAAAAAAAAAAARIhETFR/9oADAMBAAIRAxEAPwCl6f3HX9UabadpTHWMwSDp9cYR3bCVmRdHegnd7yfH5k2yIs91MDxvAV48ZMuu2IU7ioNIXFhERoOOczKvRfis2bjG8q0uDYPAhKI2jjgYzD6TmtUTNrCQdPmcYsX0EUf/2Q==\",\"alt\":\"Caden Tormey/Unsplash\"},\"metadata\":{\"_ref\":\"image-12ff3e583b35197a34a6c540aaac50b3822d5dda-3840x2160-jpg\",\"hotspot\":null,\"crop\":null}}],\"sectionDetails\":[{\"name\":\"Opinion\",\"sectionSlug\":\"opinion\"}],\"_id\":\"c1725faa-db39-4ad9-a933-7bd228850ec2\",\"pathname\":\"/opinion/2025/03/18/how-funding-fragmentation-holds-ethereum-back\"},{\"_id\":\"53ed37e8-326d-4e81-8485-b7f94dc23c45\",\"_type\":\"article\",\"description\":\"Limiting access to the chain that launched Trump’s memecoin is like shutting investors out from Amazon or Google during their initial offerings, says Hadley Stern, at Marinade Labs. \",\"slug\":\"the-u-s-deserves-better-crypto-etfs-let-s-start-with-solana\",\"authorDetails\":[{\"name\":null,\"byline\":\"Hadley Stern\",\"authorSlug\":\"hadley-stern\",\"__profilePicture\":{\"source\":{\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGQABAAMBAQAAAAAAAAAAAAAAAAIDBQQH/8QAJhAAAgEEAQIGAwAAAAAAAAAAAQIDAAQFERIGIQcTFCIxYUFCgf/EABcBAQEBAQAAAAAAAAAAAAAAAAMEBQb/xAAeEQACAQQDAQAAAAAAAAAAAAABAgADERIxBDJBkf/aAAwDAQACEQMRAD8Aj09PFc5deUi6Lb477kAVZfZL1OUlVQIuPwQ3YVk2VhBjcgjeeAre4MR7tfVcPUV+MdM9w0Y4TgrGNa/prJThs6ZBb3ipVUKQdyc900krOtsXB/YfmlX9PXFpHiohLfQK57kb+KVIy1FNsT8MPIH2ZMszvkJnY7ZX4j6FaniAiy43DsyjbISTSldmvRpCdieYXMrpPIqnQB0KUpUpiT//2Q==\",\"alt\":\"Hadley Stern\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/d527a648d6f10920f32e13580162d6bc5a25bfa2-400x400.jpg?auto=format\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAYCBQj/xAAgEAACAgICAgMAAAAAAAAAAAABAgMEABEFIQYSQWGB/8QAFwEAAwEAAAAAAAAAAAAAAAAAAQIDBP/EABsRAAICAwEAAAAAAAAAAAAAAAABAgMRITFR/9oADAMBAAIRAxEAPwDO1GjI84aNAUA2STh6Rx1LAaEPIzaDe2iPzGXw/koatOzXalBPPMh07g7j+xkbIjm46tHWVXn7klZ1A7HwM0ZhPa0PhriE8ULTDaxMRhl9A0BQmWV0ffYUHWGSd0V6FVyZ/9k=\",\"alt\":\"Solana Hacker House in Miami (Danny Nelson/CoinDesk)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/2d7e73bc35c75a46c22da3d8dc84f1cdf9fd53c1-3622x2717.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-2d7e73bc35c75a46c22da3d8dc84f1cdf9fd53c1-3622x2717-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/2d7e73bc35c75a46c22da3d8dc84f1cdf9fd53c1-3622x2717.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAYCBQj/xAAgEAACAgICAgMAAAAAAAAAAAABAgMEABEFIQYSQWGB/8QAFwEAAwEAAAAAAAAAAAAAAAAAAQIDBP/EABsRAAICAwEAA"])
    </script>
    <script>
        self.__next_f.push([1,"AAAAAAAAAAAAAABAgMRITFR/9oADAMBAAIRAxEAPwDO1GjI84aNAUA2STh6Rx1LAaEPIzaDe2iPzGXw/koatOzXalBPPMh07g7j+xkbIjm46tHWVXn7klZ1A7HwM0ZhPa0PhriE8ULTDaxMRhl9A0BQmWV0ffYUHWGSd0V6FVyZ/9k=\",\"alt\":\"Solana Hacker House in Miami (Danny Nelson/CoinDesk)\"},\"metadata\":{\"_ref\":\"image-2d7e73bc35c75a46c22da3d8dc84f1cdf9fd53c1-3622x2717-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Opinion\",\"sectionSlug\":\"opinion\"}],\"title\":\"The U.S. Deserves Better Crypto ETFs. Let's Start With Solana\",\"pathname\":\"/opinion/2025/03/17/the-u-s-deserves-better-crypto-etfs-let-s-start-with-solana\",\"articleDates\":{\"createDate\":\"2025-03-17T15:47:04.035Z\",\"publishedAt\":\"2025-03-17T15:54:50.435Z\",\"updateDate\":\"2025-03-17T15:54:50.435Z\",\"displayDate\":\"2025-03-17T15:54:50.435Z\"},\"meta\":{\"title\":\"The U.S. Deserves Better Crypto ETFs. Let's Start With Solana\",\"description\":\"Limiting access to the chain that launched Trump’s memecoin is like shutting investors out from Amazon or Google during their initial offerings, says Hadley Stern, at Marinade Labs. \"},\"storyType\":\"Opinion\"},{\"description\":\"M\u0026A could be critical for building resilient and scalable decentralized organizations. But, after 65 deals and counting, we’re not there yet, say Joshua Tan, Jillian Grennan and Bernard Schmid.\",\"meta\":{\"title\":\"The State of DAO M\u0026A\",\"description\":\"M\u0026A could be critical for building resilient and scalable decentralized organizations. But, after 65 deals and counting, we’re not there yet, say Joshua Tan, Jillian Grennan and Bernard Schmid.\"},\"slug\":\"the-state-of-dao-m-and-a\",\"sectionDetails\":[{\"name\":\"Opinion\",\"sectionSlug\":\"opinion\"}],\"pathname\":\"/opinion/2025/03/13/the-state-of-dao-m-and-a\",\"articleDates\":{\"createDate\":\"2025-03-13T14:15:40.686Z\",\"publishedAt\":\"2025-03-13T14:24:51.547Z\",\"updateDate\":\"2025-03-13T14:28:38.495Z\",\"displayDate\":\"2025-03-13T14:24:51.547Z\"},\"_type\":\"article\",\"storyType\":\"Opinion\",\"authorDetails\":[{\"name\":null,\"byline\":\"Joshua Tan\",\"authorSlug\":\"joshua-tan\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/27d2a2e9b7fd8b9174c8022ee9043c893edf7a52-192x193.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$22\",\"alt\":\"Joshua Tan\"}}},{\"name\":null,\"byline\":\"Jillian Grennan\",\"authorSlug\":\"jillian-grennan\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/7882e3c2dc618e6a0e96a755f1af3239e9dbf805-500x500.jpg?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGQABAAMBAQAAAAAAAAAAAAAAAAUGCAQH/8QAJBAAAQMEAgICAwAAAAAAAAAAAQIDBAAFBhESIRNBBzEUQnH/xAAXAQEBAQEAAAAAAAAAAAAAAAAFBgAE/8QAGxEBAAMBAAMAAAAAAAAAAAAAAQACEQMEMZH/2gAMAwEAAhEDEQA/AOn5AyebDDUO3PFt99XHkPsCpDB5V2sLsaVNnKfhuKAebWd637rznNbi2jJ4fm3wJCSR+u/dWm7Sm2MYL6nVFZ00jZ+zvqjhd2M8+VWmZNMJZbUhKk9gjYpUNjc8v2GA4o7UWU7/ALqldgibCWqOTFzUhy4XIKlnyE991bMllOOw7YwrXjCuWgPdKUeepR2AshJKFnV/t7H40aZxaQdJBTvVKUrVs5KWvicGotD4T//Z\",\"alt\":\"Jillian Grennan\"}}},{\"name\":null,\"byline\":\"Bernard Schmid\",\"authorSlug\":\"bernard-schmid\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/b29904260deb34f751eec8cbaf5c9f7f16378bac-200x200.jpg?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGQABAAMBAQAAAAAAAAAAAAAAAAEGBwQF/8QAIRAAAQQCAgIDAAAAAAAAAAAAAQACAwQGETFxBWESE0H/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8AxGvCZJGsZy8gLQskwat4rGqvkaM9iV5194kGmg+lmxuNgkGifmDyPxXPI8uht4tTqtuullDtviY0gdn2grxABRcjLUb27Emu0QeG87kd2oREEjhERB//2Q==\",\"alt\":\"Bernard Schmid\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYa"])
    </script>
    <script>
        self.__next_f.push([1,"HSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAaABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAQFBgP/xAApEAACAQMBBQkBAAAAAAAAAAABAgMABBESBRMUITEiMjNBQlFhcYLR/8QAGQEAAgMBAAAAAAAAAAAAAAAAAwQBAgUG/8QAGxEBAAMAAwEAAAAAAAAAAAAAAQACAxESITH/2gAMAwEAAhEDEQA/AKFus1wxEKFsdT5Cqmz7OIsj6Tdj1FDyT7pq+tYYGtgVnU6sLuen6+K4qzh4BcHLFyFNn3f3XPGZWbZbsTRW0to8QMUqso5cvKil7DfNATLJaatR8Icsf2imQ8i1gGNXdhPcbowTmIKcsuM6h7VDW24aSBJFawZ5jiNO0Jvv2rX+muSKGlUsASDyyOlWaH2RTRPInsnZ8sdqRwCW/bJ06s5+aK0ad2iimQEG6q8z/9k=\",\"alt\":\"(Shubham Dhage/Unsplash)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/a5f9ea2ea6ccd9e2e426399160d506da3548cede-3400x4400.jpg?auto=format\",\"width\":1920},\"metadata\":{\"_ref\":\"image-a5f9ea2ea6ccd9e2e426399160d506da3548cede-3400x4400-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/a5f9ea2ea6ccd9e2e426399160d506da3548cede-3400x4400.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAaABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAQFBgP/xAApEAACAQMBBQkBAAAAAAAAAAABAgMABBESBRMUITEiMjNBQlFhcYLR/8QAGQEAAgMBAAAAAAAAAAAAAAAAAwQBAgUG/8QAGxEBAAMAAwEAAAAAAAAAAAAAAQACAxESITH/2gAMAwEAAhEDEQA/AKFus1wxEKFsdT5Cqmz7OIsj6Tdj1FDyT7pq+tYYGtgVnU6sLuen6+K4qzh4BcHLFyFNn3f3XPGZWbZbsTRW0to8QMUqso5cvKil7DfNATLJaatR8Icsf2imQ8i1gGNXdhPcbowTmIKcsuM6h7VDW24aSBJFawZ5jiNO0Jvv2rX+muSKGlUsASDyyOlWaH2RTRPInsnZ8sdqRwCW/bJ06s5+aK0ad2iimQEG6q8z/9k=\",\"alt\":\"(Shubham Dhage/Unsplash)\"},\"metadata\":{\"_ref\":\"image-a5f9ea2ea6ccd9e2e426399160d506da3548cede-3400x4400-jpg\",\"hotspot\":null,\"crop\":null}},\"_id\":\"6abfd61a-efce-4cf1-8047-32a21f0b7d76\",\"title\":\"The State of DAO M\u0026A\"}],\"pressReleasedArticles\":[{\"description\":null,\"imageUrl\":null,\"imageAlt\":null,\"featuredImages\":null,\"title\":\"LBank Launches $100M Futures Protection Fund for Traders\",\"pathname\":\"/press-release/2025/03/12/lbank-launches-usd100m-futures-protection-fund-for-traders\",\"_type\":\"press_release\",\"storyType\":null,\"videoId\":null,\"videoPlataform\":null,\"sponsor\":{\"title\":\"LBank\",\"slug\":\"lbank\"},\"articleDates\":{\"createDate\":\"2025-03-12T15:07:08.072Z\",\"publishedAt\":\"2025-03-12T15:10:08.272Z\",\"updateDate\":\"2025-03-12T15:10:08.272Z\",\"displayDate\":\"2025-03-12T15:10:08.272Z\"},\"meta\":{\"title\":\"LBank Launches $100M Futures Protection Fund for Traders\",\"description\":null},\"slug\":\"lbank-launches-usd100m-futures-protection-fund-for-traders\",\"sectionDetails\":[{\"name\":\"Press Release\",\"sectionSlug\":\"press-release\"}],\"authorDetails\":[{\"name\":null,\"byline\":\"CoinDesk\",\"authorSlug\":\"coindesk\"}]},{\"videoPlataform\":null,\"title\":\"Saga Launches Liquidity Integration Layer (LIL), Revolutionizing Cross Chain Liquidity\",\"slug\":\"saga-launches-liquidity-integration-layer-lil-revolutionizing-cross-chain-liquidity\",\"storyType\":null,\"featuredImages\":null,\"sectionDetails\":[{\"name\":\"Press Release\",\"sectionSlug\":\"press-release\"}],\"pathname\":\"/press-release/2025/02/24/saga-launches-liquidity-integration-layer-lil-revolutionizing-cross-chain-liquidity\",\"description\":null,\"sponsor\":{\"title\":\"Saga\",\"slug\":\"saga\"},\"articleDates\":{\"createDate\":\"2025-02-24T16:54:07Z\",\"publishedAt\":\"2025-02-27T20:19:35.711Z\",\"updateDate\":\"2025-02-27T20:19:35.711Z\",\"displayDate\":\"2025-02-27T14:00:00.000Z\"},\"meta\":{\"title\":\"Saga Launches Liquidity Integration Layer (LIL), Revolutionizing Cross Chain Liquidity\",\"description\":null},\"imageUrl\":null,\"videoId\":null,\"_type\":\"press_release\",\"authorDetails\":[{\"name\":null,\"byline\":\"CoinDesk\",\"authorSlug\":\"coindesk\"}],\"imageAlt\":null},{\"title\":\"Web3Port Foundation Commits $100M to Boost Liquidity on Novastro, the First RWA Project on Movement\",\"pathname\":\"/press-release/2025/02/18/web3port-foundation-commits-usd100m-to-boost-liquidity-on-novastro-the-first-rwa-project-on-movement\",\"authorDetails\":[{\"name\":null,\"byline\":\"CoinDesk\",\"authorSlug\":\"coindesk\"}],\"_type"])
    </script>
    <script>
        self.__next_f.push([1,"\":\"press_release\",\"description\":null,\"slug\":\"web3port-foundation-commits-usd100m-to-boost-liquidity-on-novastro-the-first-rwa-project-on-movement\",\"imageAlt\":null,\"featuredImages\":null,\"videoId\":null,\"meta\":{\"title\":\"Web3Port Foundation Commits $100M to Boost Liquidity on Novastro, the First RWA Project on Movement\",\"description\":null},\"videoPlataform\":null,\"articleDates\":{\"createDate\":\"2025-02-18T17:19:32.724Z\",\"publishedAt\":\"2025-02-18T17:29:28.387Z\",\"updateDate\":\"2025-02-18T17:29:28.387Z\",\"displayDate\":\"2025-02-18T17:29:28.387Z\"},\"storyType\":null,\"imageUrl\":null,\"sectionDetails\":[{\"name\":\"Press Release\",\"sectionSlug\":\"press-release\"}],\"sponsor\":{\"title\":\"Novastro\",\"slug\":\"novastro\"}},{\"title\":\"LTP Secures Hong Kong SFC Licenses, Expanding Regulated Virtual Asset Prime Brokerage Services\",\"pathname\":\"/press-release/2025/02/18/ltp-secures-hong-kong-sfc-licenses-expanding-regulated-virtual-asset-prime-brokerage-services\",\"_type\":\"press_release\",\"slug\":\"ltp-secures-hong-kong-sfc-licenses-expanding-regulated-virtual-asset-prime-brokerage-services\",\"storyType\":null,\"sponsor\":{\"title\":\"LTP\",\"slug\":\"ltp\"},\"videoId\":null,\"videoPlataform\":null,\"sectionDetails\":[{\"name\":\"Press Release\",\"sectionSlug\":\"press-release\"}],\"articleDates\":{\"createDate\":\"2025-02-18T15:21:26.311Z\",\"publishedAt\":\"2025-02-18T15:23:35.865Z\",\"updateDate\":\"2025-02-18T15:23:35.865Z\",\"displayDate\":\"2025-02-18T15:23:35.865Z\"},\"meta\":{\"title\":\"LTP Secures Hong Kong SFC Licenses, Expanding Regulated Virtual Asset Prime Brokerage Services\",\"description\":null},\"authorDetails\":[{\"name\":null,\"byline\":\"CoinDesk\",\"authorSlug\":\"coindesk\"}],\"description\":null,\"imageUrl\":null,\"imageAlt\":null,\"featuredImages\":null},{\"title\":\"ORACLE RED BULL RACING AND GATE.IO EXPAND BLOCKCHAIN’S GLOBAL REACH WITH ANNOUNCEMENT OF MULTI-YEAR PARTNERSHIP\",\"_type\":\"press_release\",\"description\":null,\"meta\":{\"title\":\"ORACLE RED BULL RACING AND GATE.IO EXPAND BLOCKCHAIN’S GLOBAL REACH WITH ANNOUNCEMENT OF MULTI-YEAR PARTNERSHIP\",\"description\":null},\"slug\":\"oracle-red-bull-racing-and-gate-io-expand-blockchain-s-global-reach-with-announcement-of-multi-year-partnership\",\"storyType\":null,\"imageUrl\":null,\"videoId\":null,\"sponsor\":{\"title\":\"Gate.io\",\"slug\":\"gate-io\"},\"pathname\":\"/press-release/2025/02/14/oracle-red-bull-racing-and-gate-io-expand-blockchain-s-global-reach-with-announcement-of-multi-year-partnership\",\"imageAlt\":null,\"sectionDetails\":[{\"name\":\"Press Release\",\"sectionSlug\":\"press-release\"}],\"articleDates\":{\"createDate\":\"2025-02-14T21:47:23Z\",\"publishedAt\":\"2025-02-14T21:49:06Z\",\"updateDate\":\"2025-02-14T21:49:06Z\",\"displayDate\":\"2025-02-14T21:49:06Z\"},\"authorDetails\":[{\"name\":null,\"byline\":\"CoinDesk\",\"authorSlug\":\"coindesk\"}],\"featuredImages\":null,\"videoPlataform\":null}],\"isMobile\":false}]]\n23:I[51155,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"SectionModule\"]\n24:T7aa,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFX0lEQVR4nBXMeU+bhwHA4fc7TNsUrdr+mlIlUbouFwFcYhwwZzAEgi98YYwNtsEYG+MLgw02l21uDIZgMFdCOBOggdEkpW3WdO00TeuhTtOySFulfYfftOcDPMLyYoKVuQGyqT4mBp10d+iJeG0cr87x9sU+/z5a5vu1ET5LhXg0FmQ20cvEaIjEkJ9YuAu324rRYsDQbMBityBsrs6ytRxn62GU1VQP66kQZ5vT/PjykJ/On/Pu2QrfZ4f542Q3u4MOUgMuEjE/IzEf4Z5ObHYTDYYGjBYTDpcTYXwsRnoyzM7yIKdPkrw5mOKfpyv89/wpP53t83Yvww/ZOF+OudgJ6Jlwahnw2oj2uQl429EZlBSVF1EguUNZZRlCR0cLff520okAh6txvtmd4F+Hs/znZJV3Rxv8Y3uRb1eSvIq7yHbK6TdU4GlWEPK24+1qQ62tJ7cwjyu/u8LN29cRdFoltmYdrhY9yXAnT+cjvF6O8XlmlE/mhnie7GU73MlkmwafsgRTeS6G+yW4HRa6XHZU2no+Ki7gVt4NikoK/x+qMeqU6OQy7E1KEsE2FmIuxoNWo"])
    </script>
    <script>
        self.__next_f.push([1,"m1aIiYFTnklaqkIWf6HSK9fQibJo6WpgdYWI7K6KvIkIvLFeZTdK0WwtdmwWk00N6qxNzUQD7SxOOgi3t1ExKJgrL2RSJMSrTSfqpwrVNy8RG1hDpq6e9TVVSORSriRf4sbubcQiQsQ+ocG6e3vo9vXRcDTwcORIEezYbZiLh71Ong50c/TAQ/hhns47olwVImwyMSo75dTU1tFeVUZkpK7iIskSEqKEJbW1khnlhifmWI0PsTGzDBfrSb5Oh3lZSLIYdTDQruBiKqCZJOM6ZYaPKoytHIZDToVDXo1Sq0KpUaFQqNE2D8+5snBAauPN5lbmCc7M8qX2ThfLQyQ9VkJKKpoLLyNSnSNDpmYHmUJzdUS1PIaTBYjZpuZZqsZi60Fs82CcHhyyt7REY/39ljKrjA9EmMp4mLKZcSnkuG9X06bVEzN9avcufJbxFcvUlqQg9Goo8vXRZffg9PjwuF20tbpQDg+PePZxyccHB2z+3iP2VgCp06DskSMprgAd20ltnIpZb+/yvu/usCvf/kLJPkiQsEeZuZSjE1PEouPEB6MEhqIIHz6xWvOXr3i9PknvN4753h8G3dDK3dv51Gcd5uau2KkuTncuHyJ31y4wIWf/ZySnAISngjbC5tsrW2RWc4yk04zkZpF+NObP/PiD6/Y3XjKy6Uz3ky/IOVIIi+ppVxaSl1NNeVSKaLcXC5fvMj7771H2dWbBGvNrHun+Hhym2cP91hf3iSdySB8d/I3Pt84Z3E4y2Rgjq3eTba8K/TovDTKtZj0OvRqJQ9klVTcyaHs2mUeXMvBJq4lrnCz5ZzhuH+DnYkNMgsZhHeP/853S39hP3ZA2D5Mt7GHZEucseZB3IpWzPUKWlS1ODXVOOXFmCvuoJeU0lpYR0+liRlNiA3bBI/882SG5xHeLv/Aj/N/5U3inKw3i0cfpPVBO36lh7DWh8/Ygc9kYNSqIGmT49EqMFUqsRUpCVaaSCi7STdGydjiLHYlEL6d/oav45/xReyMs/Axmc6HdCjcaEv1uFVdjHoniYeGmPU7WPDb6TXbsVbq6ZRqCFdbiau6mdGHmW+OkmodQDgfeM6xf5tD7xNOgvsc+ncYb06gLtZQW1iP1xxmvD9NamCE+VCQPqODjjI9gQoTg/WdJBv8TOl7mTVGmDb2Iuy4Vlmzp3nkWGLXvc6ee50V2xwt5WZEH3yEvFhN1D3G9OA848EoAZUVd6mBSI2dUWU3Y5oAk/oQ04Y+Jg09/A+5fsrzwBfh9QAAAABJRU5ErkJggg==25:T6a2,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEmklEQVR4nGXTy1NTVwDH8fwp7abT6aZd9DHt2M501PIQQdAIWhwVlEIgCYG8IIQLhARCCMhLRAjPIKCA4R3I+yY34RVq1dE6XbTTRWe66qZdfztcBXFc/HZnPvP7nTNHEYtLxKUkUjJJMplke3ubYCCAw9bMmW+/5tOPPuCLjz8k4/NP+DHjFCZ1GbPTXlKpFHt7e3J2d3ePoxATEomkRDKVlA9JiQTTk+OUXSsi86vPKD57isaSIsatOmaaa3Fqb9FpE/BvrB+DeydQhZhIvAbftIuEQwx2Oam7eZmu8qusdTby7OEofwUW+XNlihWXlXajmhnvBDs7O6TTafb3949hRTyeQJLeglv+DYY6bExa1aTvt/P3xgP+TW7y306QfyI+0qPd9NdrGLnbK685ODiQwSNUEU+8BVPb2/jX17jbJuCpVxHtEXg5O8jvK9P85pvi+ewQ4b5W7hhUDHQ5EWOx90ExESdx3DCFf20Ft2BGKFXSp7nGtKDF57Sw2GZirkXHaF0FzqobeFytSJEQP78PiiSkBMmkJINby4/pqdfhuK1kWH+TB41qfG1m1l31bLhMLNq0zFgqCfa7OAgHOEjvk34DHuZ1w0SCpCTJrxxa9jEm6BnXlxDoMBDtqifVb+PZmJtfp+/wZLSdnf4Wnk6P8FSMkD4ETzyMIhYXOZp9CMa2/Mz3Ollo0ZLoNhHvqEVymXnpcfLHbC8vptzsedz8sjzPk+2UjB2BcsOoGOPkPUrxOJuPH7LU10qos5Z4ew27nVZeeTp55XWTum8j4OkhFfTLU9MnQLlhVIwixkV59tFri5Ewvol7zLfriXaaeD7i5oW3H2nIga+rgceeAcKBALt7e+/cnwxGYhFiYox4PH6MHmbNN899Rz1jDZVsdAusdgtM243M9LUz551kZm6eQDAs/453wFAkQiQWJSaKMnqYaDTG4sIjnI1GzDfyaVNdoa9Ohbe3jdXFh3gmvNhdPQwOj7GyskYsJrK9s/P664XCYcLRCNFYlHA4zNLSMkNDw9habBgqb1NTlI29ooi5wQ7E4Aa+5VXsrl60RgF9XRP2djfDngl8SysEQxEUwXCYUCTMht/P+OQkDY3NFF8vpbj4OrryUiwlSu61GEiG/IhxiZ6BEXQmAZXWTLnaQGW1CUNdM3bnHQbueVAEQiHW/X6GRjxUVevJLSjkdEYOeflKbhRfpVSZS3ujmc3NTbyzC9RZ7W8woxyV1kSVzkKNqRmT1YFiMxBk9tECJotA7sUizmTlcTb7AufzleScyyb79HeYa3WMTUzhcPWgrqmnQmOSU6mto6qmAa3hcH4rBosDxYZ/i6GRMUp+qiIj9xIZOQVk5SkpKCwm73wOyrxz2G0tuHsGqDEJcqtDTHWI6SxoahupMbWgtzjQNzhQrKyu09ndS2FxCZl5SrIuXCa7oIgLyivkZP7AlYt5CEITdYKdco2RsioD5RozldUWqmqsaAwCOnML1W+iWPQt09zaRv7lYjJzL5GdX0hWfiGZ587z/Tdfkp95FpVKQ4XWxK1KPWVqExXyVCtqvYDaKKA1NqM2NKE2NvE/FUFmh8AnN4MAAAAASUVORK5CYII=26:T40e,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAIAAADwazoUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACqklEQVR4nAGfAmD9AE9CMVxTO2NcQGZdQmdgRGNbQlBFMz0yJVBRNnyIZ5CYiJCTjpOUk6ilp9DNztbQ1KObonZwdmJhYVpcWABTRTRfVjxlXkJnX0RpYUZlWUBUQzBGNCZdTj6WkIG1ta2kpqGUlJGcmZi3s7O/uruhm52EgH92dW5wcGMAVUg2YFc9ZV9CZ2BEZV1EW004SjcmPiwgUkA2kYN9zsrH0M/Ns7KvmJeTlJGOlpSRkI2Jh4N8e3hrdHFhAFZKNl9XPGVfQWReQlVOOUA1KDUoHjElHUE1LnxxbsnDxOXh5NLQ0KKhnICAeX19dYGAd397cXRvYm1nWABaTTheVztjXz9gXD9HQi8tJR0oHxkqIRs6Mi1zamq8tbnd193SzdGgnpp3eG10dWl/fXJ9eHBybGJsYlYAcFg+YVk6YF49XVs9Qz4sKSEaJR0XKSAaOjIucGdosqmv1MzTzMfLnJqVcXNkcXJkhoV+jomIiIB9gXZuAI1qRmdcOl1cOltaO0A7KSceGCQbFyYfGTQsKWVbXaWcocnByMjCx5uZk21wX29zZJKSj6ejqKmipKignwCWb0VnXDhaWzhZWTlCPissJR0nIB0qIx80LSpdVFWYj5W5sbe4srWRkYhnbVltc2OXmJiwrLO0rrK6tLgAjWc8YFgzVFYzVlg1TEswQT4tPzoyRT87T0lGamJijYSIm5WXk5CNen5uYmtTbXRilJWVpaGon5mcnJaaAIBcNV1VM1laOGBhQGNjRWRiSmhkVnNsaHt0coV9fo6Gh4+KiYiFfoGCcnuAbIWHeqCdnqWepI2HiHl2dQB9WzxpXkRwbVR/emSJgnCOhneUioKckJCelJSilpimnJ6tpaWvpqSxqKKwqaKyq6e8tLa8srefmJh8fHYUwCY6bgScZgAAAABJRU5ErkJggg==27:T8c2,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAA"])
    </script>
    <script>
        self.__next_f.push([1,"bCAIAAADzvTiPAAAACXBIWXMAAAsTAAALEwEAmpwYAAAGM0lEQVR4nEXTeVNThxoG8PMhLJAQlAaKLIYl7FBZpoJWhVZBwQWBINwqIeUCooN1oeBaRbSAFZTS4AKD2IuyGAgJSghZSE5ClpOQPSdnP+x+gDvh3pnOPP/+3mfmmXkBH+z1+bw+nweGXV7Y6fU6PR6Hy2V3uqxOl8XhtNjs5hWbacVmsq4YIesyZNkJpDNBIIDAMOKDEcSDIG4f4vb53DDs9Hjsbo/N5fdWuwOy2c07J4wWq2Eny2ZIZzRr/o8x1B8U9aKIB/G5YK/D47H7sdNit0O2neYVm9G64peQRWeGtEbzEoD6YBTxYSiCYwiG+jDUiyFuFHYiHgfstrmdVofNbF8xrFgNVuuy1arfkf9gBENQHEUJDCFRH4l4CZ8b9ThcFhOk1xhBlcWgsUHgCgRaIK3ForVYQAgCTZDGaFYD/k6/RCkMpRGERmDM7dAp5aOvXz19/Kins+PdkFAlmzGCC+ZlhdmkgiANBGlM0JLRpAIIDCMxnMawVRRbRRDa5zVr1S+6u2t5VaWFhaUFBYJq3rPH96VTo6By1gDKTAaFyaQymZQGg8KPKRxfw/E1DFvHUMLlnH0/9mtDvaCkuPHksYaiQv7xgiZeWW9Hu3RiSCsXGbSfjXq5cVm+rF8A/LU4sU7gGzi+iWNeCzT5Sjhw4/Lf1xumWxsmWmr/4lf8eu5Em6B6pK9DPv0WVMwYtJ8N4Lwe/AxQOLFGkJsksUXgWxjq0OlmhP2Szluazlb9g6vKtobx5pqu6tLrFSW97VdmR/uXPk/q1VK95pNuaQ5YJagNktoiiW2S2ERRu1YjHng+eb9V3H5l8XazqKV24ELZg3NF188cf3KlbmqwRyX9oFPO6tRSrVoCrJHUJkltk+Q2SWxhqEevk70Rjt9t/XCtUfxL/TC/squypKO8+HZZcdel2smBLtXse1AhBlUSrUoCrP8PU9QXktzGcdIKWafGwL4n6odt8zebRi6Uv6w5I/zpbE/1mf6WetHgHyrJuFYh1qokGpUE2KDoLYreJukvJPkFxzdcDnxB6h0ZsPc9Ut+5OlF/fqKu8m8Bb6CON3TrF8mIcGluClycBZVSP16nVzdpepvy420C34S9FKjyfRiy9j6S37wyKTg/KeC9+7nq5eW6sa6HC+OjWplYp5jTKuY0ijlgjaI3KGqLpLdJagvHNxGEhozw9BjU91h2rXmcX/Wfusqhf9e8aWsRCV8oZyZB+SdQMa9Z/KTewWtrJL1B+jffwIl1BKUdNp9MbHvdt/Rb6/Sli2/rKvoFVcK2q6JXf6okIlA+r1mcV8s/KRelwBq9sUqu0jhJYQSJoLgHdptMFslH0/AL5ZNbUy38lxfPPuSVdjTy3/b+Lvv4QTUvVcrmFmUSuUwM0NQ6SaxiCO7aeST1our9yNuxZ90qYY/qj/sfb9YP1p27euKooLSo80bL2KsB8cSYdHpCMjMhEU8AFLkOw9iy3iwSSQYH39y791Bwgd/G/0ncfXfp+QPx7Uv9dWW8/Kz8jNTzpSfvXWvp73o8/Nfzd8PCsXevAQhyisWy7qf9jc3Xy8prvj/8Y05GVk3hkeHWpoWe9qk7TffOn8xLSYgMZ6dyE44d/v4ir+Lm5abOu+3PuzqAp70vmy63Fp2syD1QkL4/j5uYkbQv/kxO1rPaCtHtS6M3BM2nf0yL5+wJYe3ZvTtqb2Racsrh/LzyUyX1F/4FlJTzDxWezsg6xE3eH5+UGcdNT4pLKs7M+O30sZHG6v6feVUF+bHRUSwWi8FgMoNZbHZ4TMy+lOSU3Owc4MCRU9n5x9OzD8UlZkRzEqNik+ISkg+mpTUX5D+tOnWnsvSH3KzwsHAGMzggkBEQxAwO2cMOj4iO4cTFc4Hcgycyc4+mZR1MSN4fER0fFsmJ4nDTEpPO5nzbcuLoxaKC7G8zQ9lhgUHMgEDGrgBGQFBwyJ6wiL3RMfs4QHZeUUpmXmJadkJqVhQn6etvYsIjOfHx3MOZqbwjBwq+y4mNS9gdyg5isgIZwbsCGLsCmExWKDssIiIiEsg+WJycfiCWmx6blMHhpoft5YSGR+2LS8hNSz3+XXZGampYRFRIaDgjJDQweHdAEOuroGAmKzSUHfE1+5v/ApEL7chY1r5mAAAAAElFTkSuQmCC28:T54e,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAADmklEQVR4nHWU228VVRTG+0fQM3PmzDl7rb3P6Z1Ca2hpoba05dIimBgEaqpRIAomkvpgMVIuQgw3Abm8KJpWJIi1rbbRHkrjqxFfwAd9kPBiTAyI8Cf8zJzp9VAevoe9ZvZv1nzf2rvE8w2eLzPSWEl9ej1Xi+t+Ya1FEkpioD61OeHPa1HNm393FppYDIy/GKSU5ZVK5xqlpVHIZoUgVCrKlbZmpb1ZqKqIa1mntKxS1q+x1FYryVBJJIuANVXKu68JI6cMV48Z+l4Vel4Q3t8tfH1CGD4pDLwp9GxR9vcKQ0eVsdNK/y6hdnkxMKl0rFG+PaU8mjI8zGe4PWjIXzTcuWZ4dCvD42nD3euGyUvCz4OGB3nhybRh/JxhU5viB9GvLwC2NChXjykP88LfE4aJs4bPDgo/XhD+HDPc+y5D/pLw6YAwclr4fVi5/73w5XFhXbPgBQs6jEzNOaWvV7g9KPxwXujZLDTUKS9tVA7vVY7sE17epDTWKV2tyoFdluPvKDs2K9ls1J3F83QeGKSEnd3C5AXhyiGhsd6wzBdSGaWsTCkvU1KhJeE5gsCRy9pCYGmJ/HMkfIfnWUr8mVAqyoQDbwh3vlLyF4VtmwxhRgpmB2klCC1etGlG0TrMWLzAUeovAEYd+kmhrUm48ZHweEq4NyocfivuKm2U1tWOtiaHiqM04QhDR9Nzlo3PO8pzSwCjUNqbleETypNbwv0x5ei+CCioKls7HC92OnLOsSzhSIeO9ibLto2WmgpLqVcEjDysKlcO7rH8dk25dUnZ0SWkM/HAV+QiS5RUKvYw6Tty1lFdbsmkXaHmeUXAVKj0dCv5T5TPDwmr6w2lnhTquawUFEY+Rt148a9HSszBioDRcdr/iuWXL5SJs8r2LqF+hbClQ+nfI/TvFja0WEw63hykHGHa4SeLgFEg8WALQx8qDyaFv8aVsTPC5Q+U8fPKH6OGu8OGk31KXY0twFatdKxrzpLNxqEs6jC6NTrXKiNnlMfTwr83hV+HlJuXLXeuK//9ZPhnKsOVI4aGeiFMWzrXWrZ3O2oqXSGURcBoDldUx9M/cU755oTy3utC71ZlYK8y+nF03Axv7zSUlZnCuY1Cqq22ZIydSbgIGKQsK2ss3a2OjmZLeS4aZqWq0rK+RdnQIlRXCMkg9nz2HpyfwSJgwotPQjIZG11IMpLv8AOLn4yeL6GlUi7cthFw9sHcF5+xfqYs/wNSX4hfMOKxOQAAAABJRU5ErkJggg==29:T40e,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAIAAADwazoUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACqklEQVR4nAGfAmD9AE9CMVxTO2NcQGZdQmdgRGNbQlBFMz0yJVBRNnyIZ5CYiJCTjpOUk6ilp9DNztbQ1KObonZwdmJhYVpcWABTRTRfVjxlXkJnX0RpYUZlWUBUQzBGNCZdTj6WkIG1ta2kpqGUlJGcmZi3s7O/uruhm52EgH92dW5wcGMAVUg2YFc9ZV9CZ2BEZV1EW004SjcmPiwgUkA2kYN9zsrH0M/Ns7KvmJeTlJGOlpSRkI2Jh4N8e3hrdHFhAFZKNl9XPGVfQWReQlVOOUA1KDUoHjElHUE1LnxxbsnDxOXh5NLQ0KKhnICAeX19dYGAd397cXRvYm1nWABaTTheVztjXz9gXD9HQi8tJR0oHxkqIRs6Mi1zamq8tbnd193SzdGgnpp3eG10dWl/fXJ9eHBybGJsYlYAcFg+YVk6YF4"])
    </script>
    <script>
        self.__next_f.push([1,"9XVs9Qz4sKSEaJR0XKSAaOjIucGdosqmv1MzTzMfLnJqVcXNkcXJkhoV+jomIiIB9gXZuAI1qRmdcOl1cOltaO0A7KSceGCQbFyYfGTQsKWVbXaWcocnByMjCx5uZk21wX29zZJKSj6ejqKmipKignwCWb0VnXDhaWzhZWTlCPissJR0nIB0qIx80LSpdVFWYj5W5sbe4srWRkYhnbVltc2OXmJiwrLO0rrK6tLgAjWc8YFgzVFYzVlg1TEswQT4tPzoyRT87T0lGamJijYSIm5WXk5CNen5uYmtTbXRilJWVpaGon5mcnJaaAIBcNV1VM1laOGBhQGNjRWRiSmhkVnNsaHt0coV9fo6Gh4+KiYiFfoGCcnuAbIWHeqCdnqWepI2HiHl2dQB9WzxpXkRwbVR/emSJgnCOhneUioKckJCelJSilpimnJ6tpaWvpqSxqKKwqaKyq6e8tLa8srefmJh8fHYUwCY6bgScZgAAAABJRU5ErkJggg==2a:T72a,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFAUlEQVR4nGXS61OTVwLH8fxrfeGLdme2047bKZ3a9cayUqFAoArBlXvEBhCwAho0ISQBHkLIPc+TPLknJCbcIUBbEKoi0FbdAUUgme9O2LHt7L74zZxXn9/vnDmKw8NDjo6OOD4+5uTk5DS5XI6D/QPWV7PMBL0sBR38kJLZWsrweu8FJ8dH5HN58vk/cvDmkPWnz1EUsPfI+7x7d8TPm1v4Ji2M9rTj7FMTHe5mxmlgay7Gwas98rnc79hJLsf23m8EpmZRFLA/NxUKXmzvEJBkNA0N1BWfp73sAsaWSiJDGtaCY7zcXObo4N/kTofk2T94y9R0lq4BAUVh0XuscH758hXRSJy7HT3UlX5N5RdFVH9+FnXJOYzNShLmHtYTLn7dXOHozcEpuL3zK4JVRtVwD8Wf1+XyeZ49f8GYWaDzX41ob6jQ1lTSW1pMT8kF+sovY2xUImo1LEY8vNzdPr3R5s/PESZEOrt1/wPmcmw+2UIYNjHS1UnoXjehTjWe5nom66sx15Shv1aGrvFb7Lo+flxeYH9/n43Np7jFEMYR2/+DT7e2kCwCoraf0L07BDraCN5uwtFQi766HH1dFf0qJVqNmoXpNK9fvya7to7DE8A8Zi+8YZ7jkxMO373jzZu37Gw/JyNL+Ab7MTaqMNfX4G2rZ6imnJZL5+mqKKWvrgqdRs1S+jE7u3tk5rJYXTIjFnfh2xyz+8tvrKxtkF39ic31DdaScSKGBxhuXmO4TomzRYW2opSmC1+h+bqYwboKJjRtPBZFZuaW8UfTWN1BLE4ZRQFLzxYawrikGDPpWVZiERasJuL3u4h+ryHQdQtzbRUPlVcxqaqYaKnF2/0dPsGKW4pg9YQQ7H5GbRKKzNwSUjDJuCOEzRvDJ0+REGVW3JOsW4dYHh4g3N3OqKqaUVUljtZaxK4WAvpBZI+MGEzhlqdw+hM4fAkUbn8UuxjFJiZw+FNYPXEcdj/THic/2o1ktHewN6nQVpaiVZYy2lCN514HUZeLqdQ8ielVYukskdQyoeQiijG7jMUdZVJMYvensXimEOxBQm4vGUFP+O4tbDdreVhZRm/ZP+i/Vo5l4C6hQIx4Oks0nSWUWkZOLOCLzaG4b7ChH5cYsYewuGMIzgiCM4zH5cNneIhN04jQcJ2BqjKai/+O+psrmO7fxyNFcckpbFKCCW8MwRVGcIVQ9D0aQWu0YLK4GLeLjNslrG4/Hq8ft2mIodYb3K2+SlPJBZTnirhVVcakQY/fH8bjj+CSgjjFIA6vjFOUUfh8XgIBP7FYmMfJOJlUgkx6ilQ8SnTSgnugG32zis6qq3RUXDktkAUjC5kkq0szrCxk/pv5NKuLaRRP5iI8mQ3zZCbE08U4u2sZtpYzhEUvdp2O1OgQM4KO0IM7eLvVWDtbGevvJS7Z+emxj2fTErsLMnsLMjvzEoqtqMBG0MSapCfrMzMfdOCz2+js6Edd34qk7WfVOcbShIGkro/xjjbUtSram5oZ6r1NZKSXjaCBF3ETz0I6FBsRgVW/meTkIyYG++hs70JZ08oXF69z+WIV2tZWUuZHLE4YSRkHGelop/LKN/zt80uc+/IyN5QVDPe0IQ7dQTZ0odiYTTATDTExItB48zuKviznw48vceavxXxytoTGyhr8D75nfnyYpOkhj27f4tL5f3Lmo8/44MynfPiXzygqusiVknKqK2r4D9Br3z/goKkZAAAAAElFTkSuQmCC2b:T792,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFTklEQVR4nB3O/VPThwGA8e9/5E1RISFBQwJCRCBgEl4ChLe8EfL+8k1ICHkhhJAEYSAQMCgQBNFq11Ocfbna6e7W23k73fW8ttda27lOr95at3ky++zmD597fn2E8NanpPf/yvKjX7j0za9sP/2V7SevWfrsIfHFEpFkhmgsRSQaJ5Wc5Fwux8pcltJvC1xev8B7O7vsbpVZK66yuFxECBR/R+rGnyg+ekn56Vuu/P0tO9/9k/lbdwmnZ/AGRNwuD067A9HrY2oiyuJMitJ8nvLqGrsbZTbXN1hYXCY7u4jgm9sktfcJpS9ecPX5W67/dMD2V09JlrYw2Ubp6+mlt6sHo6GXEZOJkMdFJhZmJT/NZrFI+eIWpbUN8nPniWUKCO7sCpG1PRbuPWTr62eUv/qWws1bmANBdFotnWfb6dF30N/dg3VgELfNiuh2koqGOT9b4OLqOsWVdTIzc4TjGQRTJIM5msF3bolU+TKJi+uMhPxo9W3o2s5gNujxmYyINhNBmwWv1YLTYsFjt5OMxVheWGJhYZV4ukAgmkbocQToHXFi9XnwToSx+x10dmlo09TT29lM2NbLQtjO2riH82NeMj4HwRErLquFqBhkNj9L4dwK41Pz+GLTCP6IiNPrRBzzEk+G8LuGMXY00a1XMzqkoyCa2cv42c9HuDUTZXdSZCHsIh10khkPkU1NkU4VGEsU8EbSCBeWE8SjbmJRL7lJkRn/MGJ/G6P9Z0n5hriU9nI9F2a/MM7HszHu5KO8Px1iMxthfipOMjJBVIwRECdw+KII72/EycRdBLw2ksERFr0D5OzdJOy9FGMOrs6EKKdFLiUC7KVF9rNj3M5H2JlNMDOZwB8M4/L4sbv8mBw+hJ2lIOOileFhI47hHqbtvSx4B1gMWtid9HIrH2ZnMkAx6mZ93MNeKsDulMhqNkYiEcPu8TJotWE02zAM2xACzj66u3U0tWpobW3G1t3GtKOPtTEb7016+CgX5PfZANfibi7HPJTjfpZiXqbGfQREPwNmM3qDAZ3BQFuXAUHVqEaurH9HcUqNprUZz2Anc75htmMj3Ey7uJ12cT1q50rEweUJP7NhN26HlSGrFZ2hlyaNhjPtGlq0ZxHkdaepqVOjaGxG1axD3d5Bd1cnQVMP854BNsMmyuIQF1xGSp5BSuFRYk4bA8Nm+ix22g1GVE1naGhpRtPRgVB7qoHaBjVKdQuqZi3KFh31ze1o28/iMuqZGeli3tZJYUjHnM1A1mPBajJhMNkxecboNo3S0KbljFZH16AZ4YRSgVxZi1xVj7yukWqVGqmyAZnyFE1qNfbOFiYHNOT628na+hjzOBm0jtI/6sMemmDIFURvHKZzwMyQM4AgkcuoqpEhVSioVtYjq1NTrWrk2AkVR2UnUdcp8HaoyVn05EOjTE0lSOemyM/nyM0XCCeTuEMRgrE4yVwe4aikkuPVEqSKE5yor6e24TQnG04jVak5Iq/jqFSGQXOK+aiFK6Vpbn5Q4g93d3jw+XXu37vGtRsbXLm2ye07V7l3/wOECslxjlVXvbuU1yo4qVJSo6qjWtnAsZONHJbVotW3slFM8OD+No8f3uDJl/v84/tP+fGH+3z37R/52w9/5qcXD/n55SOEI1VV/F+"])
    </script>
    <script>
        self.__next_f.push([1,"FVMJxWTVVchmVcjnHZDVUyBRUyJW0d+gprU3zl8+v8s3j2zx7cpeXzx/w6ufH/OffT3jz5hkHBz++q3CoQsKhoxIOVUo5UiWlQirlsETCbyqrOFxZRYWkhsbWdtKZGB/eKfPl40948fwR/3r1Pa9fP+fNwUv++/bVO28OfuF/PPDXIU/AtNIAAAAASUVORK5CYII=2c:T792,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFTklEQVR4nB3O/VPThwGA8e9/5E1RISFBQwJCRCBgEl4ChLe8EfL+8k1ICHkhhJAEYSAQMCgQBNFq11Ocfbna6e7W23k73fW8ttda27lOr95at3ky++zmD597fn2E8NanpPf/yvKjX7j0za9sP/2V7SevWfrsIfHFEpFkhmgsRSQaJ5Wc5Fwux8pcltJvC1xev8B7O7vsbpVZK66yuFxECBR/R+rGnyg+ekn56Vuu/P0tO9/9k/lbdwmnZ/AGRNwuD067A9HrY2oiyuJMitJ8nvLqGrsbZTbXN1hYXCY7u4jgm9sktfcJpS9ecPX5W67/dMD2V09JlrYw2Ubp6+mlt6sHo6GXEZOJkMdFJhZmJT/NZrFI+eIWpbUN8nPniWUKCO7sCpG1PRbuPWTr62eUv/qWws1bmANBdFotnWfb6dF30N/dg3VgELfNiuh2koqGOT9b4OLqOsWVdTIzc4TjGQRTJIM5msF3bolU+TKJi+uMhPxo9W3o2s5gNujxmYyINhNBmwWv1YLTYsFjt5OMxVheWGJhYZV4ukAgmkbocQToHXFi9XnwToSx+x10dmlo09TT29lM2NbLQtjO2riH82NeMj4HwRErLquFqBhkNj9L4dwK41Pz+GLTCP6IiNPrRBzzEk+G8LuGMXY00a1XMzqkoyCa2cv42c9HuDUTZXdSZCHsIh10khkPkU1NkU4VGEsU8EbSCBeWE8SjbmJRL7lJkRn/MGJ/G6P9Z0n5hriU9nI9F2a/MM7HszHu5KO8Px1iMxthfipOMjJBVIwRECdw+KII72/EycRdBLw2ksERFr0D5OzdJOy9FGMOrs6EKKdFLiUC7KVF9rNj3M5H2JlNMDOZwB8M4/L4sbv8mBw+hJ2lIOOileFhI47hHqbtvSx4B1gMWtid9HIrH2ZnMkAx6mZ93MNeKsDulMhqNkYiEcPu8TJotWE02zAM2xACzj66u3U0tWpobW3G1t3GtKOPtTEb7016+CgX5PfZANfibi7HPJTjfpZiXqbGfQREPwNmM3qDAZ3BQFuXAUHVqEaurH9HcUqNprUZz2Anc75htmMj3Ey7uJ12cT1q50rEweUJP7NhN26HlSGrFZ2hlyaNhjPtGlq0ZxHkdaepqVOjaGxG1axD3d5Bd1cnQVMP854BNsMmyuIQF1xGSp5BSuFRYk4bA8Nm+ix22g1GVE1naGhpRtPRgVB7qoHaBjVKdQuqZi3KFh31ze1o28/iMuqZGeli3tZJYUjHnM1A1mPBajJhMNkxecboNo3S0KbljFZH16AZ4YRSgVxZi1xVj7yukWqVGqmyAZnyFE1qNfbOFiYHNOT628na+hjzOBm0jtI/6sMemmDIFURvHKZzwMyQM4AgkcuoqpEhVSioVtYjq1NTrWrk2AkVR2UnUdcp8HaoyVn05EOjTE0lSOemyM/nyM0XCCeTuEMRgrE4yVwe4aikkuPVEqSKE5yor6e24TQnG04jVak5Iq/jqFSGQXOK+aiFK6Vpbn5Q4g93d3jw+XXu37vGtRsbXLm2ye07V7l3/wOECslxjlVXvbuU1yo4qVJSo6qjWtnAsZONHJbVotW3slFM8OD+No8f3uDJl/v84/tP+fGH+3z37R/52w9/5qcXD/n55SOEI1VV/F+FVMJxWTVVchmVcjnHZDVUyBRUyJW0d+gprU3zl8+v8s3j2zx7cpeXzx/w6ufH/OffT3jz5hkHBz++q3CoQsKhoxIOVUo5UiWlQirlsETCbyqrOFxZRYWkhsbWdtKZGB/eKfPl40948fwR/3r1Pa9fP+fNwUv++/bVO28OfuF/PPDXIU/AtNIAAAAASUVORK5CYII=2d:T6e6,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEzElEQVR4nGXS+09TZxzH8fOb9g4tRbmoIC0WFeQiRYGKpYBACxSsSFuglN64CAgboChmijqNyDYdQxfnhVaq2zKyOWfcnM7pXFCzGd3cn/NezsGZJf7wyvf7JM/5PLcjDDV38K52Bp0iL4PNXqkfcnYwKPmvb2ewadlAk5eBRq/UC2KzzCPZ1yByv9Uvcog89Dnc9NnbpPGAOM/hZp/dw4DDQ7/dzYCjHaGvthVRb+0eekS7RK43dbkPVbfgsTbSYqmnubQGt6WOgM1JuHo3PdUuempcRKp301u9ByFc6ST0RlBkFTW9rZGqZiL1LbhstZQWmNmUZaIgK4eqXDO7SyrpstgJ7mwiUNEoVSFgcdBtceC32PGXvytia2Lc0854qJOWuio2GrNI1yeTk7qOqpyteLfV4C934C+z013egHC4ysdEVScHRbaO/1keT9g7OB4McH5ymKn3IrQ5qig2bcBqyCdobmDM2s4BW6fkoM2HcMc7w23vNLdEnjN8J5mWfOudZsF3jNn+YS4cGeHy6QmODwfxV9dysKKDmGuKRc8037jPsOieZtF9FuGfnpu8jsT5641XkTgvI3H+CMd4GL7E15EZZsOjnB3uZfboCB8fGuRUZy/xtpM8Cc7zNLzA09B1noUXeB6OI7zu+ZK/Izd5Fb7JyzdehOL83H2Bi74jHHb3Sr/S4N49TA2HmDs2SnTiGN/3fcqDwBWeBGMshRZYCsVZEgNfhG/wZ+gGz0NxnoUWpPo4dJVo9wnGvF002KxszyuktXYXx9/v5dpHH3B9+gQzkXGm6vZzteUU97qu8GswxqPgAoIYshS8zu/BmLTa49C8tPq5vjFCrS0U5G5ifUYG3mYHcx9OED03xbHRfuoqKijMyKWjoIUru09zr3ue+4HrCGLQb2JQIMqjQJQfA5f4vPsDRjs6abRZWJuWyiq9nsZdVk4cGGCs34+1rISU1atRKzXkpm1i0jbELd8X/BSIITyWthrjYSDKw0CM276LTDkHcVZYycsxok1IQKVSscGQScX2YrZsNKHX6VAqVMgVStJ16YS2efmqfY67wRjCw2CUXwJR7gfmudd9jXjbJ/Rb2sk3mEjWix8qkMvlUmiCRoNKpUahUEmBMrmC5IRk9hY4mW87xx1xhw8CUX7wXWK+dZqzDZMM7QhSnmUmSaNFrVKRsnoVa9emo9cnSaEKhVIKVMiVyORydJokmvLqudQ6w20x8K7/KrPOo/hKXJQZSzCmGNCpdaxcsRKNRk3+ls3Ya23YKkrJNRlZnaxHpVQhlytYKZOh1Wip31zDZ64zLPrnEWLu84xYwxQZtpCkS5KOt2LFColSqcCQlYm9eichTzNdLgelhXkkabXSPJlcRqI6kcocKyebjnLZO4dwrvkUPeVdFBjz0Ov1KBQK6UiaBD0JiavQJ6eSk51Ng82C32XHur0IvVaLTCaTArVqLVZTJYfrDzHjmkGYtO7Hb26jxFRMetoaEhN1pKSuZ332VjKMxaRn5JG2xki2YQOFebkYMjPQqDXLgTKZ9ChVJhtDO/oZt44glK8pojyzGHOOmQ1ZG0lNzcRoKmZzYSXGTRbWGcykr8slJT2blNQs9MlrSEhIQqlUS/e4KimFIsNWygylFKfl8y8TpR2sBhfo0QAAAABJRU5ErkJggg==2e:T6e6,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEzElEQVR4nGXS+09TZxzH8fOb9g4tRbmoIC0WFeQiRYGKpYBACxSsSFuglN64CAgboChmijqNy"])
    </script>
    <script>
        self.__next_f.push([1,"DYdQxfnhVaq2zKyOWfcnM7pXFCzGd3cn/NezsGZJf7wyvf7JM/5PLcjDDV38K52Bp0iL4PNXqkfcnYwKPmvb2ewadlAk5eBRq/UC2KzzCPZ1yByv9Uvcog89Dnc9NnbpPGAOM/hZp/dw4DDQ7/dzYCjHaGvthVRb+0eekS7RK43dbkPVbfgsTbSYqmnubQGt6WOgM1JuHo3PdUuempcRKp301u9ByFc6ST0RlBkFTW9rZGqZiL1LbhstZQWmNmUZaIgK4eqXDO7SyrpstgJ7mwiUNEoVSFgcdBtceC32PGXvytia2Lc0854qJOWuio2GrNI1yeTk7qOqpyteLfV4C934C+z013egHC4ysdEVScHRbaO/1keT9g7OB4McH5ymKn3IrQ5qig2bcBqyCdobmDM2s4BW6fkoM2HcMc7w23vNLdEnjN8J5mWfOudZsF3jNn+YS4cGeHy6QmODwfxV9dysKKDmGuKRc8037jPsOieZtF9FuGfnpu8jsT5641XkTgvI3H+CMd4GL7E15EZZsOjnB3uZfboCB8fGuRUZy/xtpM8Cc7zNLzA09B1noUXeB6OI7zu+ZK/Izd5Fb7JyzdehOL83H2Bi74jHHb3Sr/S4N49TA2HmDs2SnTiGN/3fcqDwBWeBGMshRZYCsVZEgNfhG/wZ+gGz0NxnoUWpPo4dJVo9wnGvF002KxszyuktXYXx9/v5dpHH3B9+gQzkXGm6vZzteUU97qu8GswxqPgAoIYshS8zu/BmLTa49C8tPq5vjFCrS0U5G5ifUYG3mYHcx9OED03xbHRfuoqKijMyKWjoIUru09zr3ue+4HrCGLQb2JQIMqjQJQfA5f4vPsDRjs6abRZWJuWyiq9nsZdVk4cGGCs34+1rISU1atRKzXkpm1i0jbELd8X/BSIITyWthrjYSDKw0CM276LTDkHcVZYycsxok1IQKVSscGQScX2YrZsNKHX6VAqVMgVStJ16YS2efmqfY67wRjCw2CUXwJR7gfmudd9jXjbJ/Rb2sk3mEjWix8qkMvlUmiCRoNKpUahUEmBMrmC5IRk9hY4mW87xx1xhw8CUX7wXWK+dZqzDZMM7QhSnmUmSaNFrVKRsnoVa9emo9cnSaEKhVIKVMiVyORydJokmvLqudQ6w20x8K7/KrPOo/hKXJQZSzCmGNCpdaxcsRKNRk3+ls3Ya23YKkrJNRlZnaxHpVQhlytYKZOh1Wip31zDZ64zLPrnEWLu84xYwxQZtpCkS5KOt2LFColSqcCQlYm9eichTzNdLgelhXkkabXSPJlcRqI6kcocKyebjnLZO4dwrvkUPeVdFBjz0Ov1KBQK6UiaBD0JiavQJ6eSk51Ng82C32XHur0IvVaLTCaTArVqLVZTJYfrDzHjmkGYtO7Hb26jxFRMetoaEhN1pKSuZ332VjKMxaRn5JG2xki2YQOFebkYMjPQqDXLgTKZ9ChVJhtDO/oZt44glK8pojyzGHOOmQ1ZG0lNzcRoKmZzYSXGTRbWGcykr8slJT2blNQs9MlrSEhIQqlUS/e4KimFIsNWygylFKfl8y8TpR2sBhfo0QAAAABJRU5ErkJggg==2f:T536,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAADiklEQVR4nG2U208cVRzHN5Rl75fZy+yV3dnrzOzMDixECyiUloBGyj1oDFguYmpoQ4NS0ZqY+GBt2qRNTExf2icSntQnfTH+bx9zzjKwrjx8c86Z3+98fr/zO+c3HqdtMeLYUmIu1LZbXfWtbcu8svXIufARdo8L65ULFg56s05FK1MaLlAqFqhVNUyjKe39e9p2C0+/YXSkLUerZVDVyqjpFPFYlFg0TDwaIRGPU8jnMPTGf6DORRL/AwqJSNVKmaQSJ+j3EfANEQ4GiISCBP1+IuEwxUIe09AvQZfA/ghiLqLnMirxcBA1HqaWTWIOZ2nkVTJKjEgogBKPoZVLWK2rusoaXpd2vVYlpcTJJ6JMm2U+n3uHx2u3OVq6xfrUKI5WQI1HyWUz6HpTglxJoAuVc9uiVq2QUmLo+STb7zu83F3it2/3+evHB5yd7PBoaQZHy5NV0zQbdWyrheUCr7vdRqNGLp2gPaxyb6bDy70V/njyBf/8fMzfPx3xy/0NFsYMKsXu5bhAqz9DCXUsTL1OOZvGLqa5O27w1fIsv97/mDdH27x++Ckv9lfZmh1nolVn5OJt2m4NbduSD1g+YqcLt/QGjWKGMS3L4pjOwfwET7cXeXWwztOdZV7srXC6fofN6XFujrYvL0Rk6umm2o3gdodt6liVInN2lcOFCZ5szPFqf5Xzk13Ov9nn7Pgznu0ssz3/Hu922pcXIo8srt1yi9qTuqPXWBjVefThFN+tzvJ8+y6/nx7w5w+HnB3f42TzA+anxhlpX9Wv1TK6GbqQ3l61zSaTrRqbNy12ZzqcLt/m7YMtzr/e4fneCht3Jug4lnyHAmSaXXl6j9sLFP1qagVmzBJbUyN8vzbPm8MtXh9+wpeL00x2ujBLAC9gYvS05JG7BXULK/u4opFOxKmqCh91DB6vzvFsd42Hy7NMWHXq1TKmqWNLaBcmM3RTFX2pNxvUalVKw8Okkkn8Ph+BIS+llMKkUeGWo2OW8ySVGGpGpVarYBhNWqYu4YZh4KnX61QqGsVigUxGJaEohMNhfD4fN27cYGBgAO/gICG/j0gwQMDvxy9+EJEIqVSSQiEv94uOMXQdT0ZVURSFaDRCKBSSzkNDQ1Jer5fBwUG8XiGv/CYCCR+hQCAgg4v9uVwOTdPwBINBaRCjO3c3iM39ckGuj7sWGScSCTzuh+uA10nYe33ctat/AQq1VSZDfvcvAAAAAElFTkSuQmCC30:T536,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAADiklEQVR4nG2U208cVRzHN5Rl75fZy+yV3dnrzOzMDixECyiUloBGyj1oDFguYmpoQ4NS0ZqY+GBt2qRNTExf2icSntQnfTH+bx9zzjKwrjx8c86Z3+98fr/zO+c3HqdtMeLYUmIu1LZbXfWtbcu8svXIufARdo8L65ULFg56s05FK1MaLlAqFqhVNUyjKe39e9p2C0+/YXSkLUerZVDVyqjpFPFYlFg0TDwaIRGPU8jnMPTGf6DORRL/AwqJSNVKmaQSJ+j3EfANEQ4GiISCBP1+IuEwxUIe09AvQZfA/ghiLqLnMirxcBA1HqaWTWIOZ2nkVTJKjEgogBKPoZVLWK2rusoaXpd2vVYlpcTJJ6JMm2U+n3uHx2u3OVq6xfrUKI5WQI1HyWUz6HpTglxJoAuVc9uiVq2QUmLo+STb7zu83F3it2/3+evHB5yd7PBoaQZHy5NV0zQbdWyrheUCr7vdRqNGLp2gPaxyb6bDy70V/njyBf/8fMzfPx3xy/0NFsYMKsXu5bhAqz9DCXUsTL1OOZvGLqa5O27w1fIsv97/mDdH27x++Ckv9lfZmh1nolVn5OJt2m4NbduSD1g+YqcLt/QGjWKGMS3L4pjOwfwET7cXeXWwztOdZV7srXC6fofN6XFujrYvL0Rk6umm2o3gdodt6liVInN2lcOFCZ5szPFqf5Xzk13Ov9nn7Pgznu0ssz3/Hu922pcXIo8srt1yi9qTuqPXWBjVefThFN+tzvJ8+y6/nx7w5w+HnB3f42TzA+anxhlpX9Wv1TK6GbqQ3l61zSaTrRqbNy12ZzqcLt/m7YMtzr/e4fneCht3Jug4lnyHAmSaXXl6j9sLFP1qagVmzBJbUyN8vzbPm8MtXh9+wpeL00x2ujBLAC9gYvS05JG7BXULK/u4opFOxKmqCh91DB6vzvFsd42Hy7NMWHXq1TKmqWNLaBcmM3RTFX2pNxvUalVKw8Okkkn8Ph+BIS+llMKkUeGWo2OW8ySVGGpGpVarYBhNWqYu4YZh4KnX61QqGsVigUxGJaEohMNhfD4fN"])
    </script>
    <script>
        self.__next_f.push([1,"27cYGBgAO/gICG/j0gwQMDvxy9+EJEIqVSSQiEv94uOMXQdT0ZVURSFaDRCKBSSzkNDQ1Jer5fBwUG8XiGv/CYCCR+hQCAgg4v9uVwOTdPwBINBaRCjO3c3iM39ckGuj7sWGScSCTzuh+uA10nYe33ctat/AQq1VSZDfvcvAAAAAElFTkSuQmCC31:T456,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAYAAAB/Ca1DAAAACXBIWXMAABYlAAAWJQFJUiTwAAAC4UlEQVR4nB2QTW/bBABAcy8S5YBW1o4lLHFix/F3bMf5cJzESZO2adKWtKUbG+vcrltaqhWBBqrWIMZQ+KgKk2BiEhIHqqENxA0G4sCFX7Df8xC9vcM7PL1YvWISBnmCkolrqeRkESGVIplMousKVb9M3jRRc1lc28CxLTRNQ9cUdFVGEtMIQoqUkERIJYm5jkIQmBRcBUPLouXEM0nMCBQsmWY1j2MpqDkJJ69h500MXaXgmniOgaZIKDkRVZHOOGZoCn5Ro1GWaZclOiWRopHGkAW6vszVrkXoG5QKOn7JpODouI5Bs1Eh8AsUbBXP0Si5OiVXIyYKMp4h8nZb4GAlxXAuQ8eScKQMa4HC9pLNbNMjbJZp1gqUPYNyMU8rrFD1XSqeSd23adZd2qFHLJMWKZsZttoJPlmL89lAJfIL9B2b3W6R24MqrU6dsFOjUXPxHP1sgWnIZ4t8z2A+LPDmQsBby01iOSlNYAlsNuIcX0nydN/h++0646s+X25W2F+rsjAXsNKvst7zmK+bVJwsZu4NbOUS7bLKRtsj6tXYWpklpmTi2HKcJe8iX2xc4vmhyu8jm0e3NO4tSVyvySz6KpvLLqO9NkfDDrfXi2x0FAahxOWWwtZcnr1Fn93/Cy3xPJY4TaDOEAXTfBMleHZf4eTdLDcbcfraNA1lhkFdZrTb5eG9Kzy40+OD6wHDVZetRZMbHYOoaRK1bGJFZYqKco6mPsWC+So78+f44VOFXx+V+fxAZyNMEKgX6FVyfBgt8O1RxOP7O3w3ivj68Brj9wYcRrPcWfUYdk1iLfUV5vRJetYki9bLrPuTjG4lePLQ4fTE5u47GVr5BA1LYr/r83hnjd/u3uT58Uf88/MJf56OOT3e4+T9Ph9HPrGlzASr2Qn62gTd/ATL3ktcbkyyt36eo+2LHCzPEKqvYbw+xVr8AuO0wE+WxV/DG7z445QX//7C30/G/PjgGl/th/wHPf6T3Jxy2ukAAAAASUVORK5CYII=32:T456,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAYAAAB/Ca1DAAAACXBIWXMAABYlAAAWJQFJUiTwAAAC4UlEQVR4nB2QTW/bBABAcy8S5YBW1o4lLHFix/F3bMf5cJzESZO2adKWtKUbG+vcrltaqhWBBqrWIMZQ+KgKk2BiEhIHqqENxA0G4sCFX7Df8xC9vcM7PL1YvWISBnmCkolrqeRkESGVIplMousKVb9M3jRRc1lc28CxLTRNQ9cUdFVGEtMIQoqUkERIJYm5jkIQmBRcBUPLouXEM0nMCBQsmWY1j2MpqDkJJ69h500MXaXgmniOgaZIKDkRVZHOOGZoCn5Ro1GWaZclOiWRopHGkAW6vszVrkXoG5QKOn7JpODouI5Bs1Eh8AsUbBXP0Si5OiVXIyYKMp4h8nZb4GAlxXAuQ8eScKQMa4HC9pLNbNMjbJZp1gqUPYNyMU8rrFD1XSqeSd23adZd2qFHLJMWKZsZttoJPlmL89lAJfIL9B2b3W6R24MqrU6dsFOjUXPxHP1sgWnIZ4t8z2A+LPDmQsBby01iOSlNYAlsNuIcX0nydN/h++0646s+X25W2F+rsjAXsNKvst7zmK+bVJwsZu4NbOUS7bLKRtsj6tXYWpklpmTi2HKcJe8iX2xc4vmhyu8jm0e3NO4tSVyvySz6KpvLLqO9NkfDDrfXi2x0FAahxOWWwtZcnr1Fn93/Cy3xPJY4TaDOEAXTfBMleHZf4eTdLDcbcfraNA1lhkFdZrTb5eG9Kzy40+OD6wHDVZetRZMbHYOoaRK1bGJFZYqKco6mPsWC+So78+f44VOFXx+V+fxAZyNMEKgX6FVyfBgt8O1RxOP7O3w3ivj68Brj9wYcRrPcWfUYdk1iLfUV5vRJetYki9bLrPuTjG4lePLQ4fTE5u47GVr5BA1LYr/r83hnjd/u3uT58Uf88/MJf56OOT3e4+T9Ph9HPrGlzASr2Qn62gTd/ATL3ktcbkyyt36eo+2LHCzPEKqvYbw+xVr8AuO0wE+WxV/DG7z445QX//7C30/G/PjgGl/th/wHPf6T3Jxy2ukAAAAASUVORK5CYII=33:T7be,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFcElEQVR4nCWQ/VPThwHGv//A7vbDdnu52+7Wu91621w7Xddb7Xmz50u9rWqvddoqBUtBtIgI4guOKiDIoRQNL0KCQQgviTEREDCAgRBIQr55D+SVJIAw37Gt+MJb/OygPzz3/Pa55/MIpYnrKE9+B0nq35FmrKcxZyPqb7Zx89zHKM/sRJa1mW+T36Vk7xoK//Mmp7e/QdbW35Cx+Vcc2fJLMrf8gvQPfkbKez8l8W8/QShJWMuFxLVcSFpL+VfvUP31+1zL+ZDGUzuRZe9EkraNgt3ryd2+hgt71yBNextZ2ltID/4F6aE/U5XyJqX7fkfejl9zbOvPEfL3/JGShDWU7X8LSco6ag9voPHER7Sc3o2mMBXdpRNczz9MaeJWqg9soLfk3xgv7UB/8V90F29Cm7eexqN/RbL/9xTv+S2C7Mg/aMndyM2zm2nP38Ktop30ln2JvT6Xie5aHlrbifQ2oyk8gjRjOwOSBDyKVMS6LzBIPuF2yYcoT75HZfKfKNrzBoL+8i5MtQnY5EmIdUmYa77CejWHiS4JT81KHpk1TPY2YbxSSMvJRO6UJeNWpGOvT2G46nP6Lu5AeWoj5UlvU/DpHxDEq/txKQ7gbT6EW/E1ojwdU+1R3IpCJturiGqrCWtqCKiqsVR8g7niCFZpGsNV+zFWJmKoSKCj+BPk2ZuoSFuPMCJNwlGfgqM+FVGWglV6AFGWiU9xjv91yHika+Vx/w2e9N8gopJgrcli8HIyfd8mMlh9EIs8E8OVNG6Vfo7q7McIgxX7GKr8AlNVEubqJMTaFMYUOUy3lfGkW85TnYofBrQ8HVATul6GuSaToZoMhmRHMcuPM3LtBIaadLouJqA5twtBbDqOpT6bEXkWYn0WjoZj+JT/JaY9z4zmEg+0Mh51NXFf14RffRmLPI+RhjysTWcwN+RirMuhR5JG2/nPUBfuQoha1ERNKmLDrcSMTcQMjcQGrhHplTPRIeVex1UedCuY0SkJdqqwt7cgauswtZShl+XRW5VNd/khtEX7UObvRpj2DXMvaObhuJUnUTtPYh7uh8cI2xx4dV2Mtzcw3dXIpO4GPv0QDksIh2WMkb4B+tUt9DVUopMV01aejbIkDSHi1BP1DDLltzETGWdm8iET0R9wOx8w2GnG0qogoKkn0N2JfSiIbfQ57tAr3P7vsDlnsJgCGPsG6VE3014vQfD0N+MzdRLyuIlEHhOZmCccXcQz+owBfYg+lY4RlQa7zoRFfIg9uMhodBlfLI43EscZXMTieoxeb6NDcxPBIM/FopXhET2Eoi8IT8UJTywTjMzjcM9iNIwz1OPGYowx4n6Oe3wZ30ScsWgcTziOGFjG6Jqjs2+MRoUW4fqZPXRWFTB8x4o3+JzQVJzxuytZJhBbwOWbY8T5FIvrGc7AImOx+CpwZZ3Nv4TB8RKd+XtaO7xcuNSEUJuxjdbzOXTfHMBsn2UsukR4+jXjM68J3o0zGlnEFZzHGVpR/RG2AnWGlldh7YZZNHfuU9tiIzu3CqHy4CaairJoU/fSMziD3f+SwGSc0N3X+KfieCJLuMOLeCP"])
    </script>
    <script>
        self.__next_f.push([1,"Lq5o/qi5hGZ2nzTCL4tYUje0RSq/08+XBYoTS5A3Unc1A3aqjozeKyfU93vFFxqLLq4tWPnOFl1Z7RdMdWsLme4XeNoeia5orSj+VTW5On2/js8RTCPl736X8WApymZZmrZfeoXtYvXM4fK9wBBawBRYQ/fPY/AvYA4uI/gWG3S+4ZZylWhWipFakQGIk/WQDH+1IRSjYu46LmYlUSpqpumZGczuCQXyMyfkdZtczhl1zDDnnViFm70uGPS/Q25/R2nOPohqR4yV95BTdJvlwNR/881P+D3K7qBkwfmkzAAAAAElFTkSuQmCC34:T7ae,data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFY0lEQVR4nCWR+zvbhwKHv3/C2eZpq0pP6zbWdkvaEtEqIU0iQlzikjTmEpMGVUyF0fWiLo2uHUW7WBVbHIy6hUZEEBGipafn7O9593T74f3tfd7n+TwfYdGzzvKGh9VNL67tLdZ2fGwEAmwHg/gOgmwH99jaD+A72Mf3Lsjm3h6eXT/uHd/f/pLLyW+//8LAYBfdtnaEJY+HTzg3vKxsbv4teXybeLc38HjduNbf4tpws7m3i+/dAd5AALdvm1Wvh0XXCo6ZCZ4Pd9Nxr4bKm9kIyxtenN5/Yk6Pm+WlGRYcw8zYe5gcuM/kUA9zjhFc7hU2d/14/DuseteZdy4w7rBje9pG+/1qmlqMlJSmILj9O6z5dnBteVmadzA92MFou5GBajm2Egl9+iv0W3J51X2HWcevrKw5WVl3MfXHGL22eqrrFJhqFFhuackruowQOHzPdnCftfUV5uxdjLeX8Lw8mW5VJN2yULpTQ7mbGk6b6jydJg3DPVYcEy8Ze/2E1jYdhYbz6G6IKS6VoNLGIxz+/yN7R4d43Iu8GWpnwprPk2IxHWnh9MrDscnDaZQco1Icgjk5jBatmM76Ivoe1WJtyabIeA5lXiQZ2VGkayIRjv78SPDjB3x+L2uzdt70Wxm8mcldZRx96lgGNF/Sei2COmkY7Rln6MmNp63gIo1ladSapWiLo5Eqw7iWeZZs3QWEg/99YP+/R+wdvScQ9ONbX2Bh4C6vbmpwlMuYKU1mpEDMi8IEJqvSmK5Jx1Z0kdacc9wqiiNLexqJPBSZOoYSoxQhcHTI7uE79j+8593HDwSDfnZnX7H1uBH390UsmNJZqEzF3ahlu0OPs1nDr98mMlQkoq0wjjztaVJVJ0mWhyPXfIngP9hna3eLLf8GvsAmvg0n/umX+J80sVqnxVGSxHRpMq4GNeutuczVZzBmkmA3JdGkj0eXfxp1TgRJ6aFIM8IR1t3zrC47WFmc4O3KNK6FcTyjPWw8MrNWl8e8Ucb0jStMV11lynKV0cpLDJR9w0OTmDJ9NLn54WjzIriujuC6JgphfvIpbyYes+B4hnNuBNfSBGvjNjx99Wz9UIHnVgFv67KYrU3nlzIxjwti6TKcp7VKhN4QRZY2FK32JDk5p1FnRyHM2H9g+qWVGXsHc+NdLE71szTahau/mc3uGjxtRlxWHROWdDo00TRkhPPI8A0/WhIxGs6izApBrgohU3mczOthCL89rWK8r4LRnjJe9Zbxuq+a8V4zU50m5ju+Zfp2Li8qZNxRf4Uh4Ri1sgielSdyr/IiN/LD0ahDUCpCyFGcoEgRgTDSmYP9QRZD7UqetyoZbFUzdCebwdtZDFRl0FuYQIMsEv2lY5RLTmDTXWDcfI2O4q/RqyLQqcIoVJ2iVH0G86eXX7QrGWqT8VNjCo/rrmGrSaWz4irNugRa8hPp0Uu5nx1Hm/zf/JR/nllLKv8xp9KiiadEdgaDMgqjKgqTOo6GXDHCi+YsBm7L6fwuGavxMvX5IgypMShEYRjS4nlerWKyNp3fTUnM18pYbVAwXi6h4Xok2qRT6GRRlGd+hSVHTENBEsLw95/mKegyJ9NoFGFQxZJy4TgJ0Z9TmvE1o83FuH4swWXNZs2qxdmoxl6WjCUjGrnoOPJLJ9GlxfBdtoi6fAnC4D0VIw8zGL5/lS6rhGr9BWSXT6GSxvLQomP1qZWdn5vYtt3E22tm+UEl/RYt+rQ4pPEhSOK+IE0UijblLKWqcwgDj+SMPUvldf8V+ruucLviMuqUWEzFChz9DwhMDRGceMLu6162xmws2XvoaqpAKY1BFP0vLsZ8RmL8F6SJT5AljeAvKHm5W3eOXxEAAAAASUVORK5CYII=15:[[\"$\",\"$L16\",null,{\"moduleIds\":[\"app/components/base/home/section-module/index.tsx -\u003e ./module\"]}],[\"$\",\"$L23\",null,{\"sections\":[{\"sectionData\":{\"title\":\"Markets\",\"newsletters\":[{\"_ref\":\"60c6c9f1-927e-4b92-af53-701559cbf7f6\",\"_type\":\"reference\",\"_key\":\"e0ebc9ff4642\"},{\"_ref\":\"c723d3a7-de7a-4122-ab50-74458895ef2c\",\"_type\":\"reference\",\"_key\":\"e0833d7b515a\"},{\"_type\":\"reference\",\"_key\":\"3512a0eab589\",\"_ref\":\"7e78b8be-99e1-4b2b-aaf6-3f11567dc45a\"}],\"tags\":[],\"_updatedAt\":\"2024-10-21T08:57:35Z\",\"meta\":{\"description\":\"\",\"title\":\"Markets\"},\"_rev\":\"ZgCTHLQT5xa597d1Mrc8pO\",\"_id\":\"e3a5abe7-6998-4091-9318-6e88bf086308\",\"name\":\"Markets\",\"active\":true,\"slug\":{\"current\":\"markets\",\"_type\":\"slug\"},\"_createdAt\":\"2024-06-18T14:54:23Z\",\"_type\":\"section\"},\"articles\":[{\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c6d5af50ee5c575900d02495c07fd58e23e81c9f-1500x876.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAEFB//EAB8QAAIBBAMBAQAAAAAAAAAAAAECAwAEBRESIUETMf/EABYBAQEBAAAAAAAAAAAAAAAAAAEDBP/EABsRAAICAwEAAAAAAAAAAAAAAAECABESMVGB/9oADAMBAAIRAxEAPwDbZclDCXC7aQDYAH7UuyzU+SWUSW7Rxqdgmo2fL/S3VZHVSdHidUMGSWONJHVSmyQe6uiAC+zO7l2xvUWSmmN23KdU66U+Cim9lA7FpE5sfW7NFPkcx2f/2Q==\",\"alt\":\"North Korea-linked Lazarus holds more BTC than Tesla. (Image via Shutterstock)\"},\"metadata\":{\"_ref\":\"image-c6d5af50ee5c575900d02495c07fd58e23e81c9f-1500x876-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBc"])
    </script>
    <script>
        self.__next_f.push([1,"UFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAEFB//EAB8QAAIBBAMBAQAAAAAAAAAAAAECAwAEBRESIUETMf/EABYBAQEBAAAAAAAAAAAAAAAAAAEDBP/EABsRAAICAwEAAAAAAAAAAAAAAAECABESMVGB/9oADAMBAAIRAxEAPwDbZclDCXC7aQDYAH7UuyzU+SWUSW7Rxqdgmo2fL/S3VZHVSdHidUMGSWONJHVSmyQe6uiAC+zO7l2xvUWSmmN23KdU66U+Cim9lA7FpE5sfW7NFPkcx2f/2Q==\",\"alt\":\"North Korea-linked Lazarus holds more BTC than Tesla. (Image via Shutterstock)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c6d5af50ee5c575900d02495c07fd58e23e81c9f-1500x876.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-c6d5af50ee5c575900d02495c07fd58e23e81c9f-1500x876-jpg\",\"hotspot\":null,\"crop\":null}},\"_id\":\"89c9c607-5f13-4d92-b3df-550acaba2924\",\"title\":\"North Korea-Linked Lazarus Group Holds More Bitcoin Than Elon Musk's Tesla\",\"articleDates\":{\"createDate\":\"2025-03-21T05:45:04Z\",\"publishedAt\":\"2025-03-21T06:11:33Z\",\"updateDate\":\"2025-03-21T06:11:33Z\",\"displayDate\":\"2025-03-21T06:11:33Z\"},\"_type\":\"article\",\"meta\":{\"title\":\"Bitcoin News: North Korea-Linked Lazarus Group Holds More BTC Than Elon Musk's Tesla\",\"description\":\"D.O.G.E head Elon Musk's Tesla falls behind North Korean hacker group in terms of BTC holdings as President Trump plans to make U.S. the crypto capital of the world.\"},\"slug\":\"north-korea-linked-lazarus-group-holds-more-bitcoin-than-elon-musk-s-tesla\",\"authorDetails\":[{\"name\":null,\"byline\":\"Omkar Godbole\",\"authorSlug\":\"omkar-godbole\",\"__profilePicture\":{\"source\":{\"alt\":\"Omkar Godbole\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/870d388b294f7b16cc73e1f292cbbc3b7b2d463d-683x683.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$24\"}}}],\"sectionDetails\":[{\"name\":\"Markets\",\"sectionSlug\":\"markets\"}],\"pathname\":\"/markets/2025/03/21/north-korea-linked-lazarus-group-holds-more-bitcoin-than-elon-musk-s-tesla\",\"description\":\"D.O.G.E head Elon Musk's Tesla falls behind North Korean hacker group in terms of BTC holdings as President Trump plans to make U.S. the crypto capital of the world.\",\"storyType\":\"News\"},{\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/473cadb20fe4e7c052f29ddddcf48b15aee79ec0-1920x1152.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAYBBQcI/8QAHxAAAQQCAgMAAAAAAAAAAAAAAQACAwQFEhEhQUKR/8QAFQEBAQAAAAAAAAAAAAAAAAAAAwH/xAAbEQACAgMBAAAAAAAAAAAAAAAAAQIDBBExEv/aAAwDAQACEQMRAD8A5+rRCQatHLvCtM1hW16FSxEx4EkXMm3q5LtGeSOwHMdwQnvKWpXYRzXEEFvfxJVjqyLlvhbL/DUddM9kiG56QpkcdihAIf/Z\",\"alt\":\"Polymarket CEO Shayne Coplan (Polymarket)\"},\"metadata\":{\"_ref\":\"image-473cadb20fe4e7c052f29ddddcf48b15aee79ec0-1920x1152-jpg\",\"hotspot\":null,\"crop\":null}}],\"sectionDetails\":[{\"name\":\"Markets\",\"sectionSlug\":\"markets\"}],\"_id\":\"e684798a-65c1-4b6e-865c-529b4b1a3121\",\"title\":\"Polymarket is 90% Accurate in Predicting World Events: Research\",\"pathname\":\"/markets/2025/03/21/polymarket-is-94-accurate-in-predicting-world-events-research\",\"_type\":\"article\",\"meta\":{\"title\":\"Polymarket is Over 90% Accurate in Predicting World Events: Research\",\"description\":\"Research shows that Polymarket is 90% accurate in predicting how events will occur one month out, and 94% four hours before the event occurs. \"},\"authorDetails\":[{\"name\":null,\"byline\":\"Sam Reynolds\",\"authorSlug\":\"sam-reynolds\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/4f9eb34aabd5a2cf3c3bdc76433548b75b83ff9b-512x512.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$25\",\"alt\":\"Sam Reynolds\"}}}],\"__image\":{\"source\":{\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgo"])
    </script>
    <script>
        self.__next_f.push([1,"KCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAYBBQcI/8QAHxAAAQQCAgMAAAAAAAAAAAAAAQACAwQFEhEhQUKR/8QAFQEBAQAAAAAAAAAAAAAAAAAAAwH/xAAbEQACAgMBAAAAAAAAAAAAAAAAAQIDBBExEv/aAAwDAQACEQMRAD8A5+rRCQatHLvCtM1hW16FSxEx4EkXMm3q5LtGeSOwHMdwQnvKWpXYRzXEEFvfxJVjqyLlvhbL/DUddM9kiG56QpkcdihAIf/Z\",\"alt\":\"Polymarket CEO Shayne Coplan (Polymarket)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/473cadb20fe4e7c052f29ddddcf48b15aee79ec0-1920x1152.jpg?auto=format\",\"width\":1920},\"metadata\":{\"_ref\":\"image-473cadb20fe4e7c052f29ddddcf48b15aee79ec0-1920x1152-jpg\",\"hotspot\":null,\"crop\":null}},\"articleDates\":{\"createDate\":\"2025-03-21T03:58:19Z\",\"publishedAt\":\"2025-03-21T05:26:14.258Z\",\"updateDate\":\"2025-03-21T05:26:14.258Z\",\"displayDate\":\"2025-03-21T05:26:14.258Z\"},\"description\":\"Research shows that Polymarket is 90% accurate in predicting how events will occur one month out, and 94% four hours before the event occurs. \",\"slug\":\"polymarket-is-94-accurate-in-predicting-world-events-research\",\"storyType\":\"News\"},{\"_id\":\"49c26f6c-ce90-48b4-b92f-cad668498790\",\"articleDates\":{\"createDate\":\"2025-03-20T18:17:36Z\",\"publishedAt\":\"2025-03-20T18:23:26.906Z\",\"updateDate\":\"2025-03-20T20:57:05.492Z\",\"displayDate\":\"2025-03-20T18:23:26.906Z\"},\"meta\":{\"title\":\"Nasdaq's Shift To Round-The-Clock Stock Trading Due to Crypto, Says Exchange Executive\",\"description\":\"Both Nasdaq and the New York Stock Exchange are in the process of making round-the-clock trading available five or even seven days a week, mimicking crypto’s trading hours.\"},\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/2a4354f264551dd956fa9564622678585ae41150-3000x1738.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHBP/EACEQAAEEAgIDAQEAAAAAAAAAAAECAwQFACEREgYTMWFx/8QAFgEBAQEAAAAAAAAAAAAAAAAAAwEE/8QAGhEAAwEAAwAAAAAAAAAAAAAAAAECERITUf/aAAwDAQACEQMRAD8An1dBtI0XvHLL6AOdHY/MweRzrmRC9CY/obXpZSPo/uUhfjNaxXJWyhxB+aWeMW7Opj++M2VOlDnPZJWeMXpSeUXfCYv1MJhfR2R2WBvrsDDGG7rIjNm8hpoJSDoDDMtxxpy2Kj//2Q==\",\"alt\":\"\"},\"metadata\":{\"_ref\":\"image-2a4354f264551dd956fa9564622678585ae41150-3000x1738-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Markets\",\"sectionSlug\":\"markets\"}],\"title\":\"Nasdaq Shift To Round-The-Clock Stock Trading Partly Due to Crypto, Says Exchange Executive\",\"pathname\":\"/markets/2025/03/20/nasdaq-s-shift-to-round-the-clock-stock-trading-due-to-crypto-says-exchange-executive\",\"_type\":\"article\",\"description\":\"Both Nasdaq and the New York Stock Exchange are in the process of making round-the-clock trading available five or even seven days a week, mimicking crypto’s trading hours.\",\"slug\":\"nasdaq-s-shift-to-round-the-clock-stock-trading-due-to-crypto-says-exchange-executive\",\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Helene Braun\",\"authorSlug\":\"helene-braun\",\"__profilePicture\":{\"source\":{\"alt\":\"Helene Braun\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/24225341b1c9627afba2041357dbccc898213975-790x1054.jpg?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAbABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAcDBggF/8QAKRAAAgEDAgUCBwAAAAAAAAAAAQIEAAMRBQYHEiExQRMiFBYyUWFxwf/EABcBAQEBAQAAAAAAAAAAAAAAAAQFAwb/xAAgEQABAwMFAQAAAAAAAAAAAAABAAIDBBETBRIhMTKh/9oADAMBAAIRAxEAPwBAzZsaJpggxr4kR29w5lwUarHtexuDcVgHSne1FjLhnA+o/bFLr1DdvIr9VBx7RWqOEPwELadpLL2wwTmdM4bPfNGnkxt47KTTw5XWSROztSe5dMuFIW7znOE7/mitICQsx3uhwwLYBC+KKwzuTDTxDhLXgXsjTZG3pes6pHtyC4Ishh0GPNcPXTL+YL8KzaWPZZSAbRx28UwNpM0bgtGawTbY2+pX91UrKq831GGX5R1NHkkO8kq/pmjiqhY69gTb5dMbZUx5O3o7Gwtrl9nK3c480VLsy2raKCygn1G/lFUYqVj2BxHa52r3wTviB8khf//Z\"}}}],\"__f"])
    </script>
    <script>
        self.__next_f.push([1,"eaturedImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAMABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHBP/EACEQAAEEAgIDAQEAAAAAAAAAAAECAwQFACEREgYTMWFx/8QAFgEBAQEAAAAAAAAAAAAAAAAAAwEE/8QAGhEAAwEAAwAAAAAAAAAAAAAAAAECERITUf/aAAwDAQACEQMRAD8An1dBtI0XvHLL6AOdHY/MweRzrmRC9CY/obXpZSPo/uUhfjNaxXJWyhxB+aWeMW7Opj++M2VOlDnPZJWeMXpSeUXfCYv1MJhfR2R2WBvrsDDGG7rIjNm8hpoJSDoDDMtxxpy2Kj//2Q==\",\"alt\":\"\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/2a4354f264551dd956fa9564622678585ae41150-3000x1738.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-2a4354f264551dd956fa9564622678585ae41150-3000x1738-jpg\",\"hotspot\":null,\"crop\":null}}]},{\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/63cf712ed31623c54c8672ad792413a4ffc9eb09-1238x697.png?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"$26\",\"alt\":\"bitcoin miner (Shutterstock)\"},\"metadata\":{\"_ref\":\"image-63cf712ed31623c54c8672ad792413a4ffc9eb09-1238x697-png\",\"hotspot\":{\"y\":0.4288826598579039,\"height\":0.3494414781989832,\"_type\":\"sanity.imageHotspot\",\"width\":0.24125107020547906,\"x\":0.40340057791095896},\"crop\":{\"_type\":\"sanity.imageCrop\",\"right\":0,\"top\":0,\"left\":0,\"bottom\":0}}},\"sectionDetails\":[{\"name\":\"Markets\",\"sectionSlug\":\"markets\"}],\"_id\":\"9ef4af74-22d1-4517-84a3-aef39f807231\",\"pathname\":\"/markets/2025/03/20/bitcoin-miners-feel-squeeze-as-hashprice-erases-post-election-gains\",\"_type\":\"article\",\"meta\":{\"title\":\"Bitcoin Miners Feel the Squeeze as Hashprice Erases Post-Election Gains\",\"description\":\"Transaction fees made up just 1.3% of total block rewards in February, marking their lowest share since the last bear market bottom in 2022.\"},\"slug\":\"bitcoin-miners-feel-squeeze-as-hashprice-erases-post-election-gains\",\"authorDetails\":[{\"name\":null,\"byline\":\"Tom Carreras\",\"authorSlug\":\"tom-carreras\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/fabbb8c177f57043e1cb890e72be2ceea65dc4bf-960x1280.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$27\",\"alt\":\"Tom Carreras\"}}},{\"name\":null,\"byline\":\"AI Boost\",\"authorSlug\":\"ai-boost\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/6ab18162f62bf60f099bac9f3b6007da2f368b79-333x333.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$28\",\"alt\":\"AI Boost\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/63cf712ed31623c54c8672ad792413a4ffc9eb09-1238x697.png?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"$29\",\"alt\":\"bitcoin miner (Shutterstock)\"},\"metadata\":{\"_ref\":\"image-63cf712ed31623c54c8672ad792413a4ffc9eb09-1238x697-png\",\"hotspot\":{\"width\":0.24125107020547906,\"x\":0.40340057791095896,\"y\":0.4288826598579039,\"height\":0.3494414781989832,\"_type\":\"sanity.imageHotspot\"},\"crop\":{\"left\":0,\"bottom\":0,\"_type\":\"sanity.imageCrop\",\"right\":0,\"top\":0}}}],\"title\":\"Bitcoin Miners Feel Squeeze as Hashprice Erases Post-Election Gains\",\"articleDates\":{\"createDate\":\"2025-03-20T17:52:16Z\",\"publishedAt\":\"2025-03-20T18:06:22.060Z\",\"updateDate\":\"2025-03-20T18:06:22.060Z\",\"displayDate\":\"2025-03-20T18:06:20.958Z\"},\"description\":\"Transaction fees made up just 1.3% of total block rewards in February, marking the lowest share since the last bear market bottom in 2022.\",\"storyType\":\"News\"}]},{\"sectionData\":{\"_createdAt\":\"2024-06-18T14:54:33Z\",\"slug\":{\"current\":\"business\",\"_type\":\"slug\"},\"tags\":[],\"active\":true,\"_updatedAt\":\"2024-10-21T08:57:30Z\",\"newsletters\":[{\"_ref\":\"60c6c9f1-927e-4b92-af53-701559cbf7f6\",\"_type\":\"reference\",\"_key\":\"b774cc37dbbe\"},{\"_ref\":\"c723d3a7-de7a-4122-ab50-74458895ef2c\",\"_type\":\"reference\",\"_key\":\"85a6ad41428f\"},{\"_ref\":\"7e78b8be-99e1-4b2b-aaf6-3f11567dc45a\",\"_type\":\"reference\",\"_key\":\"0629d95e77b4\"}],\"meta\":{\"description\":\"\",\"title\":\"Finance\"},\"_type\":\"section\",\"title\":\"Finance\",\"_rev\":\"ZgCTHLQT5xa597d1Mrc2OO\",\"name\":\"Fina"])
    </script>
    <script>
        self.__next_f.push([1,"nce\",\"_id\":\"db214cd4-4fdf-45f0-880b-9bc5c9942e26\"},\"articles\":[{\"articleDates\":{\"createDate\":\"2025-03-20T15:55:11Z\",\"publishedAt\":\"2025-03-20T18:03:59.679Z\",\"updateDate\":\"2025-03-20T18:07:30.187Z\",\"displayDate\":\"2025-03-20T18:03:59.679Z\"},\"description\":\"The firm said it purchased a net $33.1 billion worth of U.S. Treasury securities last year,\",\"meta\":{\"title\":\"USDT Issuer Tether Ranks Among Top Foreign Buyers of U.S. Treasuries in 2024, Firm Says\",\"description\":\"The data underscores the Trump administration's argument for crypto and stablecoins being key for preserving the U.S. dollar's global dominance.\"},\"storyType\":\"News\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABgAFB//EACIQAAEEAgIDAAMAAAAAAAAAAAIBAwQFABIGESEiUQeRwf/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFhEBAQEAAAAAAAAAAAAAAAAAABES/9oADAMBAAIRAxEAPwBJWnZwoSRKyNDp4op37FsfX3D97a0bdW7ZW9s9bNtHoQAXhF+dYBOwm2HMa85Mp1Sdh7H0XSL6/MLw29/x9yIyVdkmCifvKO4115VOV8d2rgbRXAQhXXLMngzaNcTrQTyiNf3LJoj/2Q==\",\"alt\":\"Treasury image via Shutterstock\"},\"metadata\":{\"_ref\":\"image-0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABgAFB//EACIQAAEEAgIDAAMAAAAAAAAAAAIBAwQFABIGESEiUQeRwf/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/8QAFhEBAQEAAAAAAAAAAAAAAAAAABES/9oADAMBAAIRAxEAPwBJWnZwoSRKyNDp4op37FsfX3D97a0bdW7ZW9s9bNtHoQAXhF+dYBOwm2HMa85Mp1Sdh7H0XSL6/MLw29/x9yIyVdkmCifvKO4115VOV8d2rgbRXAQhXXLMngzaNcTrQTyiNf3LJoj/2Q==\",\"alt\":\"Treasury image via Shutterstock\"},\"metadata\":{\"_ref\":\"image-0c75e9986055449ee7dc2c8c2043324e72ca28ca-1500x996-jpg\",\"hotspot\":null,\"crop\":null}},\"_id\":\"985a4dd1-1922-421c-9aba-4ec2762e121a\",\"pathname\":\"/business/2025/03/20/tether-ranks-among-top-foreign-buyers-of-u-s-treasuries-in-2024-firm-says\",\"_type\":\"article\",\"slug\":\"tether-ranks-among-top-foreign-buyers-of-u-s-treasuries-in-2024-firm-says\",\"authorDetails\":[{\"name\":null,\"byline\":\"Krisztian Sandor\",\"authorSlug\":\"krisztian-sandor\",\"__profilePicture\":{\"source\":{\"placeholder\":\"$2a\",\"alt\":\"Krisztian Sandor\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/ebf64cd21ae336f9f8dfbbfc5448be8092a8dd7f-2570x2570.png?auto=format\",\"width\":128,\"height\":128}}}],\"sectionDetails\":[{\"name\":\"Finance\",\"sectionSlug\":\"business\"}],\"title\":\"Tether Ranks Among Top Buyers of U.S. Treasuries in 2024, Firm Says\"},{\"_type\":\"article\",\"description\":\"Ether.fi, the market leader, has 2.6 million ETH staked on its platform and has plans to become a neobank. \",\"storyType\":\"News\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/f3a6f21892e97ee0b8bc3c21332678928479dd75-4498x3000.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAYDBQcI/8QAIhAAAgICAQMFAAAAAAAAAAAAAQIDEQAEBQYSIRQVMTNh/8QAFgEBAQEAAAAAAAAAAAAAAAAAAwUG/8QAHhEAAgEEAwEAAAAAAAAAAAAAAQIRAAMEIQUxUZH/2gAMAwEAAhEDEQA/ALLqzlY9jj0i+ynBK3WJce1rNuxNBrqrK4s910bxUTqPbkhk12oo794JNlfzIy76wYxuwMp8m8JbCqsA1v8AB5tcVBaCyJadnqNfa6Hi5QSRqaPxXkYZg/um3q1F6nYkoXbSG8MA4ae1Lt5Ft1DEbNf/2Q==\",\"alt\":\"Mike Silagad"])
    </script>
    <script>
        self.__next_f.push([1,"ze (Consensus Hong Kong)\"},\"metadata\":{\"_ref\":\"image-f3a6f21892e97ee0b8bc3c21332678928479dd75-4498x3000-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAYDBQcI/8QAIhAAAgICAQMFAAAAAAAAAAAAAQIDEQAEBQYSIRQVMTNh/8QAFgEBAQEAAAAAAAAAAAAAAAAAAwUG/8QAHhEAAgEEAwEAAAAAAAAAAAAAAQIRAAMEIQUxUZH/2gAMAwEAAhEDEQA/ALLqzlY9jj0i+ynBK3WJce1rNuxNBrqrK4s910bxUTqPbkhk12oo794JNlfzIy76wYxuwMp8m8JbCqsA1v8AB5tcVBaCyJadnqNfa6Hi5QSRqaPxXkYZg/um3q1F6nYkoXbSG8MA4ae1Lt5Ft1DEbNf/2Q==\",\"alt\":\"Mike Silagadze (Consensus Hong Kong)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/f3a6f21892e97ee0b8bc3c21332678928479dd75-4498x3000.jpg?auto=format\",\"width\":1920},\"metadata\":{\"_ref\":\"image-f3a6f21892e97ee0b8bc3c21332678928479dd75-4498x3000-jpg\",\"hotspot\":null,\"crop\":null}},\"articleDates\":{\"createDate\":\"2025-03-20T12:51:02Z\",\"publishedAt\":\"2025-03-20T17:37:57.002Z\",\"updateDate\":\"2025-03-20T17:37:57.002Z\",\"displayDate\":\"2025-03-20T17:37:57.002Z\"},\"meta\":{\"title\":\"How Ether.fi Retained TVL as Restaking Lost Its Luster\",\"description\":\"Ether.fi, the market leader, has 2.6 million ETH staked on its platform and has plans to become a neobank. \"},\"slug\":\"how-restaking-protocol-ether-fi-retained-tvl-despite-waning-hype\",\"authorDetails\":[{\"name\":null,\"byline\":\"Oliver Knight\",\"authorSlug\":\"oliver-knight\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c1ea23e66f3b643204bbf92d57a9119b32dc70c6-2316x2316.jpg?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGQABAAMBAQAAAAAAAAAAAAAAAAMECAYJ/8QAJxAAAgEEAgAEBwAAAAAAAAAAAQIDAAQFEQYSBxMxQSFCUVNhcbH/xAAXAQADAQAAAAAAAAAAAAAAAAABAgME/8QAGhEAAgIDAAAAAAAAAAAAAAAAAAIBExExYf/aAAwDAQACEQMRAD8AlyjwZy/toPM0kcZLlf3XE8xtYce0TWznypD1IY/HdXF5NiMPzGOHE3Dz27AxvNLrqT+KpcozOMynJLTH5iZ4Yl1qaEhgCT71BpazhZVSnM7NN8QXXGMZr7C/ylS4GOKDC2UUMpkiSJQrj5hr1pVTOefryu07bPpUyb7KxJJPuTSlME2Z4SXc1zwDEvM5ZhH12foKUpSSE//Z\",\"alt\":\"Oliver Knight\"}}}],\"sectionDetails\":[{\"name\":\"Finance\",\"sectionSlug\":\"business\"}],\"_id\":\"0f1a4048-ba70-46ad-b92c-0f0a74ac2c7b\",\"title\":\"How Ether.fi Retained TVL as Restaking Lost Its Luster\",\"pathname\":\"/business/2025/03/20/how-restaking-protocol-ether-fi-retained-tvl-despite-waning-hype\"},{\"sectionDetails\":[{\"name\":\"Finance\",\"sectionSlug\":\"business\"}],\"_id\":\"db1ef387-a31f-4ffc-8166-b12b3955f8e8\",\"title\":\"Data Storage Protocol Walrus Raises $140M in Token Sale Ahead of Mainnet Launch\",\"pathname\":\"/business/2025/03/20/data-storage-protocol-walrus-raises-usd140m-in-token-sale-ahead-of-mainnet-launch\",\"articleDates\":{\"createDate\":\"2025-03-20T16:38:44Z\",\"publishedAt\":\"2025-03-20T17:16:27.507Z\",\"updateDate\":\"2025-03-20T17:16:27.507Z\",\"displayDate\":\"2025-03-20T17:16:27.507Z\"},\"_type\":\"article\",\"meta\":{\"title\":\"Data Storage Protocol Walrus Sells $140M of Tokens Ahead of Mainnet Launch\",\"description\":\"The mainnet of the protocol, originally developed by Mysten Labs and built on layer-1 blockchain Sui, will launch on March 27.\"},\"description\":\"The mainnet of the protocol, originally developed by Mysten Labs and built on layer-1 blockchain Sui, will launch on March 27\",\"slug\":\"data-storage-protocol-walrus-raises-usd140m-in-token-sale-ahead-of-mainnet-launch\",\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Jamie Crawley\",\"authorSlug\":\"jamie-crawley\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/33778aa9a17ec6cac856c206e2a67ecf9465dcd0-1061x1061.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$2b\",\"alt\":\"Jamie Crawley\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"width\":1920,\"height\":1080,\"placeholder\":\"dat"])
    </script>
    <script>
        self.__next_f.push([1,"a:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABgACB//EACMQAAIBAwQBBQAAAAAAAAAAAAECAAMEEgUGEVExEyEiYXH/xAAWAQEBAQAAAAAAAAAAAAAAAAABAAL/xAAXEQEBAQEAAAAAAAAAAAAAAAAAEgER/9oADAMBAAIRAxEAPwDq15urQdPsvULFvb4juHbjfi1iFs0opl4OXMAWbGpTXM5fs2oCliFUHnqF6pwyqa5qrtkW89CUDVLuuG4FVwB9ymqHH//Z\",\"alt\":\"16:9 Walrus (Joffi2017/Pixabay)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/9e39bbf05e4005910d9ff2e72f517d410c7244a3-1152x648.jpg?auto=format\"},\"metadata\":{\"_ref\":\"image-9e39bbf05e4005910d9ff2e72f517d410c7244a3-1152x648-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABgACB//EACMQAAIBAwQBBQAAAAAAAAAAAAECAAMEEgUGEVExEyEiYXH/xAAWAQEBAQAAAAAAAAAAAAAAAAABAAL/xAAXEQEBAQEAAAAAAAAAAAAAAAAAEgER/9oADAMBAAIRAxEAPwDq15urQdPsvULFvb4juHbjfi1iFs0opl4OXMAWbGpTXM5fs2oCliFUHnqF6pwyqa5qrtkW89CUDVLuuG4FVwB9ymqHH//Z\",\"alt\":\"16:9 Walrus (Joffi2017/Pixabay)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/9e39bbf05e4005910d9ff2e72f517d410c7244a3-1152x648.jpg?auto=format\"},\"metadata\":{\"_ref\":\"image-9e39bbf05e4005910d9ff2e72f517d410c7244a3-1152x648-jpg\",\"hotspot\":null,\"crop\":null}}},{\"pathname\":\"/business/2025/03/20/uranium-digital-raises-usd6-1m-to-speed-debut-of-crypto-powered-spot-market\",\"_type\":\"article\",\"description\":\"Founder Alex Dolesky says he needs to move faster to meet exceptional demand.\",\"meta\":{\"title\":\"Uranium Digital Raises $6.1M to Speed Debut of Crypto-Powered Spot Market for the Nuclear Fuel\",\"description\":\"Founder Alex Dolesky says he needs to move faster to meet exceptional demand.\"},\"slug\":\"uranium-digital-raises-usd6-1m-to-speed-debut-of-crypto-powered-spot-market\",\"storyType\":\"News\",\"articleDates\":{\"createDate\":\"2025-03-20T11:26:35.887Z\",\"publishedAt\":\"2025-03-20T12:00:00.000Z\",\"updateDate\":\"2025-03-20T11:32:45.220Z\",\"displayDate\":\"2025-03-20T12:00:00.000Z\"},\"authorDetails\":[{\"name\":null,\"byline\":\"Danny Nelson\",\"authorSlug\":\"danny-nelson\",\"__profilePicture\":{\"source\":{\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAAAAcFBv/EACIQAAICAQQCAwEAAAAAAAAAAAECAwQABQYRExIhUWFxQf/EABgBAAMBAQAAAAAAAAAAAAAAAAIDBQAE/8QAHREAAQQDAQEAAAAAAAAAAAAAAQACAxEEITGxIv/aAAwDAQACEQMRAD8AnGmUJJ90WZ7t6arXgQyxiL2xX6yk6Ztm1boQ3avZZqTD12Dxb9zgdkbiMW4klvRQxROnX5lfQ/cucO+tLggRo2jeCJeAFHAY/AGcpi+qeFYx8t0bCYjo9C5OrdoaXGatvoMysefM+x9YzX1Pc+07lxrFrQVkmkALMHA94xrcSKtu8Ut2VJZpvqjOlwxzNRgdF65JVVvkgnNze6LR3RPUrKEggYKij+DjGMx2UfIhSwjy5LMx5J+cYxij1CF//9k=\",\"alt\":\"Danny Nelson\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/747a5f0ee76bfafb29d5c12380fb1ab874ea4009-2587x2587.jpg?auto=format\",\"width\":128}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c022c327dd68e5943910ccd7c94e32ced14193ee-1280x720.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHBAb/xAAiEAACAgEEAQUAAAAAAAAAAAABAgMEAAYREiEFBxMyQYH/xAAWAQEBAQAAAAAAAAAAAAAAAAACAwT/xAAdEQEAAgICAwAAAAAAAAAAAAABAAIDERNBEjHB/9oADAMBAAIRAxEAPwCh340FaZ3+KqT1nD6UpJJLaeItGO+Snrc/RzX53yFp9Gmdpm90nYsOji3SEruJizEkbZnz5nI1fWvpK+fAPZuPXpqrEch+nDIZ6w37dTXNuOtamij4IeKuQNyMMdVsFouUOp//2Q==\",\"alt\":\"Photo of Uranium Digital founder Alex D"])
    </script>
    <script>
        self.__next_f.push([1,"olesky speaking at the 2025 Penn Blockchain Conference \"},\"metadata\":{\"_ref\":\"image-c022c327dd68e5943910ccd7c94e32ced14193ee-1280x720-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"alt\":\"Photo of Uranium Digital founder Alex Dolesky speaking at the 2025 Penn Blockchain Conference \",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c022c327dd68e5943910ccd7c94e32ced14193ee-1280x720.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHBAb/xAAiEAACAgEEAQUAAAAAAAAAAAABAgMEAAYREiEFBxMyQYH/xAAWAQEBAQAAAAAAAAAAAAAAAAACAwT/xAAdEQEAAgICAwAAAAAAAAAAAAABAAIDERNBEjHB/9oADAMBAAIRAxEAPwCh340FaZ3+KqT1nD6UpJJLaeItGO+Snrc/RzX53yFp9Gmdpm90nYsOji3SEruJizEkbZnz5nI1fWvpK+fAPZuPXpqrEch+nDIZ6w37dTXNuOtamij4IeKuQNyMMdVsFouUOp//2Q==\"},\"metadata\":{\"_ref\":\"image-c022c327dd68e5943910ccd7c94e32ced14193ee-1280x720-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Finance\",\"sectionSlug\":\"business\"}],\"_id\":\"f5a56a85-ce13-4a70-978c-f99f3894499d\",\"title\":\"Uranium Digital Raises $6.1M to Speed Debut of Crypto-Powered Spot Market\"}]},{\"sectionData\":{\"title\":\"Tech\",\"_updatedAt\":\"2024-10-21T08:58:16Z\",\"_id\":\"7f5b349d-33c5-4ac1-ba84-c84fcd9ba7c6\",\"newsletters\":[{\"_ref\":\"9b7368b4-a644-4042-a83b-4e38b01daebb\",\"_type\":\"reference\",\"_key\":\"10a4459cbc1e\"}],\"slug\":{\"_type\":\"slug\",\"current\":\"tech\"},\"meta\":{\"title\":\"Tech\",\"description\":\"\"},\"name\":\"Tech\",\"tags\":[],\"_createdAt\":\"2024-09-17T18:53:52Z\",\"_rev\":\"ZgCTHLQT5xa597d1MrcA9t\",\"_type\":\"section\",\"active\":true},\"articles\":[{\"title\":\"Bitcoin DeFi Expansion Faces Fork Dilemma as Developers Explore ZK Proofs\",\"pathname\":\"/tech/2025/03/20/bitcoin-defi-expansion-faces-fork-dilemma-as-developers-explore-zk-proofs\",\"_type\":\"article\",\"meta\":{\"title\":\"BitcoinOS: ZK Proofs for Bitcoin Without Needing 'Problematic' Fork of the Network\",\"description\":\"BitcoinOS contributor and crypto OG Edan Yago describes forks on Bitcoin as like \\\"open-heart surgery.\\\"\"},\"slug\":\"bitcoin-defi-expansion-faces-fork-dilemma-as-developers-explore-zk-proofs\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAUBBAb/xAAkEAACAAYBAwUAAAAAAAAAAAABAgADBAUGESEHE7ESFDEyYf/EABUBAQEAAAAAAAAAAAAAAAAAAAIA/8QAFxEBAQEBAAAAAAAAAAAAAAAAAAEREv/aAAwDAQACEQMRAD8A1VkxHHns1JPmW9CWkhyefnUTiVFjuQUtROk21VWRMMog7HIhvizs1hoATse3XxCnpMPTR31R9RXvoQYdLspstlorksqVRIF7YbX7zBFLqPUTUyPSOQOyvkwQNXL/2Q==\",\"alt\":\"Photo of Edan Yago standing in front of  a sponsor board. (Courtesy: BitcoinOS)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679.jpg?auto=format\",\"width\":1920},\"metadata\":{\"_ref\":\"image-678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679-jpg\",\"hotspot\":{\"x\":0.46942978308945105,\"y\":0.5613692029354334,\"height\":0.44488776883341774,\"_type\":\"sanity.imageHotspot\",\"width\":0.3415637142443783},\"crop\":{\"_type\":\"sanity.imageCrop\",\"right\":0,\"top\":0.19526580241863037,\"left\":0,\"bottom\":0}}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAUBBAb/xAAkEAACAAYBAwUAAAAAAAAAAAABAgADBAUGESEHE7ESFDEyYf/EABUBAQEAAAAAAAAAAAAAAAAAAAIA/8QAFxEBAQEBAAAAAAAAAAAAAAAAAAEREv/aAAwDAQACEQMRAD8A1VkxHHns1JPmW9CWkhyefnUTiVFjuQUtROk21VWRMMog7HIhvizs1hoATse3XxCnpMPTR31R9RXvoQYdLspstlor"])
    </script>
    <script>
        self.__next_f.push([1,"ksqVRIF7YbX7zBFLqPUTUyPSOQOyvkwQNXL/2Q==\",\"alt\":\"Photo of Edan Yago standing in front of  a sponsor board. (Courtesy: BitcoinOS)\"},\"metadata\":{\"_ref\":\"image-678e8b170d604bc44e78f759f1cbdad8603962dc-1207x679-jpg\",\"hotspot\":{\"_type\":\"sanity.imageHotspot\",\"width\":0.3415637142443783,\"x\":0.46942978308945105,\"y\":0.5613692029354334,\"height\":0.44488776883341774},\"crop\":{\"bottom\":0,\"_type\":\"sanity.imageCrop\",\"right\":0,\"top\":0.19526580241863037,\"left\":0}}},\"_id\":\"e532a1f0-39e1-4bc7-8809-2399cd8485ba\",\"articleDates\":{\"createDate\":\"2025-03-19T16:33:02Z\",\"publishedAt\":\"2025-03-20T15:54:33.423Z\",\"updateDate\":\"2025-03-20T15:54:33.423Z\",\"displayDate\":\"2025-03-20T15:54:33.423Z\"},\"description\":\"BitcoinOS contributor and crypto OG Edan Yago describes forks on Bitcoin as like \\\"open-heart surgery.\\\"\",\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Jamie Crawley\",\"authorSlug\":\"jamie-crawley\",\"__profilePicture\":{\"source\":{\"width\":128,\"height\":128,\"placeholder\":\"$2c\",\"alt\":\"Jamie Crawley\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/33778aa9a17ec6cac856c206e2a67ecf9465dcd0-1061x1061.png?auto=format\"}}}],\"sectionDetails\":[{\"name\":\"Tech\",\"sectionSlug\":\"tech\"}]},{\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Margaux Nijkerk\",\"authorSlug\":\"margaux-nijkerk\",\"__profilePicture\":{\"source\":{\"height\":128,\"placeholder\":\"$2d\",\"alt\":\"Margaux Nijkerk\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/88445131d8eb3c9dfb2a407dcf35f046a6186815-800x800.png?auto=format\",\"width\":128}}}],\"sectionDetails\":[{\"name\":\"Tech\",\"sectionSlug\":\"tech\"}],\"_id\":\"c276b8f9-dd98-4d68-83f4-91020fc1ff25\",\"pathname\":\"/tech/2025/03/19/the-protocol-meet-hoodi-ethereum-s-new-testnet\",\"articleDates\":{\"createDate\":\"2025-03-19T16:57:38.634Z\",\"publishedAt\":\"2025-03-19T17:09:29.321Z\",\"updateDate\":\"2025-03-19T17:09:29.321Z\",\"displayDate\":\"2025-03-19T17:09:29.321Z\"},\"_type\":\"article\",\"meta\":{\"title\":\"The Protocol: Meet Hoodi, Ethereum’s New Testnet\",\"description\":\"Also: Microsoft Raises Alarm of Malware Targeting Crypto Wallets; Halliday Raises $20M for AI Protocol; Sam Altman's World and Razer Want to Defeat Gaming's Bot Problem.\"},\"slug\":\"the-protocol-meet-hoodi-ethereum-s-new-testnet\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c4b55ff67ef1d065e3e2e556ba0209a416b27d44-2048x1365.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQGA//EACAQAAICAwABBQAAAAAAAAAAAAECAwQABRESExQhYYH/xAAXAQADAQAAAAAAAAAAAAAAAAAAAwQF/8QAGhEAAgMBAQAAAAAAAAAAAAAAAQIAAxIRIf/aAAwDAQACEQMRAD8AidZo6768TOx9QjvM2j0lezJ4sSFA6eYn7qaB4IYnKozcP2MZv2Zaygwt4liAc1y7NogwChcqR7Jzc65Kl94omJQfIJwx69UE1lnLt0/uGUpcuR0xL0to8E//2Q==\",\"alt\":\"Robot Couple\"},\"metadata\":{\"_ref\":\"image-c4b55ff67ef1d065e3e2e556ba0209a416b27d44-2048x1365-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQGA//EACAQAAICAwABBQAAAAAAAAAAAAECAwQABRESExQhYYH/xAAXAQADAQAAAAAAAAAAAAAAAAAAAwQF/8QAGhEAAgMBAQAAAAAAAAAAAAAAAQIAAxIRIf/aAAwDAQACEQMRAD8AidZo6768TOx9QjvM2j0lezJ4sSFA6eYn7qaB4IYnKozcP2MZv2Zaygwt4liAc1y7NogwChcqR7Jzc65Kl94omJQfIJwx69UE1lnLt0/uGUpcuR0xL0to8E//2Q==\",\"alt\":\"Robot Couple\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c4b55ff67ef1d065e3e2e556ba0209a416b27d44-2048x1365.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-c4b55ff67ef1d065e3e2e556ba0209a416b27d44-2048x1365-jpg\",\"hotspot\":null,\"crop\":null}},\"title\":\"The Protocol: Meet Hoodi, Ethereum’s New Testnet\",\"description\":\"Also: Microsoft Raises Alarm of Malware Targeting Crypto Wallets; Halliday Raises $20M for AI Pro"])
    </script>
    <script>
        self.__next_f.push([1,"tocol; Sam Altman's World and Razer Want to Defeat Gaming's Bot Problem.\"},{\"storyType\":\"News\",\"pathname\":\"/tech/2025/03/19/elon-musk-s-ai-start-up-nvidia-join-microsoft-blackrock-mgx-ai-fund\",\"authorDetails\":[{\"name\":null,\"byline\":\"Helene Braun\",\"authorSlug\":\"helene-braun\",\"__profilePicture\":{\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAbABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAcDBggF/8QAKRAAAgEDAgUCBwAAAAAAAAAAAQIEAAMRBQYHEiExQRMiFBYyUWFxwf/EABcBAQEBAQAAAAAAAAAAAAAAAAQFAwb/xAAgEQABAwMFAQAAAAAAAAAAAAABAAIDBBETBRIhMTKh/9oADAMBAAIRAxEAPwBAzZsaJpggxr4kR29w5lwUarHtexuDcVgHSne1FjLhnA+o/bFLr1DdvIr9VBx7RWqOEPwELadpLL2wwTmdM4bPfNGnkxt47KTTw5XWSROztSe5dMuFIW7znOE7/mitICQsx3uhwwLYBC+KKwzuTDTxDhLXgXsjTZG3pes6pHtyC4Ishh0GPNcPXTL+YL8KzaWPZZSAbRx28UwNpM0bgtGawTbY2+pX91UrKq831GGX5R1NHkkO8kq/pmjiqhY69gTb5dMbZUx5O3o7Gwtrl9nK3c480VLsy2raKCygn1G/lFUYqVj2BxHa52r3wTviB8khf//Z\",\"alt\":\"Helene Braun\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/24225341b1c9627afba2041357dbccc898213975-790x1054.jpg?auto=format\",\"width\":128,\"height\":128}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAQFAwf/xAAjEAACAQMDBAMAAAAAAAAAAAABAgMABAUGESESFDFBBzJh/8QAFgEBAQEAAAAAAAAAAAAAAAAABAMF/8QAGxEAAwACAwAAAAAAAAAAAAAAAAECERIhMVH/2gAMAwEAAhEDEQA/AOJWeNC2LlQrMAG2HPuq0mLt7y+tormMqskqr1L+7eKQE/bYFZlXqkJ5JbyN/FbYnIS5DPWbzABRKHCLwBtTEl0Y62p7eZImvMPBgdU3uOTqYQkDc++KKf8AkM97qq7uJfu+xNFRpcjorMo//9k=\",\"alt\":\"Abstract image of a futuristic server with light blue and green LED lights. (Getty Images)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/28707208804433dec19a29f8f44340cb0433abc0-5700x3800.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-28707208804433dec19a29f8f44340cb0433abc0-5700x3800-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAQFAwf/xAAjEAACAQMDBAMAAAAAAAAAAAABAgMABAUGESESFDFBBzJh/8QAFgEBAQEAAAAAAAAAAAAAAAAABAMF/8QAGxEAAwACAwAAAAAAAAAAAAAAAAECERIhMVH/2gAMAwEAAhEDEQA/AOJWeNC2LlQrMAG2HPuq0mLt7y+tormMqskqr1L+7eKQE/bYFZlXqkJ5JbyN/FbYnIS5DPWbzABRKHCLwBtTEl0Y62p7eZImvMPBgdU3uOTqYQkDc++KKf8AkM97qq7uJfu+xNFRpcjorMo//9k=\",\"alt\":\"Abstract image of a futuristic server with light blue and green LED lights. (Getty Images)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/28707208804433dec19a29f8f44340cb0433abc0-5700x3800.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-28707208804433dec19a29f8f44340cb0433abc0-5700x3800-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Tech\",\"sectionSlug\":\"tech\"}],\"_id\":\"ed0a8c40-3278-46d5-905a-a21cbb8640d6\",\"title\":\"Elon Musk’s AI Start-Up and Nvidia Join Microsoft, BlackRock, MGX AI Fund\",\"articleDates\":{\"createDate\":\"2025-03-19T15:47:26Z\",\"publishedAt\":\"2025-03-19T15:54:17.547Z\",\"updateDate\":\"2025-03-19T18:03:26.473Z\",\"displayDate\":\"2025-03-19T15:54:17.547Z\"},\"_type\":\"article\",\"description\":\"The vehicle, which was created in September of last year, aims to raise $30 billion in funding.\",\"meta\":{\"title\":\"Elon Musk’s AI Start Up (xAI), Nvidia (NVDA) Join Microsoft, BlackRock, MGX AI Fund\",\"description\":\"The vehicle, which was created in September of last year, aims to raise $30 billion in funding.\"},\"slug\":\"elon-musk-s-ai-start-up-nvidia-join-microsoft-blackrock-mgx-ai-fund\"},{\"_id\":\"1636b831-1dd6-4784-82f5-6ed1f45644f9\",\"title\":\"Ethereum to Sunset ‘Holesky’ Testnet in September\",\"_type\":\"articl"])
    </script>
    <script>
        self.__next_f.push([1,"e\",\"description\":\"The deprecation plan comes after Holesky fell offline due to a faulty test of Ethereum’s upcoming Pectra update.\",\"slug\":\"ethereum-to-sunset-holesky-testnet-in-september\",\"storyType\":\"News\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/bf3bb2a695e2f328f36be1ff918cbf9eb4231f1d-3000x2000.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABAAFBv/EACAQAAICAQMFAAAAAAAAAAAAAAECAAMRBAUhEyMxQXH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAgP/xAAdEQACAQQDAAAAAAAAAAAAAAAAAgEDBBIUIUFR/9oADAMBAAIRAxEAPwDgN1K9QzK1PZc1vw2AcfYbVb1bbULWqryfUE+6GxyzUpk+SSTHNUjoPFu6cMLNgJlAnWnPFaykZwaa7en/2Q==\",\"alt\":\"Ethereum Abstract Crystal\"},\"metadata\":{\"_ref\":\"image-bf3bb2a695e2f328f36be1ff918cbf9eb4231f1d-3000x2000-jpg\",\"hotspot\":null,\"crop\":null}}],\"sectionDetails\":[{\"name\":\"Tech\",\"sectionSlug\":\"tech\"}],\"pathname\":\"/tech/2025/03/19/ethereum-to-sunset-holesky-testnet-in-september\",\"articleDates\":{\"createDate\":\"2025-03-19T14:49:46Z\",\"publishedAt\":\"2025-03-19T15:07:41.634Z\",\"updateDate\":\"2025-03-19T15:20:43.806Z\",\"displayDate\":\"2025-03-19T15:07:41.416Z\"},\"meta\":{\"title\":\"Ethereum to Sunset ‘Holesky’ Testnet in September\",\"description\":\"The deprecation plan comes after Holesky fell offline due to a faulty test of Ethereum’s upcoming Pectra update.\"},\"authorDetails\":[{\"name\":null,\"byline\":\"Margaux Nijkerk\",\"authorSlug\":\"margaux-nijkerk\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/88445131d8eb3c9dfb2a407dcf35f046a6186815-800x800.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$2e\",\"alt\":\"Margaux Nijkerk\"}}}],\"__image\":{\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABAAFBv/EACAQAAICAQMFAAAAAAAAAAAAAAECAAMRBAUhEyMxQXH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAgP/xAAdEQACAQQDAAAAAAAAAAAAAAAAAgEDBBIUIUFR/9oADAMBAAIRAxEAPwDgN1K9QzK1PZc1vw2AcfYbVb1bbULWqryfUE+6GxyzUpk+SSTHNUjoPFu6cMLNgJlAnWnPFaykZwaa7en/2Q==\",\"alt\":\"Ethereum Abstract Crystal\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/bf3bb2a695e2f328f36be1ff918cbf9eb4231f1d-3000x2000.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-bf3bb2a695e2f328f36be1ff918cbf9eb4231f1d-3000x2000-jpg\",\"hotspot\":null,\"crop\":null}}}]},{\"sectionData\":{\"_rev\":\"57EMnMDl2Y1cYcN32WrEjC\",\"tags\":[],\"_id\":\"a03e8de7-2ad4-41d8-9560-1d0969e82505\",\"meta\":{\"description\":\"\",\"title\":\"Policy\"},\"_type\":\"section\",\"_updatedAt\":\"2024-10-21T08:57:59Z\",\"newsletters\":[{\"_ref\":\"fafde0d6-e5f1-494b-b81f-9b9b85de9b84\",\"_type\":\"reference\",\"_key\":\"509094fdd959\"}],\"name\":\"Policy\",\"active\":true,\"title\":\"Policy\",\"slug\":{\"current\":\"policy\",\"_type\":\"slug\"},\"_createdAt\":\"2024-09-17T18:54:41Z\"},\"articles\":[{\"authorDetails\":[{\"name\":null,\"byline\":\"Jesse Hamilton\",\"authorSlug\":\"jesse-hamilton\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/89d63a028fc5595c94c07d12b2061aacfa84266c-1721x1721.jpg?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGAABAQEBAQAAAAAAAAAAAAAAAAYDBQf/xAAlEAABBAIBBAEFAAAAAAAAAAABAAIDBAUREgYhIkETFTJRYZH/xAAYAQEAAwEAAAAAAAAAAAAAAAAEAQMFBv/EABsRAQACAwEBAAAAAAAAAAAAAAEAAgMREiEx/9oADAMBAAIRAxEAPwBhctlKTG1xExkDY3Ecncnk+l024SvHgpshDlJvqXEvft2tn8aUPYzVS31Dj3x1nwFp483S7AB96VHm83jcVcgrXrcc5fp/yMbstH70huLIPKexmK+LhvvZNWYeGzBDLPYuiZzAXgMJ7oqzH5Fl6qyep1HQbC77QYwD/EUlHUM2NzwO80FncDxPZZPqxy+T+WyD7RF0Fg7mWrxJyS/ZpyyRV5XNjDt6RERbBuXnyf/Z\",\"a"])
    </script>
    <script>
        self.__next_f.push([1,"lt\":\"Jesse Hamilton\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":null,\"metadata\":{\"_ref\":null,\"hotspot\":null,\"crop\":null}},{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAKABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQFBv/EACMQAAIBAwQBBQAAAAAAAAAAAAECAwAEEQUGByFBEhMiMZH/xAAVAQEBAAAAAAAAAAAAAAAAAAACA//EABcRAAMBAAAAAAAAAAAAAAAAAAABESL/2gAMAwEAAhEDEQA/AG973LWeiB4cpI59JceBUXjS5kk1KWEyO8BUswY5ANarc6I+2rkOqsAPIzUrjOKMaXOwRQxPZA7NBrRdPMhsfbtj38f2ilFAx9CinCdP/9k=\",\"alt\":\"U.S. Treasury Building (Nikhilesh De/CoinDesk)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/dc2a33d06b098ab76df06585ea6904a717a90037-5204x2681.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-dc2a33d06b098ab76df06585ea6904a717a90037-5204x2681-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":null,\"metadata\":{\"_ref\":null,\"hotspot\":null,\"crop\":null}},\"_id\":\"b26ce414-ad3e-4f99-9aa9-74af1ed216c8\",\"title\":\"U.S. Bank Agency Cuts 'Reputational Risk' From Exams After Crypto Sector Cites Issues\",\"meta\":{\"title\":\"U.S. Bank Agency Cuts 'Reputational Risk' From Exams After Crypto Sector Cites Issues\",\"description\":\"The crypto industry argued that U.S. regulators used the idea of risks to banks' reputation to pressure them to reject digital assets clients, and the OCC has answered.\"},\"storyType\":\"News\",\"sectionDetails\":[{\"name\":\"Policy\",\"sectionSlug\":\"policy\"}],\"pathname\":\"/policy/2025/03/20/u-s-bank-agency-cuts-reputational-risk-from-exams-after-crypto-sector-cites-issues\",\"articleDates\":{\"createDate\":\"2025-03-20T22:06:23.885Z\",\"publishedAt\":\"2025-03-20T22:28:34.604Z\",\"updateDate\":\"2025-03-20T22:28:34.604Z\",\"displayDate\":\"2025-03-20T22:28:34.604Z\"},\"_type\":\"article\",\"description\":\"The crypto industry argued that U.S. regulators used the idea of risks to banks' reputation to pressure them to reject digital assets clients, and the OCC has answered.\",\"slug\":\"u-s-bank-agency-cuts-reputational-risk-from-exams-after-crypto-sector-cites-issues\"},{\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/7a91fc4f69e67febb0ab81c532a75324d6e0685f-3000x2077.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAOABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHBAb/xAAgEAABAwQDAQEAAAAAAAAAAAABAgMEAAUGERIhIzFB/8QAFAEBAAAAAAAAAAAAAAAAAAAABP/EABkRAQEBAAMAAAAAAAAAAAAAAAEAERMhMf/aAAwDAQACEQMRAD8A3Y1kdtOHw46HUoW1rkgq0oAHs11V0v7caJAlx3m/UjgSdg1DMdiRhFktyWytxxPALSdaT+imtrxtN8vDIgTZMaBHSCWXFciD8PGghvjL6E02vrOU2hxtKjcou9d+g6NFNLfiWPRrdFaVaYriktJ2tTYJV19NFI44rf/Z\",\"alt\":\"Paul Atkins and Christopher Cox\"},\"metadata\":{\"_ref\":\"image-7a91fc4f69e67febb0ab81c532a75324d6e0685f-3000x2077-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAOABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHBAb/xAAgEAABAwQDAQEAAAAAAAAAAAABAgMEAAUGERIhIzFB/8QAFAEBAAAAAAAAAAAAAAAAAAAABP/EABkRAQEBAAMAAAAAAAAAAAAAAAEAERMhMf/aAAwDAQACEQMRAD8A3Y1kdtOHw46HUoW1rkgq0oAHs11V0v7caJAlx3m/UjgSdg1DMdiRhFktyWytxxPALSdaT+imtrxtN8vDIgTZMaBHSCWXFciD8PGghvjL6E02vrOU2hxtKjcou9d+g6NFNLfiWPRrdFaVaYriktJ2tTYJV19NFI44rf/Z\",\"alt\":\"Paul Atkins and Christopher Cox\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/7a91fc4f69e67febb0ab81c532a75324d6e0685f-3000x2077.jpg?auto=format\",\"width\":1920},\"metadata\":{\"_ref\":\"image-7a91fc4f69e67febb0ab81c532a75324d6e0685f-3000x2077-jpg\",\"hotspot\":null,\"crop\":null}},\"_id\":\"6c72f2b0-28a4-4f2b-8fcb-6690c8935e7e\",\"_type\":\"article\",\"description\":\"Tw"])
    </script>
    <script>
        self.__next_f.push([1,"o top financial regulators in the crypto space have a date with the Senate as SEC nominee Paul Atkins and OCC pick Jonathan Gould get a March 27 hearing.\",\"meta\":{\"title\":\"SEC Chair Nominee Paul Atkins to Face Senate Panel Next Week\",\"description\":\"Two top financial regulators in the crypto space have a date with the Senate as SEC nominee Paul Atkins and OCC pick Jonathan Gould get a March 27 hearing.\"},\"slug\":\"sec-chair-nominee-paul-atkins-to-face-senate-panel-next-week\",\"authorDetails\":[{\"name\":null,\"byline\":\"Jesse Hamilton\",\"authorSlug\":\"jesse-hamilton\",\"__profilePicture\":{\"source\":{\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGAABAQEBAQAAAAAAAAAAAAAAAAYDBQf/xAAlEAABBAIBBAEFAAAAAAAAAAABAAIDBAUREgYhIkETFTJRYZH/xAAYAQEAAwEAAAAAAAAAAAAAAAAEAQMFBv/EABsRAQACAwEBAAAAAAAAAAAAAAEAAgMREiEx/9oADAMBAAIRAxEAPwBhctlKTG1xExkDY3Ecncnk+l024SvHgpshDlJvqXEvft2tn8aUPYzVS31Dj3x1nwFp483S7AB96VHm83jcVcgrXrcc5fp/yMbstH70huLIPKexmK+LhvvZNWYeGzBDLPYuiZzAXgMJ7oqzH5Fl6qyep1HQbC77QYwD/EUlHUM2NzwO80FncDxPZZPqxy+T+WyD7RF0Fg7mWrxJyS/ZpyyRV5XNjDt6RERbBuXnyf/Z\",\"alt\":\"Jesse Hamilton\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/89d63a028fc5595c94c07d12b2061aacfa84266c-1721x1721.jpg?auto=format\"}}}],\"sectionDetails\":[{\"name\":\"Policy\",\"sectionSlug\":\"policy\"}],\"title\":\"SEC Chair Nominee Paul Atkins to Face Senate Panel Next Week\",\"pathname\":\"/policy/2025/03/20/sec-chair-nominee-paul-atkins-to-face-senate-panel-next-week\",\"articleDates\":{\"createDate\":\"2025-03-20T21:26:18.736Z\",\"publishedAt\":\"2025-03-20T21:41:06.116Z\",\"updateDate\":\"2025-03-20T21:41:06.116Z\",\"displayDate\":\"2025-03-20T21:41:06.116Z\"},\"storyType\":\"News\"},{\"sectionDetails\":[{\"name\":\"Policy\",\"sectionSlug\":\"policy\"}],\"pathname\":\"/policy/2025/03/20/proof-of-work-crypto-mining-doesn-t-trigger-securities-laws-sec-says\",\"articleDates\":{\"createDate\":\"2025-03-20T20:32:20Z\",\"publishedAt\":\"2025-03-20T20:36:40Z\",\"updateDate\":\"2025-03-20T20:36:40Z\",\"displayDate\":\"2025-03-20T20:36:40Z\"},\"_type\":\"article\",\"description\":\"In a staff statement published Thursday, the SEC said that both solo mining and mining pool operations would fail the first prong of the Howey Test.\",\"meta\":{\"title\":\"Proof-of-Work Crypto Mining Doesn’t Trigger Securities Laws, SEC Says\",\"description\":\"In a staff statement published Thursday, the SEC said that both solo mining and mining pool operations would fail the first prong of the Howey Test.\"},\"_id\":\"00271b64-2eec-45d8-bd43-1fc69506c633\",\"title\":\"Proof-of-Work Crypto Mining Doesn’t Trigger Securities Laws, SEC Says\",\"slug\":\"proof-of-work-crypto-mining-doesn-t-trigger-securities-laws-sec-says\",\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Cheyenne Ligon\",\"authorSlug\":\"cheyenne-ligon\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/6556b2f067016f00ffdb60588a3936bc0e869ce7-1830x1830.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$2f\",\"alt\":\"Cheyenne Ligon\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQFBv/EAB8QAAICAwADAQEAAAAAAAAAAAECAwQAESEFBhIxYf/EABcBAAMBAAAAAAAAAAAAAAAAAAIDBAX/xAAeEQABBAIDAQAAAAAAAAAAAAABAAIDEQQhMUFhcf/aAAwDAQACEQMRAD8Axl0G7elkFMKnPofhXF7lcx+wNDFGJYWUGNDzmsRktThrAEr6ZTvv7zJXudyxHc8KUldStVCCD/cPKBOQKPe/UyNwEZsfFppPIWKvzFFCgAHdrvuGRrtmYSrqRhtAT3DNkROrTlKSL4X/2Q==\",\"alt\":\"SEC Commissioner Hester Peirce (Nikhilesh De/CoinDesk)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/d1c75b8857f5c36e8d847c43e3dd545814aed4d1-2048x1152.jpg?auto=format\"},\"metadata\":{\"_ref\":\"image-d1c75b8857f5c36e8d847c43e3dd545814aed4d1-2048x1152-jpg\",\"hotspot\":null,\"crop\":null}"])
    </script>
    <script>
        self.__next_f.push([1,"}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/d1c75b8857f5c36e8d847c43e3dd545814aed4d1-2048x1152.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQFBv/EAB8QAAICAwADAQEAAAAAAAAAAAECAwQAESEFBhIxYf/EABcBAAMBAAAAAAAAAAAAAAAAAAIDBAX/xAAeEQABBAIDAQAAAAAAAAAAAAABAAIDEQQhMUFhcf/aAAwDAQACEQMRAD8Axl0G7elkFMKnPofhXF7lcx+wNDFGJYWUGNDzmsRktThrAEr6ZTvv7zJXudyxHc8KUldStVCCD/cPKBOQKPe/UyNwEZsfFppPIWKvzFFCgAHdrvuGRrtmYSrqRhtAT3DNkROrTlKSL4X/2Q==\",\"alt\":\"SEC Commissioner Hester Peirce (Nikhilesh De/CoinDesk)\"},\"metadata\":{\"_ref\":\"image-d1c75b8857f5c36e8d847c43e3dd545814aed4d1-2048x1152-jpg\",\"hotspot\":null,\"crop\":null}}},{\"title\":\"Gotbit Founder Aleksei Andriunin Pleads Guilty to Wire Fraud, Market Manipulation\",\"articleDates\":{\"createDate\":\"2025-03-20T16:56:08.188Z\",\"publishedAt\":\"2025-03-20T17:05:56.025Z\",\"updateDate\":\"2025-03-20T17:05:56.025Z\",\"displayDate\":\"2025-03-20T17:05:56.025Z\"},\"meta\":{\"title\":\"Gotbit Founder Aleksei Andriunin Pleads Guilty to Wire Fraud, Market Manipulation\",\"description\":\"Prosecutors are recommending that Andriunin, 26, spends no more than 24 months in a U.S. prison.\"},\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHBf/EACUQAAIBAwMCBwAAAAAAAAAAAAECAwAEEQUGEhMhFBUiQVFxgf/EABYBAQEBAAAAAAAAAAAAAAAAAAQBA//EABkRAQADAQEAAAAAAAAAAAAAAAEAAhEhMf/aAAwDAQACEQMRAD8A3ZbmBdSaOHkrJJgcgAAKWt37qsbK/MctyQyrxKqc4z8ik+21VdVsIRL1VvmPrlR8D7xS9qmz9V82ZLiVCjuB1mfJ7++KNYF2z5EU0MqbsrmxN+iw2/HAsiyASMQxwufyipjFpctkvh450kVDjky96KjXejNC+cSf/9k=\",\"alt\":\"Alexey Andryunin\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHBf/EACUQAAIBAwMCBwAAAAAAAAAAAAECAwAEEQUGEhMhFBUiQVFxgf/EABYBAQEBAAAAAAAAAAAAAAAAAAQBA//EABkRAQADAQEAAAAAAAAAAAAAAAEAAhEhMf/aAAwDAQACEQMRAD8A3ZbmBdSaOHkrJJgcgAAKWt37qsbK/MctyQyrxKqc4z8ik+21VdVsIRL1VvmPrlR8D7xS9qmz9V82ZLiVCjuB1mfJ7++KNYF2z5EU0MqbsrmxN+iw2/HAsiyASMQxwufyipjFpctkvh450kVDjky96KjXejNC+cSf/9k=\",\"alt\":\"Alexey Andryunin\"},\"metadata\":{\"_ref\":\"image-0548b830ba1c4f7688309db65e0f1f3373738b91-2560x1920-jpg\",\"hotspot\":null,\"crop\":null}},\"pathname\":\"/policy/2025/03/20/gotbit-founder-aleksei-andriunin-pleads-guilty-to-wire-fraud-market-manipulation\",\"_type\":\"article\",\"description\":\"Prosecutors are recommending that Andriunin, 26, spends no more than 24 months in a U.S. prison.\",\"slug\":\"gotbit-founder-aleksei-andriunin-pleads-guilty-to-wire-fraud-market-manipulation\",\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Cheyenne Ligon\",\"authorSlug\":\"cheyenne-ligon\",\"__profilePicture\":{\"source\":{\"alt\":\"Cheyenne Ligon\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/6556b2f067016f00ffdb60588a3936bc0e869ce7-1830x1830.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$30\"}}}],\"sectionDetails\":[{\"name\":\"Policy\",\"sectionSlug\":\"policy\"}],\"_id\":\"ae60ce8c-4041-4e54-8494-31c4b012ba0a\"}]},{\"sectionData\":{\"_rev\":\"o1pc59053vORBg8rG6Bymr\",\"_type\":\"section\",\"name\":\"Consensus Magazine\",\"t"])
    </script>
    <script>
        self.__next_f.push([1,"itle\":\"Consensus Magazine\",\"meta\":{\"description\":\"Putting crypto, blockchain and Web3 in perspective\",\"title\":\"Consensus Magazine\"},\"slug\":{\"current\":\"consensus-magazine\",\"_type\":\"slug\"},\"tags\":[],\"active\":true,\"_id\":\"01a03ed0-034a-4ebb-bd00-37e6a2921f2e\",\"_createdAt\":\"2024-09-27T10:44:36Z\",\"_updatedAt\":\"2024-09-27T10:45:03Z\"},\"articles\":[{\"meta\":{\"title\":\"Why Blockbuster Games Will Soon Be Built on Modular Appchains\",\"description\":\"Mainnets like Ethereum’s aren’t suitable for major (AAA) game development. The only real solution is a horizontally scalable blockchain coupled with modularity and a gas-free experience for end-users, says Jack O’Holleran, CEO of SKALE Labs.\"},\"slug\":\"why-blockbuster-games-will-soon-be-built-on-modular-appchains\",\"storyType\":\"Opinion\",\"pathname\":\"/consensus-magazine/2024/07/12/why-blockbuster-games-will-soon-be-built-on-modular-appchains\",\"articleDates\":{\"createDate\":\"2024-07-11T15:03:08.734Z\",\"publishedAt\":\"2024-07-12T16:06:21.714Z\",\"updateDate\":\"2024-07-12T16:09:35.242Z\",\"displayDate\":\"2024-07-12T16:06:21.714Z\"},\"description\":\"Mainnets like Ethereum’s aren’t suitable for major (AAA) game development. The only real solution is a horizontally scalable blockchain coupled with modularity and a gas-free experience for end-users, says Jack O’Holleran, CEO of SKALE Labs. \",\"authorDetails\":[{\"name\":null,\"byline\":\"Jack O’Holleran\",\"authorSlug\":\"jack-o-holleran\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/1409f615da083bc3bcdae7bf7255137d84615e8a-500x500.jpg?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGgABAAIDAQAAAAAAAAAAAAAAAAUHAgQIBv/EACYQAAEEAgIABQUAAAAAAAAAAAEAAgMEBQYREgcTIVGBFTFBUsH/xAAYAQACAwAAAAAAAAAAAAAAAAABAwIEBf/EAB4RAQACAgEFAAAAAAAAAAAAAAEAAwIREzEzNEFR/9oADAMBAAIRAxEAPwDDYtjsbPsTIaREdWWQQxPLOwA9yrX1Sa59LmqX7UdmSAhocxnXgBc5azt8GHjtMZD5vtMPu0/ggL2+qeLFHH2BDlY3O88B5ssdyPkI40W4op1kOStrfpLN2Cm2W+HOHr0H9Ra52vCZBrbEVyEscPQ9giDbgOliRnHWJc79iFKwUYrObr1ZC8RPaSQ08H4RFq2eMvuVDvakbk5JKN6WvBLII2HgcuREScFcSNQ3P//Z\",\"alt\":\"Jack O’Holleran\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/e1206fb88d964021e30a0df2f2e0b25b532be3f3-3824x2082.png?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"$31\",\"alt\":\"A scene from the trailer for Grand Theft Auto 6 (Rockstar Games).\"},\"metadata\":{\"_ref\":\"image-e1206fb88d964021e30a0df2f2e0b25b532be3f3-3824x2082-png\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/e1206fb88d964021e30a0df2f2e0b25b532be3f3-3824x2082.png?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"$32\",\"alt\":\"A scene from the trailer for Grand Theft Auto 6 (Rockstar Games).\"},\"metadata\":{\"_ref\":\"image-e1206fb88d964021e30a0df2f2e0b25b532be3f3-3824x2082-png\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Consensus Magazine\",\"sectionSlug\":\"consensus-magazine\"},{\"name\":\"Opinion\",\"sectionSlug\":\"opinion\"}],\"_id\":\"CpI5Y2Su0uMQDo69bd8fKX\",\"title\":\"Why Blockbuster Games Will Soon Be Built on Modular Appchains\",\"_type\":\"article\"},{\"articleDates\":{\"createDate\":\"2024-07-11T16:09:57.879Z\",\"publishedAt\":\"2024-07-11T16:18:09.864Z\",\"updateDate\":\"2024-07-12T19:35:48.735Z\",\"displayDate\":\"2024-07-11T16:18:09.864Z\"},\"_type\":\"article\",\"meta\":{\"title\":\"How Digital Collectibles Are Shaping Athlete Legacies\",\"description\":\"NFTs and blockchain-based gaming are transforming the way we connect with pro sports, says Matt Novogratz, Co-Founder of Candy Digital.\"},\"storyType\":\"Opinion\",\"sectionDetails\":[{\"name\":\"Consensus Magazine\",\"sectionSlug\":\"consensus-magazine\"},{\"name\":\"Opinion\",\"sectionSlug\":\"opinion\"}],\"_id\":\"ha93388BwWkPe8xtcTZfun\",\"description\":\"NFTs and blockchain-based gaming are transforming the way we connect with pro sports, says Matt Novogratz, Co-Founder of Candy Digital. \",\"slug\":\""])
    </script>
    <script>
        self.__next_f.push([1,"how-digital-collectibles-are-shaping-athlete-legacies\",\"authorDetails\":[{\"name\":null,\"byline\":\"Matt Novogratz\",\"authorSlug\":\"matt-novogratz\",\"__profilePicture\":{\"source\":{\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGAABAAMBAAAAAAAAAAAAAAAAAAUGBwj/xAAmEAABAwMEAQQDAAAAAAAAAAABAgMEAAURBhIhMRMHIjJBUWLR/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ALhp4ynbxqHyMxjveAW4V4HQqE0jP3+qE9mOsuNx2ClKC5nac84qGuOpUJjXh6AlC3ph3L2nHiR1xWaLuciwaqgm3voMh1xKnC0vdlJ7BNB07JflPvKWUAnr50qlM6yZZbCR4j985NKDFLqtTltlyAoocZb2DZwCCfv81T9FrLmpWFL9xyTzSlBp8metDpSGmcD9T/aUpQf/2Q==\",\"alt\":\"Matt Novogratz\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/82ae5de58b550d6faac546af02fb792795e47f76-400x400.jpg?auto=format\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHA//EACQQAAIBBAEEAgMAAAAAAAAAAAEDAgAEBREGBxITIRQxQVGh/8QAFQEBAQAAAAAAAAAAAAAAAAAAAgT/xAAeEQACAgICAwAAAAAAAAAAAAABAgADEiERMUFRsf/aAAwDAQACEQMRAD8AoPNuoOLwfjGMim6QwxBK5bEBv3sVNOpvKLN2ZEMc+DbUoDe0fjY+qQcI6d4ybgILRBmykR2Jb/ZNLeZuPJyFqUwCV93i1E79H7o1DMEnxKrVWplTjZlGtY/PtEPtlQKzAD3DZ3RWuK5OMJjkWFtYxktUR7LCN/yijkvqI0b7+T//2Q==\",\"alt\":\"(10'000 Hours/Getty Images)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/32c5640ca292fcc68d7575a63cd54acc2a617f39-2121x1414.jpg?auto=format\",\"width\":1920},\"metadata\":{\"_ref\":\"image-32c5640ca292fcc68d7575a63cd54acc2a617f39-2121x1414-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/32c5640ca292fcc68d7575a63cd54acc2a617f39-2121x1414.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAYHA//EACQQAAIBBAEEAgMAAAAAAAAAAAEDAgAEBREGBxITIRQxQVGh/8QAFQEBAQAAAAAAAAAAAAAAAAAAAgT/xAAeEQACAgICAwAAAAAAAAAAAAABAgADEiERMUFRsf/aAAwDAQACEQMRAD8AoPNuoOLwfjGMim6QwxBK5bEBv3sVNOpvKLN2ZEMc+DbUoDe0fjY+qQcI6d4ybgILRBmykR2Jb/ZNLeZuPJyFqUwCV93i1E79H7o1DMEnxKrVWplTjZlGtY/PtEPtlQKzAD3DZ3RWuK5OMJjkWFtYxktUR7LCN/yijkvqI0b7+T//2Q==\",\"alt\":\"(10'000 Hours/Getty Images)\"},\"metadata\":{\"_ref\":\"image-32c5640ca292fcc68d7575a63cd54acc2a617f39-2121x1414-jpg\",\"hotspot\":null,\"crop\":null}},\"title\":\"How Digital Collectibles Are Shaping Athlete Legacies\",\"pathname\":\"/consensus-magazine/2024/07/11/how-digital-collectibles-are-shaping-athlete-legacies\"},{\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGQAAAQUAAAAAAAAAAAAAAAAAAAMEBQYH/8QAJBAAAQQCAQIHAAAAAAAAAAAAAgEDBBEABRIiUQYVITEyQWH/xAAVAQEBAAAAAAAAAAAAAAAAAAAFAv/EACQRAAECBAUFAAAAAAAAAAAAAAECIQADBBESEzFRkQUVItHh/9oADAMBAAIRAxEAPwDNdEzq9tuj86eGMy2nIBAfkva8CjeHD20prYLIcb9oqilIqfuVIpLsdwjaKipUvI1JMiQ+PN8kpfSvrHKvp0pSlKzlglgAWG5uXeK7nUTE4VJSQdW1tow2h5N1ToS3UjJbPJeCkSXWGJmx1dbjhL3vDEMqlDeXI9Qfgml7jj7H/9k=\",\"alt\":\"(Tika Schwagg/Unsplash)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c15684108806492233821a9f0fc7c77f5de2d505-1500x1000.jpg?auto=format\",\"width\":1920},\"metadata\":{\"_ref\":\"image-c15684108806492233821a9f0fc7c77f5de2d505-1500x1000-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwg"])
    </script>
    <script>
        self.__next_f.push([1,"IyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGQAAAQUAAAAAAAAAAAAAAAAAAAMEBQYH/8QAJBAAAQQCAQIHAAAAAAAAAAAAAgEDBBEABRIiUQYVITEyQWH/xAAVAQEBAAAAAAAAAAAAAAAAAAAFAv/EACQRAAECBAUFAAAAAAAAAAAAAAECIQADBBESEzFRkQUVItHh/9oADAMBAAIRAxEAPwDNdEzq9tuj86eGMy2nIBAfkva8CjeHD20prYLIcb9oqilIqfuVIpLsdwjaKipUvI1JMiQ+PN8kpfSvrHKvp0pSlKzlglgAWG5uXeK7nUTE4VJSQdW1tow2h5N1ToS3UjJbPJeCkSXWGJmx1dbjhL3vDEMqlDeXI9Qfgml7jj7H/9k=\",\"alt\":\"(Tika Schwagg/Unsplash)\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/c15684108806492233821a9f0fc7c77f5de2d505-1500x1000.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-c15684108806492233821a9f0fc7c77f5de2d505-1500x1000-jpg\",\"hotspot\":null,\"crop\":null}},\"articleDates\":{\"createDate\":\"2024-07-11T14:04:56.728Z\",\"publishedAt\":\"2024-07-11T14:10:16.433Z\",\"updateDate\":\"2024-07-11T14:13:25.514Z\",\"displayDate\":\"2024-07-11T14:10:16.433Z\"},\"description\":\"On-chain games that establish a community-driven governance model, where players actively participate in decision-making, provide real ownership and accountability to the gaming community, says Ben Rubin, CEO \u0026 co-founder, Towns. \",\"slug\":\"from-coin-operated-machines-to-token-operated-gaming\",\"authorDetails\":[{\"name\":null,\"byline\":\"Ben Rubin\",\"authorSlug\":\"ben-rubin\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/d6f4d2d7102e54b82f57880c787fbada3b0c76a3-1945x1945.jpg?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGAABAQEBAQAAAAAAAAAAAAAAAAcEBgj/xAAlEAABBAEEAgEFAAAAAAAAAAABAAIDBBEFBgcSIVExFBUyQWH/xAAWAQEBAQAAAAAAAAAAAAAAAAADBQT/xAAaEQADAQEBAQAAAAAAAAAAAAAAAQIxAxEy/9oADAMBAAIRAxEAPwCX7R0GDW9Xio23yRwyZ7OjHkBaN67Xr7cuNhoSzy1SPyl+croON9v6jqNv7jScGwwHq72/+Lr948eX9b036mOfrcZ5bATlvX1n2p9Ol1SWFCJh8W39EHLQCi03Ks9G1JWuRmOeM9XNP6KJ/TKXXgx5bth5HyZTlUq1M8PYAcAjyiIq0ecPMfLoxvm7jxkNJRESLAnp/9k=\",\"alt\":\"Ben Rubin\"}}}],\"sectionDetails\":[{\"name\":\"Consensus Magazine\",\"sectionSlug\":\"consensus-magazine\"},{\"name\":\"Opinion\",\"sectionSlug\":\"opinion\"}],\"_id\":\"ha93388BwWkPe8xtcTZjyf\",\"title\":\"From Coin-Operated Machines to Token-Operated Gaming\",\"pathname\":\"/consensus-magazine/2024/07/11/from-coin-operated-machines-to-token-operated-gaming\",\"_type\":\"article\",\"meta\":{\"title\":\"From Coin-Operated Machines to Token-Operated Gaming\",\"description\":\"On-chain games that establish a community-driven governance model, where players actively participate in decision-making, provide real ownership and accountability to the gaming community, says Ben Rubin, CEO \u0026 co-founder, Towns.\"},\"storyType\":\"Opinion\"},{\"storyType\":\"Opinion\",\"authorDetails\":[{\"name\":null,\"byline\":\"Allen Ng\",\"authorSlug\":\"allen-ng\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/f93d4411019750e39b7381810ce7e6e8712b1f5c-736x736.jpg?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGQABAQADAQAAAAAAAAAAAAAAAAcEBQgG/8QAJBAAAgIBBAIBBQAAAAAAAAAAAQIDBAAFBhESB0FxEyIjMTL/xAAWAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAZEQEBAQEBAQAAAAAAAAAAAAABABExAiH/2gAMAwEAAhEDEQA/ALJcZxVlMR/IFPX5zy21bWoTS3Y78/11QjoxUAg+xmj8x7xn27p9atp7hLdon7/31UZHK2/tVoa7Xmjukx9lEigcK498jNFdGRMx7dMP/RxmNUspaqw2IyCkqBwfnGVsU+8+Uq77aS60SmzG4VZPYB9ZDtl6dBrO5Yat4M0LckhTxjGY+ntYfS6s0yrFRoQVq6lYokCqCeeBjGMab//Z\",\"alt\":\"Allen Ng\"}}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/7ca2a383afff1a4cfef728f0b9882dd38fcf86c3-2121x1414.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0o"])
    </script>
    <script>
        self.__next_f.push([1,"MCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUGAgf/xAAiEAABBAIBBAMAAAAAAAAAAAABAgMEBQARBhITIUExUWH/xAAVAQEBAAAAAAAAAAAAAAAAAAABA//EABwRAAIBBQEAAAAAAAAAAAAAAAABAgMEERJRE//aAAwDAQACEQMRAD8ATQYz/HWy9axzGT6Cx5J/M1wWwrZNzNmWKw2O53UuFXx9bxlya8k2cRmHMS2424CnZGynx6yT4nXMU/JYUd5CZsWcelbTo1oZKpdOonEYW+qz06/eO2s6YmRHkvuMrQChSPI1hlzVR4iILaGowQhI0lIUdAYZDyl0Non/2Q==\",\"alt\":\"(blackCAT/Getty Images)\"},\"metadata\":{\"_ref\":\"image-7ca2a383afff1a4cfef728f0b9882dd38fcf86c3-2121x1414-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Consensus Magazine\",\"sectionSlug\":\"consensus-magazine\"},{\"name\":\"Opinion\",\"sectionSlug\":\"opinion\"}],\"_id\":\"GJVPKSa3D710Liw1ga7Doq\",\"title\":\"Bragging Rights Are Key to Retaining Web3 Gamers\",\"pathname\":\"/consensus-magazine/2024/07/10/bragging-rights-are-key-to-retaining-web3-gamers\",\"_type\":\"article\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/7ca2a383afff1a4cfef728f0b9882dd38fcf86c3-2121x1414.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUGAgf/xAAiEAABBAIBBAMAAAAAAAAAAAABAgMEBQARBhITIUExUWH/xAAVAQEBAAAAAAAAAAAAAAAAAAABA//EABwRAAIBBQEAAAAAAAAAAAAAAAABAgMEERJRE//aAAwDAQACEQMRAD8ATQYz/HWy9axzGT6Cx5J/M1wWwrZNzNmWKw2O53UuFXx9bxlya8k2cRmHMS2424CnZGynx6yT4nXMU/JYUd5CZsWcelbTo1oZKpdOonEYW+qz06/eO2s6YmRHkvuMrQChSPI1hlzVR4iILaGowQhI0lIUdAYZDyl0Non/2Q==\",\"alt\":\"(blackCAT/Getty Images)\"},\"metadata\":{\"_ref\":\"image-7ca2a383afff1a4cfef728f0b9882dd38fcf86c3-2121x1414-jpg\",\"hotspot\":null,\"crop\":null}}],\"articleDates\":{\"createDate\":\"2024-07-10T19:03:14.133Z\",\"publishedAt\":\"2024-07-10T19:10:49.24Z\",\"updateDate\":\"2024-07-10T19:13:52.856Z\",\"displayDate\":\"2024-07-10T19:10:49.24Z\"},\"description\":\"Gaming is a social endeavor, so winning means cooperating with your friends in quests or beating the player on the other screen, and telling the world about your achievements. \",\"meta\":{\"title\":\"Bragging Rights Are Key to Retaining Web3 Gamers\",\"description\":\"Gaming is a social endeavor, so winning means cooperating with your friends in quests or beating the player on the other screen, and telling the world about your achievements, says Allen Ng, Co-Founder of OpenSocial Protocol.\"},\"slug\":\"bragging-rights-are-key-to-retaining-web3-gamers\"}]},{\"sectionData\":{\"slug\":{\"current\":\"learn\",\"_type\":\"slug\"},\"_createdAt\":\"2024-09-27T10:44:58Z\",\"name\":\"Learn\",\"active\":true,\"newsletters\":[{\"_ref\":\"9b7368b4-a644-4042-a83b-4e38b01daebb\",\"_type\":\"reference\",\"_key\":\"59507b0fe83a\"}],\"meta\":{\"title\":\"Learn\"},\"title\":\"Learn\",\"_updatedAt\":\"2024-10-21T08:58:55Z\",\"_rev\":\"i74pvQSUmZcQWEQDZ3Ijeo\",\"tags\":[],\"_type\":\"section\",\"_id\":\"574d2afa-9ccf-4d29-888b-58a72be6fef6\"},\"articles\":[{\"pathname\":\"/learn/how-to-buy-solana\",\"_type\":\"article\",\"description\":\"Buying solana (SOL) is straightforward, but with numerous crypto exchanges on the market, it's crucial potential investors consider other key factors before making a purchase. \",\"meta\":{\"title\":\"How to Buy Solana\",\"description\":\"TKTKTK\"},\"slug\":\"how-to-buy-solana\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/a725a74d2ce68cac9490ede8de43044fc9a540a0-5184x3888.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAUDBAf/xAAhEAACAQUAAQUAAAAAAAAAAAABAwIABAURIQYSEyJRcf/EABYBAQEBAAAAAAAAAAAAAAAAAAEAAv/EABkRAAMBAQEAAAAAAAAAAAAAAAABAhEDUf/aAAwDAQACEQMRAD8AwDx7x2eWs2uQ5Qms6K5HRNUsrim2vJqYNcJMeb/aWouGKO1zlE/YOqb2OXvXwZbOuJzVOB+Mu1vlLu1PpNpLRB7fTs0VKz0mW9UUOQ0"])
    </script>
    <script>
        self.__next_f.push([1,"//9k=\",\"alt\":\"(Danny Nelson/CoinDesk)\"},\"metadata\":{\"_ref\":\"image-a725a74d2ce68cac9490ede8de43044fc9a540a0-5184x3888-jpg\",\"hotspot\":null,\"crop\":null}}],\"_id\":\"ha93388BwWkPe8xtcTcxw5\",\"articleDates\":{\"createDate\":\"2024-05-14T18:00:05.225Z\",\"publishedAt\":\"2024-05-14T19:16:18.1Z\",\"updateDate\":\"2024-05-16T19:22:42.12Z\",\"displayDate\":\"2024-05-14T19:16:18.1Z\"},\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Joe Lautzenhiser\",\"authorSlug\":\"joe-lautzenhiser\",\"__profilePicture\":{\"source\":{\"width\":128,\"height\":128,\"placeholder\":\"$33\",\"alt\":\"Joe Lautzenhiser\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/bac7c8ec706fd11d8069a1daa93843d11086f588-889x889.png?auto=format\"}}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/a725a74d2ce68cac9490ede8de43044fc9a540a0-5184x3888.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAUDBAf/xAAhEAACAQUAAQUAAAAAAAAAAAABAwIABAURIQYSEyJRcf/EABYBAQEBAAAAAAAAAAAAAAAAAAEAAv/EABkRAAMBAQEAAAAAAAAAAAAAAAABAhEDUf/aAAwDAQACEQMRAD8AwDx7x2eWs2uQ5Qms6K5HRNUsrim2vJqYNcJMeb/aWouGKO1zlE/YOqb2OXvXwZbOuJzVOB+Mu1vlLu1PpNpLRB7fTs0VKz0mW9UUOQ0//9k=\",\"alt\":\"(Danny Nelson/CoinDesk)\"},\"metadata\":{\"_ref\":\"image-a725a74d2ce68cac9490ede8de43044fc9a540a0-5184x3888-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Learn\",\"sectionSlug\":\"learn\"}],\"title\":\"How to Buy Solana\"},{\"sectionDetails\":[{\"name\":\"Learn\",\"sectionSlug\":\"learn\"},{\"name\":\"Tech\",\"sectionSlug\":\"tech\"}],\"_id\":\"ha93388BwWkPe8xtcTetqP\",\"title\":\"What Is Restaking? What Is Liquid Restaking? What Is EigenLayer?\",\"articleDates\":{\"createDate\":\"2024-05-02T15:39:40.604Z\",\"publishedAt\":\"2024-05-02T16:05:30.501Z\",\"updateDate\":\"2024-05-02T17:41:04.652Z\",\"displayDate\":\"2024-05-02T16:05:30.501Z\"},\"slug\":\"restaking-101-what-are-restaking-and-liquid-restaking\",\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Sam Kessler\",\"authorSlug\":\"sam-kessler\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/3245362940a48af98ee81066fb58a31d754a0f9f-417x417.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"$34\",\"alt\":\"Sam Kessler\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/5e66a039ca5b66cc2f91841aefdd19055f5f581c-5697x3798.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAYDBAUH/8QAIhAAAgEEAQQDAAAAAAAAAAAAAQIDAAQFEQYHITFhEiJC/8QAFQEBAQAAAAAAAAAAAAAAAAAAAwT/xAAgEQABBAAHAQAAAAAAAAAAAAABAAIDERMUISIxQZFh/9oADAMBAAIRAxEAPwBgz+bfF4+K4iiDu8pj0T2GqX05xcvJbqbVAJT37+BuuhXXBsfdQJDNNMY0cyAb/R81Ui6ZYVWQhptoD8ft4pGSyCMBx3WfOggbEAX2OQK+G9T4oEv4nQMQQT7oraHDrNQAJ5tD3RVOYYjwHL//2Q==\",\"alt\":\"Recycling (Pawel Czerwinski/Unsplash)\"},\"metadata\":{\"_ref\":\"image-5e66a039ca5b66cc2f91841aefdd19055f5f581c-5697x3798-jpg\",\"hotspot\":null,\"crop\":null}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/5e66a039ca5b66cc2f91841aefdd19055f5f581c-5697x3798.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAYDBAUH/8QAIhAAAgEEAQQDAAAAAAAAAAAAAQIDAAQFEQYHITFhEiJC/8QAFQEBAQAAAAAAAAAAAAAAAAAAAwT/xAAgEQABBAAHAQAAAAAAAAAAAAABAAIDERMUISIxQZFh/9oADAMBAAIRAxEAPwBgz+bfF4+K4iiDu8pj0T2GqX05xcvJbqbVAJT37+BuuhXXBsfdQJDNNMY0cyAb/R81Ui6ZYVWQhptoD8ft4pGSyCMBx3WfOggbEAX2OQK+G9T4oEv4nQMQQT7oraHDrNQAJ5tD3RVOYYjwHL//2Q==\",\"alt\":\"Recycling (P"])
    </script>
    <script>
        self.__next_f.push([1,"awel Czerwinski/Unsplash)\"},\"metadata\":{\"_ref\":\"image-5e66a039ca5b66cc2f91841aefdd19055f5f581c-5697x3798-jpg\",\"hotspot\":null,\"crop\":null}},\"pathname\":\"/learn/restaking-101-what-are-restaking-and-liquid-restaking\",\"_type\":\"article\",\"description\":\"EigenLayer and similar \\\"restaking\\\" protocols are currently the buzziest investment in blockchain, but the technology isn't without risks.\",\"meta\":{\"title\":\"What Is Restaking? What Is Liquid Restaking? What Is EigenLayer?\",\"description\":\"EigenLayer and similar \\\"restaking\\\" protocols are currently the buzziest investment in blockchain, but the technology isn't without risks.\"}},{\"_id\":\"ha93388BwWkPe8xtcUCont\",\"title\":\"A Beginner’s Guide to AI Tokens\",\"pathname\":\"/learn/a-beginners-guide-to-ai-tokens\",\"description\":\"AI tokens will play an integral role in the adoption of machine learning models in the blockchain industry.\",\"meta\":{\"title\":\"A Beginner’s Guide to AI Tokens\",\"description\":\"AI tokens will play an integral role in the adoption of machine learning models in the blockchain industry.\"},\"slug\":\"a-beginners-guide-to-ai-tokens\",\"storyType\":\"News\",\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/bd9379a8e27238a21ad4086f56c3d7ede60cdc07-2048x1152.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAYFBwj/xAAfEAACAgICAwEAAAAAAAAAAAABAgADBBEFBiEiMVH/xAAXAQADAQAAAAAAAAAAAAAAAAABAgQF/8QAGhEBAAIDAQAAAAAAAAAAAAAAAQACAwQRE//aAAwDAQACEQMRAD8AzHx3HW5lqqqHRjFzHVhiY9bK+nK+yn9kj1pFTOQKNDYjD3dFLKSPJEah1Rmdl2rGUqSobKWRyp+iEYnxqSxJrXcIOSz0n//Z\",\"alt\":\"Art installation reminiscent of digital ecosystems\"},\"metadata\":{\"_ref\":\"image-bd9379a8e27238a21ad4086f56c3d7ede60cdc07-2048x1152-jpg\",\"hotspot\":null,\"crop\":null}}],\"articleDates\":{\"createDate\":\"2024-01-11T21:05:29.552Z\",\"publishedAt\":\"2024-01-11T21:08:18.514Z\",\"updateDate\":\"2024-04-05T16:50:48.166Z\",\"displayDate\":\"2024-01-11T21:08:18.514Z\"},\"_type\":\"article\",\"authorDetails\":[{\"name\":null,\"byline\":\"Unchained\",\"authorSlug\":\"unchaine-d\",\"__profilePicture\":{\"source\":{\"placeholder\":\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZ0lEQVR4nOXUyU9TQRzA8f5zciIePBhNPBAxGKIJECIiKAoIgbAW3lIKaCsCQvtKWV6hlC6vb6GF0haIpBpcUOpFFkOi168BwWg0xhgOGg+fTOYw38NkfmOTJInTZPsPg4qi8C3PuIfHD1w4JfnPgrlcjmw2SyqVOrKaTKEP+xluEZC6ehBF8bdI4nEwn89jWRaqqjKjqqTNBBvjYQKNgwx1D+B2PcLtdv+Sy/WQwX4nDvk4GIlG8SoKXsVLwrDYNLJkfDqmGsfUTQzTxDAMdF3H0PUv6/Fe1w0sPUZ4cohxZyu2Z7nX6IkV5hcNYulF0utZMssrLOkJ9EicuBY/Onx4HclkEi2mEY1Gj2KWZR4FNzIJtiKDrMol2MZG5nC4p2nxeHDqKuHMIrG4RjAYxOP1MjY2huLzEY5GCYcjKIqP0dEnTPj9BAIB/FPTpK0Ie0GJndaz2OydTu7d7+NaUy/1Qy6i8RhPdZO1mEYqFGI5FCQVCbFmaqxbGul4iGRklpX4PKvWApnFEFuZMAf+TvZvFmITBInODonGFhG70I8xMMx2j5v39gF2ZCe7g33sDjnYHZXY84rsT/ayr9r5MNfFwUI7B1obn7QGPrqK2Ss/c/ywRQlBkHH0SPjq21kqriZ34TrPi0rZLL3Ki4oSXt66wqu7l9lqLmKr/RJv7RfZls+THzjHO1chebmAN/UFP06Ks9POyJ1mJirrmKy6zVRtLVN1NUw11DDdVM1MSzUzbVWoHTdQuysJ9FQwK5UxK5cx21v+89GTRQmHINInCF85DokCfSekE73fOeVZlv+F30b624OfAQ1JfpbRyUZTAAAAAElFTkSuQmCC\",\"alt\":\"Unchained\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0b417678dfa0292b27fc594a3a1486fd9d7fc3a3-247x247.png?auto=format\",\"width\":128,\"height\":128}}}],\"__image\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/bd9379a8e27238a21ad4086f56c3d7ede60cdc07-2048x1152.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAgMAAAAAAAAAAAAAAAAAAAYFBwj/xAAfEAACAgICAwEAAAAAAAAAAAABAgADBBEFBiEiMVH/xAAXAQADAQAAAAAAAAAAAAAAAAABAgQF/8QAGhEBAAIDAQAAAAAAAAAAAAAAAQACAwQRE//aAAwDAQACEQMRAD8AzHx3HW5lqqqHRjFzHVhiY9bK+nK+yn9kj1pFTOQKNDYjD3dFLKSPJEah1Rmdl2rGUqSo"])
    </script>
    <script>
        self.__next_f.push([1,"bKWRyp+iEYnxqSxJrXcIOSz0n//Z\",\"alt\":\"Art installation reminiscent of digital ecosystems\"},\"metadata\":{\"_ref\":\"image-bd9379a8e27238a21ad4086f56c3d7ede60cdc07-2048x1152-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Learn\",\"sectionSlug\":\"learn\"}]},{\"_id\":\"CpI5Y2Su0uMQDo69bft0L3\",\"meta\":{\"title\":\"What Is the ERC-7265 Token Standard?\",\"description\":\"The ERC-7265 token standard proposes adding a “circuit breaker” mechanism to DeFi protocols to stop the transfer of Ethereum-based tokens in the event of a hack.\"},\"slug\":\"what-is-the-erc-7265-token-standard\",\"storyType\":\"News\",\"authorDetails\":[{\"name\":null,\"byline\":\"Unchained\",\"authorSlug\":\"unchaine-d\",\"__profilePicture\":{\"source\":{\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/0b417678dfa0292b27fc594a3a1486fd9d7fc3a3-247x247.png?auto=format\",\"width\":128,\"height\":128,\"placeholder\":\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAACZ0lEQVR4nOXUyU9TQRzA8f5zciIePBhNPBAxGKIJECIiKAoIgbAW3lIKaCsCQvtKWV6hlC6vb6GF0haIpBpcUOpFFkOi168BwWg0xhgOGg+fTOYw38NkfmOTJInTZPsPg4qi8C3PuIfHD1w4JfnPgrlcjmw2SyqVOrKaTKEP+xluEZC6ehBF8bdI4nEwn89jWRaqqjKjqqTNBBvjYQKNgwx1D+B2PcLtdv+Sy/WQwX4nDvk4GIlG8SoKXsVLwrDYNLJkfDqmGsfUTQzTxDAMdF3H0PUv6/Fe1w0sPUZ4cohxZyu2Z7nX6IkV5hcNYulF0utZMssrLOkJ9EicuBY/Onx4HclkEi2mEY1Gj2KWZR4FNzIJtiKDrMol2MZG5nC4p2nxeHDqKuHMIrG4RjAYxOP1MjY2huLzEY5GCYcjKIqP0dEnTPj9BAIB/FPTpK0Ie0GJndaz2OydTu7d7+NaUy/1Qy6i8RhPdZO1mEYqFGI5FCQVCbFmaqxbGul4iGRklpX4PKvWApnFEFuZMAf+TvZvFmITBInODonGFhG70I8xMMx2j5v39gF2ZCe7g33sDjnYHZXY84rsT/ayr9r5MNfFwUI7B1obn7QGPrqK2Ss/c/ywRQlBkHH0SPjq21kqriZ34TrPi0rZLL3Ki4oSXt66wqu7l9lqLmKr/RJv7RfZls+THzjHO1chebmAN/UFP06Ks9POyJ1mJirrmKy6zVRtLVN1NUw11DDdVM1MSzUzbVWoHTdQuysJ9FQwK5UxK5cx21v+89GTRQmHINInCF85DokCfSekE73fOeVZlv+F30b624OfAQ1JfpbRyUZTAAAAAElFTkSuQmCC\",\"alt\":\"Unchained\"}}}],\"__featuredImages\":[{\"format\":\"Basic\",\"source\":{\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAABgAH/8QAIxAAAQQBAwQDAAAAAAAAAAAAAQIDBAUABhEhEhMiMTJhcf/EABYBAQEBAAAAAAAAAAAAAAAAAAYEBf/EAB4RAAIBAwUAAAAAAAAAAAAAAAECAAMREgQTMVGx/9oADAMBAAIRAxEAPwA7pybGg3YiW/UIrg6gEjncYgvWmbKZDlVshxyOhwLcV3Pj9HM71u6p2VCcBKCFJHjxvvisWjNNWu1sOC12JBSpRUok7/uEi7sgKmxI8jF8c+IP11YBzUkkpCduPWWGtWyVqvpJ4G59DLNXT0ztLfoSaqRmbT//2Q==\",\"alt\":\"shutterstock_1499446046\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/ff092a8ee7cf062b6d27030a32826f36d1a54e06-2560x1707.jpg?auto=format\",\"width\":1920,\"height\":1080},\"metadata\":{\"_ref\":\"image-ff092a8ee7cf062b6d27030a32826f36d1a54e06-2560x1707-jpg\",\"hotspot\":null,\"crop\":null}}],\"title\":\"What Is the ERC-7265 Token Standard?\",\"pathname\":\"/learn/what-is-the-erc-7265-token-standard\",\"articleDates\":{\"createDate\":\"2024-01-11T21:01:06.357Z\",\"publishedAt\":\"2024-01-11T21:04:41.377Z\",\"updateDate\":\"2024-04-05T18:38:37.312Z\",\"displayDate\":\"2024-01-11T21:04:41.377Z\"},\"_type\":\"article\",\"description\":\"The ERC-7265 token standard proposes adding a “circuit breaker” mechanism to DeFi protocols to stop the transfer of Ethereum-based tokens in the event of a hack.  \",\"__image\":{\"source\":{\"alt\":\"shutterstock_1499446046\",\"src\":\"https://cdn.sanity.io/images/s3y3vcno/production/ff092a8ee7cf062b6d27030a32826f36d1a54e06-2560x1707.jpg?auto=format\",\"width\":1920,\"height\":1080,\"placeholder\":\"data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAANABQDASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAABgAH/8QAIxAAAQQBAwQDAAAAAAAAAAAAAQIDBAUABhEhEhMiMTJhcf/EABYBAQEBAAAAAAAAAAAAAAAAAAYEBf/EAB4RAAIBAwUAAAAAAAAAAAAAAAECAAMREgQTMVGx/9oADAMBAAIRAxEAPwA7pybGg3YiW/UIrg6gEjncYgvWmbKZDlVshxyOhwLcV3Pj9HM71u6p2VCcBKCFJHjxvvisWjNNWu1sOC12JBSpRUok7/uEi7sgKmxI8jF8c+IP11YBzUkkpCduPWWGtWyVqvpJ4G59DLNXT0ztLfoSaqRmbT//2Q==\"},\"metadata\":{\"_ref\":\"image-ff092a8ee7cf062b6d27030a3282"])
    </script>
    <script>
        self.__next_f.push([1,"6f36d1a54e06-2560x1707-jpg\",\"hotspot\":null,\"crop\":null}},\"sectionDetails\":[{\"name\":\"Learn\",\"sectionSlug\":\"learn\"}]}]}],\"isMobile\":false}]]\n36:I[72906,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"default\"]\n37:I[12976,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"PushlyScriptTag\"]\n38:I[37650,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"Dictionary\"]\n39:I[87913,[\"6917\","])
    </script>
    <script>
        self.__next_f.push([1,"\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"UserProvider\"]\n3a:I[35138,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"ContextContainer\"]\n3b:I[69437,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"WebSocketProvider\"]\n3c:I[17939,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDL"])
    </script>
    <script>
        self.__next_f.push([1,"WfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"Module\"]\n3f:I[69800,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"default\"]\n40:I[47399,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"PromoBanner\"]\n41:I[8188,[\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9297\",\"static/chunks/app/(media)/not-found-c5101f483627d665.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"Image\"]\n42:I[6267,[\"6917\",\"static/chunks/6917"])
    </script>
    <script>
        self.__next_f.push([1,"-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"233\",\"static/chunks/app/(media)/page-5db0e1cf74763b02.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"default\"]\n45:I[17939,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"Submodule\"]\n46:I[26684,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"CookiebotCookieConsentLink\"]\n4d:I[71497,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\","])
    </script>
    <script>
        self.__next_f.push([1,"\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"SpeedInsights\"]\n4e:I[45967,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"Analytics\"]\n35:T69f,window.dataLayer = window.dataLayer || [{\"app_name\":\"vercel\",\"app_env\":\"production\",\"app_version\":\"4.6.0\",\"auth\":\"logged-in\",\"reg_plan\":\"3-plan\",\"reg_enabled\":\"enabled\",\"user_id\":\"auth0|67cc5affe3fc1acf994e4487\",\"user_properties\":{\"auth_provider\":\"email\"}}];function gtag(){dataLayer.push(arguments);}gtag('consent', 'default', {'ad_storage': 'granted','ad_user_data': 'granted','ad_personalization': 'granted','analytics_storage': 'granted','security_storage': 'granted','personalization_storage': 'granted','wait_for_update': 500});gtag(\"consent\", \"default\", {ad_storage: \"denied\",analytics_storage: \"denied\",functionality_storage: \"granted\",personalization_storage: \"denied\",security_storage: \"granted\",wait_for_update: 500,region: [\"AT\", \"BE\", \"BG\", \"HR\", \"CY\", \"CZ\", \"DK\", \"EE\", \"FI\", \"FR\", \"DE\", \"GR\", \"HU\", \"IE\", \"IT\", \"LV\", \"LT\", \"LU\", \"MT\", \"NL\", \"PL\", \"PT\", \"RO\", \"SK\", \"SI\", \"ES\", \"SE\", \"GB\"],});document.addEventListener('consentUpdate', function(e) {const { consent } = e.detail;gtag('consent',\t 'update', consent);});gtag(\"set\", \"ads_data_redaction\", false);gtag(\"set\", \"url_passthrough\", true);gtag(\"set\", \"user_data_source\", {\"sha256_email_address\":\"8c9092c4b22996f0779bd14117b76362ba896d321f9d7e7663c595cea0b39f4f\"});(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'\u0026l='+l:'';j.setAttributeNode(d.createAttribute('data-ot-ignore'));j.async=true;j.src='https://metrics.coindesk.com/gtm.js?id='+i+dl+ '\u0026gtm_auth=YBXBxOFkGb4REqoe6EL-jw\u0026gtm_preview=env-1\u0026gtm_cookies_win=x';f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-W9J8GSW');43:Tad2,M26.8435 0.16095C26.6659 0.123807 26.4882 0.0619062 26.3105 0H25.2826C24.2774 0.251151 23.4853 0.848886 22.6776 1.45841L22.5922 1.52284C21.247 2.55048 19.4069 2.55048 18.1378 1.51046C17.3383 0.854278 16.5261 0.284758 15.5109 0H14.4956C13.4169 0.247615 12.5794 0.879042 11.7291 1.52284C10.3712 2.55048 8.5184 2.55048 7.23669 1.47332C6.43715 0.804756 5.61228 0.259999 4.59704 0H3.5818C3.34069 0.0866648 3.08688 0.17333 2.83307 0.259989V0.259994L2.83306 0.259999C1.60208 0.705707 0.840644 1.57237 0.459929 2.7733C0.434548 2.84758 0.405994 2.9219 0.377441 2.99618C0.348887 3.07045 0.320333 3.14473 0.294952 3.21901V4.2095C0.5487"])
    </script>
    <script>
        self.__next_f.push([1,"63 5.23712 1.13252 6.04187 1.85589 6.80949C2.99804 8.0847 3.01073 9.97898 1.88127 11.2294C1.1706 12.0094 0.586834 12.8266 0.307643 13.8418V14.8322C0.574144 15.8475 1.1706 16.6522 1.88127 17.4446C2.98534 18.6827 2.99804 20.577 1.89396 21.815C1.18329 22.6198 0.561453 23.437 0.307643 24.4893V25.4798C0.409159 25.715 0.497987 25.9626 0.586813 26.2102L0.586834 26.2103C1.04369 27.4112 1.91934 28.1664 3.15032 28.5379C3.22646 28.5626 3.30261 28.5905 3.37875 28.6183C3.45489 28.6462 3.53104 28.674 3.60718 28.6988H4.62242C5.66302 28.4388 6.48794 27.8569 7.30011 27.1636C8.59456 26.0617 10.5489 26.0617 11.8306 27.176C12.6428 27.8693 13.4804 28.4388 14.521 28.6988H15.5363C15.6405 28.6649 15.7446 28.6259 15.85 28.5865L15.8501 28.5864H15.8501C15.9758 28.5393 16.1031 28.4916 16.2343 28.4512C17.9221 27.8817 19.0389 26.1608 18.7724 24.5264C18.4678 22.6198 17.0338 21.3322 15.1429 21.2579C14.0388 21.2208 13.1124 21.5798 12.3129 22.2979C11.2342 23.276 9.99049 23.7341 8.53109 23.3255C5.70113 22.5455 4.71125 19.178 6.71636 17.0856C7.61738 16.1446 8.0235 15.0799 7.88386 13.817C7.77622 12.8715 7.20601 12.1791 6.63065 11.4805L6.63055 11.4804L6.63045 11.4802C6.59563 11.4379 6.56076 11.3957 6.52599 11.3532C4.41937 8.79042 6.39909 5.819 8.67067 5.27426C10.0667 4.93997 11.2342 5.36092 12.2494 6.3266C13.7977 7.78755 16.1327 7.89896 17.5541 6.43806C19.1531 4.80375 21.6531 4.75423 23.2648 6.45044C24.3308 7.56472 26.1075 7.75041 27.5034 7.08183C28.9628 6.37611 29.7496 4.93997 29.5847 3.24376C29.4578 1.84475 28.3029 0.557136 26.8435 0.16095ZM25.8536 23.7835C25.1049 23.7712 24.5338 24.3036 24.5338 25.0464C24.5338 25.7893 25.0922 26.3464 25.8282 26.334C26.5516 26.334 27.1607 25.7273 27.148 25.034C27.1354 24.3655 26.5516 23.7959 25.8536 23.7835ZM24.5338 14.6343C24.5465 13.8914 25.0922 13.3714 25.8663 13.3838C26.577 13.3961 27.148 13.9657 27.148 14.6467C27.148 15.3399 26.5262 15.9466 25.8155 15.9466C25.0922 15.9342 24.5338 15.3523 24.5338 14.6343ZM14.9651 16.021C15.7011 16.0334 16.2722 15.4763 16.2722 14.7458C16.2849 14.0029 15.7265 13.4581 14.9651 13.4705C14.2544 13.483 13.6833 14.0277 13.6579 14.7086C13.6326 15.4019 14.2417 16.0086 14.9651 16.021Z44:T9cf,M44.1544 27.5969C47.4782 27.5969 49.8805 26.6947 51.6903 24.987C53.3028 23.4726 54.3559 21.3782 54.5204 19.0906H48.6958C48.4325 21.3138 46.7213 22.9249 44.1215 22.9249C40.6332 22.9249 38.4612 19.8639 38.4612 15.6429C38.4612 11.4542 40.2712 8.32876 44.0886 8.32876C46.5896 8.32876 48.2351 9.90759 48.5312 11.9697H54.3559C54.0597 9.39205 52.875 7.13659 50.8346 5.6222C49.1565 4.36559 46.8529 3.59229 44.1215 3.59229C37.1119 3.59229 32.5376 8.77986 32.5376 15.6429C32.5376 22.5382 37.2436 27.5969 44.1544 27.5969ZM64.8183 23.8593C62.4818 23.8593 61.2641 21.8616 61.2641 18.865C61.2641 15.8685 62.4818 13.8385 64.8183 13.8385C67.1548 13.8385 68.4053 15.8685 68.4053 18.865C68.4053 21.8616 67.1548 23.8593 64.8183 23.8593ZM64.8512 27.5969C70.2811 27.5969 73.8352 23.827 73.8352 18.865C73.8352 13.903 70.2811 10.1331 64.8512 10.1331C59.4542 10.1331 55.8342 13.903 55.8342 18.865C55.8342 23.827 59.4542 27.5969 64.8512 27.5969ZM108.336 22.2785V8.81018H111.824C115.477 8.81018 117.55 11.5167 117.55 15.7055C117.55 19.9264 115.575 22.2785 111.758 22.2785H108.336ZM102.511 27.0795H112.186C115.148 27.0795 117.517 26.3384 119.36 24.9851C121.993 23.0196 123.441 19.7653 123.441 15.7055C123.441 8.64907 119.064 4.04148 112.548 4.04148H102.511V27.0795ZM133.612 27.5628C135.751 27.5628 137.463 27.015 138.878 26.0484C140.359 25.0495 141.346 23.6318 141.708 22.1497H136.475C136.015 23.1807 135.093 23.7929 133.678 23.7929C131.473 23.7929 130.223 22.4074 129.894 20.1842H142.004C142.037 16.8332 141.05 13.9655 139.042 12.1612C137.594 10.8723 135.686 10.099 133.283 10.099C128.15 10.099 124.628 13.8689 124.628 18.7987C124.628 23.7929 128.051 27.5628 133.612 27.5628ZM129.927 17.0587C130.289 15.0933 131.342 13.8366 133.382 13.8366C135.126 13.8366 136.377 15.0933 136.574 17.0587H129.927ZM150.974 27.595C155.384 27.595 158.642 25.7262 158.642 22.1174C158.642 17.8965 155.153 17.1554 152.192 16.6721C150.053 16.2854 148.144 16.1243 148.144 14.9644C148.144 13.93"])
    </script>
    <script>
        self.__next_f.push([1,"33 149.164 13.45 150.48 13.45C151.961 13.45 152.981 13.9011 153.179 15.3833H158.115C157.852 12.1289 155.285 10.099 150.513 10.099C146.531 10.099 143.24 11.9034 143.24 15.3833C143.24 19.2498 146.367 20.0231 149.296 20.5064C151.533 20.893 153.574 21.0541 153.574 22.5363C153.574 23.5996 152.554 24.1796 150.941 24.1796C149.164 24.1796 148.045 23.374 147.848 21.7308H142.78C142.944 25.3717 146.038 27.595 150.974 27.595ZM160.383 27.0795H165.681V22.0208L167.294 20.3453L171.341 27.0795H177.561L170.946 16.7688L176.87 10.5823H170.683L165.681 16.1566V4.04148H160.383V27.0795Z47:T433,M11.9902 9.03738C12.6752 9.037 13.3449 9.2398 13.9147 9.62012C14.4844 10.0005 14.9285 10.5412 15.1908 11.174C15.4531 11.8068 15.5219 12.5032 15.3883 13.175C15.2548 13.8469 14.925 14.4641 14.4406 14.9484C13.9562 15.4328 13.3391 15.7626 12.6672 15.8962C11.9953 16.0297 11.299 15.961 10.6662 15.6987C10.0334 15.4363 9.49261 14.9922 9.11228 14.4225C8.73196 13.8528 8.52916 13.183 8.52954 12.498C8.5311 11.5807 8.8962 10.7014 9.54486 10.0527C10.1935 9.40404 11.0729 9.03894 11.9902 9.03738ZM11.9902 7.47059C10.9958 7.47253 10.0243 7.76919 9.19848 8.32309C8.37264 8.87699 7.72954 9.66327 7.35043 10.5826C6.97133 11.5018 6.87324 12.5129 7.06856 13.4879C7.26389 14.4629 7.74386 15.3582 8.44782 16.0605C9.15178 16.7628 10.0481 17.2407 11.0236 17.4337C11.9991 17.6268 13.0099 17.5263 13.9283 17.1451C14.8467 16.7638 15.6315 16.1189 16.1834 15.2917C16.7354 14.4646 17.0298 13.4924 17.0294 12.498C17.0291 11.8369 16.8985 11.1823 16.6451 10.5717C16.3916 9.9611 16.0202 9.40646 15.5522 8.93951C15.0841 8.47257 14.5286 8.10248 13.9174 7.85043C13.3062 7.59838 12.6513 7.4693 11.9902 7.47059Z48:T73e,M19.6239 4.40921C18.2217 3.75695 16.7181 3.27639 15.1459 3.00116C15.1173 2.99585 15.0887 3.00912 15.0739 3.03567C14.8805 3.38436 14.6663 3.83925 14.5163 4.1968C12.8254 3.94015 11.1431 3.94015 9.48679 4.1968C9.33676 3.83131 9.11478 3.38436 8.92053 3.03567C8.90578 3.01001 8.87718 2.99673 8.84855 3.00116C7.27725 3.27551 5.7736 3.75607 4.37052 4.40921C4.35838 4.41452 4.34797 4.42338 4.34106 4.43488C1.48894 8.75461 0.707629 12.9682 1.09092 17.1295C1.09265 17.1498 1.10392 17.1693 1.11953 17.1817C3.00127 18.5827 4.82406 19.4332 6.61301 19.9969C6.64164 20.0058 6.67197 19.9951 6.69019 19.9712C7.11337 19.3854 7.49059 18.7676 7.81402 18.118C7.83311 18.08 7.81489 18.0348 7.77588 18.0198C7.17754 17.7897 6.6078 17.5091 6.05975 17.1906C6.0164 17.1649 6.01293 17.102 6.05281 17.0719C6.16814 16.9843 6.2835 16.8932 6.39363 16.8011C6.41355 16.7843 6.44131 16.7808 6.46474 16.7914C10.0652 18.4579 13.9631 18.4579 17.521 16.7914C17.5445 16.7799 17.5722 16.7834 17.593 16.8003C17.7032 16.8923 17.8185 16.9843 17.9347 17.0719C17.9746 17.102 17.972 17.1649 17.9286 17.1906C17.3806 17.5153 16.8108 17.7897 16.2116 18.0189C16.1726 18.034 16.1553 18.08 16.1744 18.118C16.5047 18.7667 16.882 19.3845 17.2973 19.9704C17.3147 19.9951 17.3459 20.0058 17.3745 19.9969C19.1721 19.4332 20.9949 18.5827 22.8766 17.1817C22.8931 17.1693 22.9035 17.1507 22.9053 17.1304C23.364 12.3194 22.1369 8.14042 19.6525 4.43576C19.6465 4.42338 19.6361 4.41452 19.6239 4.40921ZM8.35169 14.5957C7.26771 14.5957 6.37454 13.5868 6.37454 12.3478C6.37454 11.1087 7.25039 10.0998 8.35169 10.0998C9.46163 10.0998 10.3462 11.1176 10.3288 12.3478C10.3288 13.5868 9.45296 14.5957 8.35169 14.5957ZM15.6619 14.5957C14.5779 14.5957 13.6847 13.5868 13.6847 12.3478C13.6847 11.1087 14.5606 10.0998 15.6619 10.0998C16.7718 10.0998 17.6563 11.1176 17.639 12.3478C17.639 13.5868 16.7718 14.5957 15.6619 14.5957Z49:T710,M110.471 0.00013H9.87062C9.50392 0.00013 9.14162 0.00013 8.77589 0.00213C8.46974 0.00413 8.16603 0.00994 7.85694 0.01483C7.18545 0.0227318 6.51554 0.0818063 5.85304 0.19154C5.19146 0.303663 4.55061 0.515046 3.95216 0.81854C3.35444 1.1246 2.80828 1.5223 2.33351 1.9972C1.85624 2.47077 1.4584 3.01815 1.15529 3.61829C0.851338 4.21724 0.640578 4.85907 0.530288 5.52161C0.418948 6.18332 0.359036 6.85265 0.351088 7.52361C0.341808 7.83021 0.340827 8.13783 0.335938 8.44447V31.5587C0.340827 31.8692 0.341808 32.17 0.351088 32.4806C0.359038 33.1516 0.418951 33.8209 0.530288 34.482"])
    </script>
    <script>
        self.__next_f.push([1,"5C0.640273 35.1455 0.851046 35.7877 1.15529 36.3868C1.45826 36.985 1.85616 37.5302 2.33351 38.0011C2.80648 38.4781 3.35299 38.8761 3.95216 39.1798C4.55061 39.4841 5.19139 39.6968 5.85304 39.8106C6.51566 39.9195 7.18549 39.9786 7.85694 39.9874C8.16603 39.9942 8.46974 39.9981 8.77589 39.9981C9.14161 40.0001 9.50394 40.0001 9.87062 40.0001H110.471C110.83 40.0001 111.195 40.0001 111.555 39.9981C111.859 39.9981 112.172 39.9942 112.477 39.9874C113.147 39.9791 113.815 39.92 114.477 39.8106C115.14 39.696 115.783 39.4834 116.385 39.1798C116.983 38.8759 117.529 38.478 118.002 38.0011C118.478 37.5284 118.877 36.9836 119.184 36.3868C119.486 35.7872 119.694 35.1451 119.803 34.4825C119.914 33.8208 119.976 33.1516 119.988 32.4806C119.992 32.17 119.992 31.8692 119.992 31.5587C120 31.1954 120 30.8341 120 30.4649V9.53626C120 9.17005 120 8.80677 119.992 8.44447C119.992 8.13783 119.992 7.83021 119.988 7.52357C119.976 6.85255 119.914 6.18337 119.803 5.52157C119.694 4.85941 119.485 4.21763 119.184 3.61825C118.566 2.41533 117.588 1.43616 116.385 0.81845C115.783 0.515697 115.14 0.30437 114.477 0.19145C113.815 0.0812328 113.147 0.0221378 112.477 0.01469C112.172 0.00981 111.859 0.00395 111.555 0.002C111.195 0 110.83 0.00013 110.471 0.00013Z4a:T61e,M8.7808 39.125C8.47612 39.125 8.1788 39.1211 7.87651 39.1143C7.2503 39.1061 6.62554 39.0516 6.00737 38.9512C5.43096 38.8519 4.87258 38.6673 4.35063 38.4033C3.83348 38.1415 3.36179 37.7983 2.95363 37.3867C2.53957 36.98 2.19485 36.5082 1.93312 35.9902C1.66851 35.4688 1.48539 34.9099 1.39012 34.333C1.28725 33.7131 1.23159 33.0863 1.22362 32.458C1.21728 32.2471 1.20898 31.5449 1.20898 31.5449V8.44434C1.20898 8.44434 1.21782 7.75293 1.22367 7.5498C1.2313 6.92248 1.28664 6.29665 1.3892 5.67773C1.48464 5.09925 1.66791 4.53875 1.93266 4.01563C2.19343 3.49794 2.53624 3.02586 2.9478 2.61768C3.35891 2.20562 3.83211 1.8606 4.35014 1.59521C4.87089 1.33209 5.42822 1.14873 6.00346 1.05127C6.62366 0.949836 7.25059 0.894996 7.87897 0.88721L8.78129 0.875H111.55L112.463 0.8877C113.086 0.895099 113.707 0.94945 114.321 1.05029C114.902 1.14898 115.466 1.33362 115.992 1.59814C117.03 2.13299 117.875 2.97916 118.407 4.01807C118.668 4.53758 118.848 5.09351 118.942 5.66699C119.046 6.29099 119.104 6.92174 119.116 7.5542C119.119 7.8374 119.119 8.1416 119.119 8.44434C119.127 8.81934 119.127 9.17627 119.127 9.53613V30.4648C119.127 30.8281 119.127 31.1826 119.119 31.54C119.119 31.8652 119.119 32.1631 119.115 32.4697C119.104 33.0909 119.046 33.7104 118.944 34.3232C118.851 34.9043 118.669 35.4675 118.404 35.9932C118.141 36.5056 117.798 36.9733 117.389 37.3789C116.98 37.7927 116.508 38.1379 115.989 38.4014C115.464 38.6674 114.902 38.8527 114.321 38.9512C113.703 39.0522 113.078 39.1067 112.452 39.1143C112.159 39.1211 111.853 39.125 111.555 39.125L110.471 39.127L8.7808 39.125Z4b:T4f0,M105.097 13.4819C104.977 13.8934 104.715 14.2494 104.358 14.4876C104.002 14.7257 103.573 14.8309 103.146 14.7846C102.849 14.7924 102.555 14.7356 102.282 14.6181C102.01 14.5006 101.766 14.3251 101.568 14.104C101.37 13.8829 101.223 13.6213 101.136 13.3375C101.049 13.0537 101.026 12.7544 101.066 12.4604C101.027 12.1655 101.051 11.8656 101.137 11.5809C101.224 11.2962 101.371 11.0335 101.567 10.8104C101.764 10.5873 102.007 10.4092 102.278 10.2879C102.55 10.1667 102.845 10.1053 103.142 10.1079C104.395 10.1079 105.151 10.9639 105.151 12.3779V12.688H101.971V12.7378C101.957 12.903 101.978 13.0693 102.032 13.2261C102.086 13.3828 102.173 13.5265 102.286 13.648C102.399 13.7694 102.536 13.866 102.688 13.9314C102.84 13.9968 103.005 14.0296 103.171 14.0278C103.383 14.0533 103.598 14.015 103.789 13.9178C103.98 13.8206 104.138 13.6688 104.242 13.4819L105.097 13.4819ZM101.971 12.0307H104.246C104.257 11.8796 104.236 11.7278 104.185 11.5851C104.134 11.4423 104.054 11.3119 103.95 11.202C103.845 11.0922 103.719 11.0053 103.579 10.9472C103.439 10.889 103.289 10.8607 103.137 10.8642C102.984 10.8623 102.831 10.8911 102.689 10.9491C102.546 11.007 102.417 11.0929 102.308 11.2016C102.2 11.3103 102.114 11.4397 102.056 11.5821C101.998 11.7245 101.969 11.877 101.971 12.0307Z4c:Tbd7,M68.14 2"])
    </script>
    <script>
        self.__next_f.push([1,"1.75C65.79 21.75 63.87 23.54 63.87 26C63.87 28.46 65.79 30.25 68.14 30.25C70.49 30.25 72.41 28.45 72.41 26C72.41 23.55 70.49 21.75 68.14 21.75ZM68.14 28.5801C66.85 28.5801 65.74 27.5201 65.74 26C65.74 24.48 66.85 23.42 68.14 23.42C69.43 23.42 70.54 24.47 70.54 26C70.54 27.53 69.43 28.5801 68.14 28.5801ZM58.82 21.75C56.47 21.75 54.55 23.54 54.55 26C54.55 28.46 56.47 30.25 58.82 30.25C61.17 30.25 63.09 28.45 63.09 26C63.09 23.55 61.17 21.75 58.82 21.75ZM58.82 28.5801C57.53 28.5801 56.42 27.5201 56.42 26C56.42 24.48 57.53 23.42 58.82 23.42C60.11 23.42 61.22 24.47 61.22 26C61.22 27.53 60.11 28.5801 58.82 28.5801ZM47.74 23.0601V24.8601H52.06C51.93 25.8801 51.59 26.6201 51.08 27.1301C50.45 27.7601 49.47 28.4501 47.75 28.4501C45.09 28.4501 43.01 26.3101 43.01 23.6501C43.01 20.9901 45.09 18.85 47.75 18.85C49.18 18.85 50.23 19.41 51 20.14L52.27 18.8701C51.19 17.8401 49.76 17.05 47.74 17.05C44.1 17.05 41.04 20.01 41.04 23.66C41.04 27.31 44.1 30.2701 47.74 30.2701C49.71 30.2701 51.19 29.63 52.35 28.42C53.54 27.23 53.91 25.5501 53.91 24.2001C53.91 23.7801 53.88 23.39 53.81 23.07H47.74V23.0601ZM93.05 24.46C92.7 23.51 91.62 21.75 89.41 21.75C87.2 21.75 85.4 23.47 85.4 26C85.4 28.38 87.2 30.25 89.62 30.25C91.57 30.25 92.7 29.06 93.16 28.37L91.71 27.4001C91.23 28.1101 90.57 28.5801 89.62 28.5801C88.67 28.5801 87.99 28.1401 87.56 27.2901L93.25 24.94L93.06 24.46H93.05ZM87.25 25.8801C87.2 24.2401 88.52 23.4001 89.47 23.4001C90.21 23.4001 90.84 23.77 91.05 24.3L87.25 25.8801ZM82.63 30H84.5V17.5H82.63V30ZM79.57 22.7001H79.51C79.09 22.2001 78.29 21.75 77.27 21.75C75.14 21.75 73.19 23.62 73.19 26.0201C73.19 28.42 75.14 30.26 77.27 30.26C78.29 30.26 79.09 29.8101 79.51 29.2901H79.57V29.9001C79.57 31.5301 78.7 32.4001 77.3 32.4001C76.16 32.4001 75.45 31.58 75.16 30.89L73.53 31.57C74 32.7 75.24 34.0801 77.3 34.0801C79.49 34.0801 81.34 32.7901 81.34 29.6501V22.01H79.57V22.7001ZM77.42 28.5801C76.13 28.5801 75.05 27.5 75.05 26.0201C75.05 24.5401 76.13 23.43 77.42 23.43C78.71 23.43 79.69 24.5301 79.69 26.0201C79.69 27.51 78.69 28.5801 77.42 28.5801ZM101.81 17.5H97.34V30H99.21V25.26H101.82C103.89 25.26 105.92 23.76 105.92 21.38C105.92 19 103.89 17.5 101.82 17.5H101.81ZM101.85 23.5201H99.2V19.23H101.85C103.25 19.23 104.04 20.3901 104.04 21.3701C104.04 22.3501 103.25 23.51 101.85 23.51V23.5201ZM113.39 21.73C112.04 21.73 110.64 22.33 110.06 23.64L111.72 24.3301C112.07 23.6401 112.73 23.41 113.42 23.41C114.38 23.41 115.37 23.9901 115.38 25.0201V25.1501C115.04 24.9601 114.32 24.67 113.43 24.67C111.64 24.67 109.83 25.65 109.83 27.48C109.83 29.15 111.29 30.23 112.93 30.23C114.18 30.23 114.88 29.67 115.31 29.01H115.37V29.98H117.17V25.19C117.17 22.97 115.51 21.73 113.37 21.73H113.39ZM113.16 28.5801C112.55 28.5801 111.7 28.2701 111.7 27.5201C111.7 26.5601 112.76 26.19 113.68 26.19C114.5 26.19 114.89 26.3701 115.38 26.6101C115.24 27.7701 114.24 28.59 113.16 28.59V28.5801ZM123.74 22L121.6 27.42H121.54L119.32 22H117.31L120.64 29.5801L118.74 33.7901H120.69L125.82 22H123.75H123.74ZM106.94 30H108.81V17.5H106.94V30Z5:[\"$\",\"html\",null,{\"suppressHydrationWarning\":true,\"lang\":\"en\",\"children\":[[\"$\",\"head\",\"head\",{\"children\":[[\"$\",\"link\",null,{\"rel\":\"manifest\",\"href\":\"/manifest.webmanifest\"}],[\"$\",\"$1a\",null,{\"fallback\":null,\"children\":[\"$\",\"script\",null,{\"id\":\"gtm-script\",\"data-ot-ignore\":true,\"data-cookie-consent\":\"ignore\",\"dangerouslySetInnerHTML\":{\"__html\":\"$35\"}}]}],[\"$\",\"$L36\",null,{\"suppressHydrationWarning\":true,\"id\":\"Cookiebot\",\"src\":\"https://consent.cookiebot.com/uc.js\",\"data-cbid\":\"0eadae03-33f1-4a15-97c4-7f82433a6838\",\"data-framework\":\"TCFv2.2\",\"strategy\":\"beforeInteractive\"}],[[\"$\",\"$L36\",null,{\"data-ot-ignore\":true,\"data-cookie-consent\":\"ignore\",\"id\":\"freestar-init\",\"children\":\"\\n\\t\\t\\t\\t\\t\\t\\t\\t\\twindow.freestar = window.freestar || {};\\n\\t\\t\\t\\t\\t\\t\\t\\t\\twindow.freestar.queue = window.freestar.queue || [];\\n\\t\\t\\t\\t\\t\\t\\t\\t\\twindow.freestar.config = window.freestar.config || {};\\n\\t\\t\\t\\t\\t\\t\\t\\t\"}],[\"$\",\"$L36\",null,{\"id\":\"freestar-hash-match\",\"children\":\"\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\twindow.freestar.queue.push(() =\u003e {\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\twindow.freestar.identit"])
    </script>
    <script>
        self.__next_f.push([1,"y.setIdentity({\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\thashes: {\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\tsha256: \\\"8c9092c4b22996f0779bd14117b76362ba896d321f9d7e7663c595cea0b39f4f\\\"\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t}\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t});\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t});\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\"}],[\"$\",\"$L36\",null,{\"async\":true,\"id\":\"freestar-pubfig\",\"src\":\"https://a.pub.network/coindesk/pubfig.min.js\",\"strategy\":\"lazyOnload\"}]],[\"$\",\"$L36\",null,{\"id\":\"JWPlayer\",\"src\":\"https://cdn.jwplayer.com/libraries/6amZaWBZ.js\",\"type\":\"text/javascript\",\"data-ot-ignore\":true,\"data-cookie-consent\":\"ignore\"}],[\"$\",\"$L36\",null,{\"id\":\"google-recaptcha-v3\",\"src\":\"https://www.google.com/recaptcha/api.js?render=6LdD_vElAAAAAC4MH8sVjuaAFGSN1fmOs8QJv8jW\",\"data-ot-ignore\":true,\"data-cookie-consent\":\"ignore\",\"defer\":true,\"async\":true}],[\"$\",\"$L37\",null,{}],false,[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://www.google-analytics.com\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://cdn.sanity.io\"}],[[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://securepubads.g.doubleclick.net\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://adservice.google.com\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://a.pub.network/\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://b.pub.network/\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://c.pub.network/\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://d.pub.network/\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://c.amazon-adsystem.com\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://s.amazon-adsystem.com\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://btloader.com/\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://api.btloader.com/\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://confiant-integrations.global.ssl.fastly.net\",\"crossOrigin\":\"anonymous\"}],[\"$\",\"link\",null,{\"rel\":\"preload\",\"href\":\"https://a.pub.network/coindesk/pubfig.min.js\",\"as\":\"script\"}],[\"$\",\"link\",null,{\"rel\":\"stylesheet\",\"href\":\"https://a.pub.network/coindesk/cls.css\"}]],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://connect.facebook.net\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://cdn.jwplayer.com\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://cloudfront-us-east-1.images.arcpublishing.com\"}],[\"$\",\"link\",null,{\"rel\":\"preconnect\",\"href\":\"https://downloads.coindesk.com\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"sizes\":\"any\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/favicon.ico\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/svg+xml\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/favicon.svg\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/x-icon\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/android-chrome-192x192.png\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/png\",\"sizes\":\"16x16\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/favicon-16x16.png\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/png\",\"sizes\":\"32x32\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/favicon-32x32.png\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/png\",\"sizes\":\"48x48\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/favicon-48x48.png\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/png\",\"sizes\":\"64x64\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/favicon-64x64.png\"}],[\"$\",\"link\",null,{\"rel\":\"apple-touch-icon\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/apple-touch-icon-60x60.png\"}],[\"$\",\"link\",null,{\"rel\":\"apple-touch-icon\",\"sizes\":\"120x120\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/apple-touch-icon-120x120.png\"}],[\"$\",\"link\",null,{\"rel\":\"apple-touch-icon\",\"sizes\":\"152x152\",\"href\":\"https://coindes"])
    </script>
    <script>
        self.__next_f.push([1,"k-next-laep3of2c-coindesk.vercel.app/favicons/production/apple-touch-icon-152x152.png\"}],[\"$\",\"link\",null,{\"rel\":\"apple-touch-icon\",\"sizes\":\"167x167\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/apple-touch-icon-167x167.png\"}],[\"$\",\"link\",null,{\"rel\":\"apple-touch-icon\",\"sizes\":\"180x180\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/apple-touch-icon-180x180.png\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/png\",\"sizes\":\"512x512\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/android-chrome-512x512.png\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/png\",\"sizes\":\"16x16\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/favicon-16x16.png\"}],[\"$\",\"link\",null,{\"rel\":\"icon\",\"type\":\"image/png\",\"sizes\":\"32x32\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/favicon-32x32.png\"}],[\"$\",\"link\",null,{\"rel\":\"apple-touch-icon\",\"sizes\":\"180x180\",\"href\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/favicons/production/apple-touch-icon-180x180.png\"}],[\"$\",\"meta\",null,{\"name\":\"theme-color\",\"content\":\"#000\"}],[\"$\",\"meta\",null,{\"name\":\"viewport\",\"content\":\"width=device-width, initial-scale=1, maximum-scale=1\"}],[\"$\",\"link\",null,{\"rel\":\"hub\",\"href\":\"https://pubsubhubbub.appspot.com/\"}],[\"$\",\"link\",null,{\"rel\":\"self\",\"href\":\"/arc/outboundfeeds/rss\"}],[\"$\",\"style\",null,{\"children\":\"\\n\\t\\t\\t\\t\\t:root {\\n\\t\\t\\t\\t\\t\\t--font-sans: 'neueHaas', 'neueHaas Fallback';\\n\\t\\t\\t\\t\\t\\t--font-serif: 'family', 'family Fallback';\\n\\t\\t\\t\\t\\t\\t--font-mono: 'dmMono', 'dmMono Fallback';\\n\\t\\t\\t\\t\\t}\\n\\t\\t\\t\\t\"}]]}],[\"$\",\"$L38\",null,{\"entries\":{},\"locale\":\"en\"}],[\"$\",\"$L39\",null,{\"user\":{\"urn:coindesk:roles\":[],\"urn:coindesk:meta:breakingNewsNotificationsEnabled\":true,\"urn:coindesk:meta:currency\":\"USD\",\"urn:coindesk:meta:locale\":\"en\",\"urn:coindesk:meta:marketingConsent\":true,\"urn:coindesk:meta:marketingConsentOffered\":true,\"urn:coindesk/login_action\":\"login\",\"nickname\":\"solomonyusufolayinka\",\"name\":\"solomonyusufolayinka@gmail.com\",\"picture\":\"https://s.gravatar.com/avatar/4ed81ca47fdff994197aa34ad11d8728?s=480\u0026r=pg\u0026d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fso.png\",\"updated_at\":\"2025-03-10T14:48:25.188Z\",\"email\":\"solomonyusufolayinka@gmail.com\",\"email_verified\":true,\"sub\":\"auth0|67cc5affe3fc1acf994e4487\",\"sid\":\"MBIe8aHE47m3oL7uNM6tOZzVmD1LTa2o\"},\"profileUrl\":\"/api/auth/profile\",\"children\":[\"$\",\"body\",null,{\"className\":\"light bg-background-default text-text-primary overflow-x\",\"children\":[[\"$\",\"noscript\",null,{\"children\":[\"$\",\"iframe\",null,{\"src\":\"https://metrics.coindesk.com/ns.html?id=GTM-W9J8GSW\",\"height\":\"0\",\"width\":\"0\",\"style\":{\"display\":\"none\",\"visibility\":\"hidden\"}}]}],[\"$\",\"$L3a\",null,{\"ads\":{\"adConfigurations\":[{\"useStoryContainer\":false,\"targetingPosDesktop\":\"button2\",\"_updatedAt\":\"2024-10-03T20:21:18Z\",\"sizesMobile\":[\"1x1\",\"120x60\"],\"_rev\":\"7D8VpFevnrq5Tmpi8ah8xs\",\"title\":\"Price: Button 2\",\"adEnabled\":true,\"_createdAt\":\"2024-10-03T20:21:18Z\",\"_id\":\"2085882b-c4a4-4cfd-818c-5ee69ff77405\",\"refId\":\"price_button_2\",\"sizesDesktop\":[\"1x1\",\"120x60\"],\"targetingPosMobile\":\"button2\",\"_type\":\"adConfiguration\",\"sticky\":false},{\"title\":\"Homepage: Leaderboard\",\"sticky\":false,\"useStoryContainer\":false,\"_updatedAt\":\"2024-12-19T19:23:25Z\",\"freestarPlacementMobile\":\"leaderboard_2\",\"freestarPlacementDesktop\":\"leaderboard_2\",\"adEnabled\":true,\"_id\":\"2656d3c5-1090-4eca-8d73-6c2c66b1db12\",\"sizesMobile\":[\"1x1\",\"300x50\",\"320x50\",\"300x100\",\"320x100\",\"300x200\",\"300x250\",\"336x280\"],\"targetingPosDesktop\":\"mid\",\"targetingPosMobile\":\"mobilemid\",\"_rev\":\"hXqKNQLHT7RZoEyCKZBvRn\",\"_type\":\"adConfiguration\",\"_createdAt\":\"2024-10-03T20:36:51Z\",\"refId\":\"homepage_leaderboard\",\"sizesDesktop\":[\"1x1\",\"468x90\",\"728x90\",\"300x250\",\"970x90\",\"970x250\"]},{\"freestarPlacementDesktop\":\"leaderboard\",\"targetingPosDesktop\":\"mid\",\"adEnabled\":true,\"_createdAt\":\"2024-10-03T20:34:28Z\",\"_id\":\"305df260-5639-44a7-ab3b-a88cb1e72a0a\",\"refId\":\"article_mid\",\"targetingPosMobile\":\"mobilemid\",\"sticky\":false,\"_updatedAt\":\"2025-03-20T14:59:18Z\",\"freestarPla"])
    </script>
    <script>
        self.__next_f.push([1,"cementMobile\":\"leaderboard\",\"sizesDesktop\":[\"1x1\",\"468x60\",\"468x90\",\"970x66\",\"728x90\",\"728x100\",\"300x250\",\"950x90\",\"970x90\",\"336x280\",\"970x120\",\"1440x90\",\"750x200\",\"930x180\",\"728x250\",\"728x280\",\"800x250\",\"970x250\",\"970x280\"],\"_rev\":\"Mm4G4lSLf0M5TfbPcdtJ1Y\",\"_type\":\"adConfiguration\",\"useStoryContainer\":false,\"sizesMobile\":[\"1x1\",\"300x50\",\"320x50\",\"300x100\",\"320x100\",\"300x250\",\"336x280\"],\"title\":\"Article: Mid\"},{\"sizesDesktop\":[\"1x1\",\"728x90\"],\"title\":\"Price: Below Chart\",\"adEnabled\":true,\"refId\":\"price_below_chart\",\"targetingPosMobile\":\"mobilemidprice\",\"_type\":\"adConfiguration\",\"freestarPlacementDesktop\":\"leaderboard_belowchart_2\",\"sticky\":false,\"targetingPosDesktop\":\"midprice\",\"freestarPlacementMobile\":\"leaderboard_belowchart_2\",\"useStoryContainer\":false,\"_id\":\"3aea38e1-bb87-462f-8608-caf1cf10152a\",\"_updatedAt\":\"2025-01-29T18:36:29Z\",\"_rev\":\"cp33ldlSPBAH9wa3wLEePP\",\"_createdAt\":\"2025-01-29T18:36:16Z\",\"sizesMobile\":[\"1x1\",\"300x50\",\"320x50\",\"300x100\"]},{\"useStoryContainer\":false,\"_rev\":\"Mm4G4lSLf0M5TfbPcdw9Wm\",\"title\":\"Global: High Impact\",\"freestarPlacementDesktop\":\"highimpactdsk\",\"adEnabled\":true,\"_createdAt\":\"2024-10-03T20:18:18Z\",\"sticky\":false,\"targetingPosDesktop\":\"highimpactdsk\",\"_updatedAt\":\"2025-03-20T15:04:49Z\",\"sizesDesktop\":[\"1x1\",\"970x66\",\"728x90\",\"728x100\",\"300x250\",\"970x90\",\"336x280\",\"1440x90\",\"728x250\",\"970x250\",\"1250x260\",\"1200x280\"],\"targetingPosMobile\":\"highimpactmob\",\"_id\":\"47c2d4b0-bfd1-4fc4-a4af-c62aefc99c40\",\"freestarPlacementMobile\":\"highimpactmob\",\"sizesMobile\":[\"1x1\",\"300x50\",\"320x50\",\"300x100\",\"300x200\",\"300x250\",\"320x250\",\"350x250\",\"336x280\"],\"_type\":\"adConfiguration\",\"refId\":\"highimpact\"},{\"sizesDesktop\":[\"1x1\",\"468x90\",\"728x90\",\"300x250\",\"970x90\",\"970x250\"],\"targetingPosMobile\":\"mobilemid\",\"_rev\":\"kSDTQUYiAFgPG9ReuKsCDU\",\"freestarPlacementDesktop\":\"leaderboard\",\"useStoryContainer\":false,\"targetingPosDesktop\":\"mid\",\"refId\":\"global_leaderboard\",\"_updatedAt\":\"2024-12-19T19:22:54Z\",\"freestarPlacementMobile\":\"leaderboard\",\"sizesMobile\":[\"1x1\",\"300x50\",\"320x50\",\"300x100\",\"320x100\",\"300x200\",\"300x250\",\"336x280\"],\"adEnabled\":true,\"sticky\":false,\"_type\":\"adConfiguration\",\"title\":\"Global: Leaderboard\",\"_createdAt\":\"2024-12-19T19:22:49Z\",\"_id\":\"48bcefc8-c1b8-425a-a9e2-4ff3e0055960\"},{\"targetingPosMobile\":\"mobilemid\",\"title\":\"Article: WTK\",\"freestarPlacementDesktop\":\"leaderboard\",\"sticky\":false,\"useStoryContainer\":false,\"_id\":\"77d21ade-dc8f-497e-903b-a4ac1e939b2c\",\"_updatedAt\":\"2025-03-20T14:58:35Z\",\"sizesMobile\":[\"1x1\",\"300x50\",\"320x50\",\"300x100\",\"320x100\",\"300x250\",\"336x280\"],\"targetingPosDesktop\":\"mid\",\"freestarPlacementMobile\":\"leaderboard\",\"sizesDesktop\":[\"1x1\",\"468x60\",\"468x90\",\"970x66\",\"728x90\",\"728x100\",\"300x250\",\"950x90\",\"970x90\",\"336x280\",\"970x120\",\"1440x90\",\"750x200\",\"930x180\",\"728x250\",\"728x280\",\"800x250\",\"970x250\",\"970x280\"],\"_rev\":\"U4CWLp5aDec4VkQbPe4d68\",\"_type\":\"adConfiguration\",\"adEnabled\":true,\"_createdAt\":\"2025-01-16T18:24:28Z\",\"refId\":\"article_wtk\"},{\"_rev\":\"fxLpYUT6Yg63DLdPJYer14\",\"title\":\"Calculator Page\",\"freestarPlacementDesktop\":\"mrec_right\",\"_createdAt\":\"2024-10-03T20:35:12Z\",\"sizesDesktop\":[\"300x250\"],\"targetingPosMobile\":\"rec\",\"adEnabled\":true,\"useStoryContainer\":false,\"_id\":\"78603a9e-3aa4-470e-93bf-b08a6260c47f\",\"refId\":\"calculator_rec\",\"_updatedAt\":\"2024-10-03T20:35:12Z\",\"_type\":\"adConfiguration\",\"sticky\":false,\"targetingPosDesktop\":\"rec\",\"freestarPlacementMobile\":\"mrec_right\",\"sizesMobile\":[\"350x250\"]},{\"sizesDesktop\":[\"1x1\",\"728x100\",\"750x100\"],\"targetingPosMobile\":\"stickymob\",\"_rev\":\"Ti5fFNNxaMZP27DWEh4qxC\",\"adEnabled\":true,\"sticky\":false,\"_updatedAt\":\"2025-03-20T14:09:52Z\",\"sizesMobile\":[\"1x1\",\"300x50\",\"320x50\"],\"_type\":\"adConfiguration\",\"title\":\"Global: Sticky Footer\",\"_createdAt\":\"2025-03-20T14:09:52Z\",\"useStoryContainer\":false,\"_id\":\"7e647a39-8d42-4d67-8f8c-1cde22007d7f\",\"refId\":\"stickyfooter\",\"targetingPosDesktop\":\"stickydsk\"},{\"_type\":\"adConfiguration\",\"targeting\":[{\"value\":\"0\",\"key\":\"adIndex\",\"_key\":\"d56e0cfa8de8\"}],\"targetingPosMobile\":\"highimpactmob\",\"_createdAt\":\"2025-02-14T21:50:31Z\",\"_id\":\"85ede40a-e1ca-43bd-86d5-44f8a9eced6a\",\"targetingPosDesktop\":\"highimpactd"])
    </script>
    <script>
        self.__next_f.push([1,"sk\",\"_updatedAt\":\"2025-03-13T20:49:25Z\",\"sizesMobile\":[\"300x50\",\"320x50\",\"300x100\"],\"_rev\":\"guliTI8nilOlxhSVAdSDdy\",\"adEnabled\":true,\"useStoryContainer\":false,\"sizesDesktop\":[\"728x90\",\"970x90\"],\"title\":\"ETH: High Impact\",\"sticky\":false,\"refId\":\"highimpact-ethereum\"},{\"_type\":\"adConfiguration\",\"title\":\"Article: Rec\",\"freestarPlacementDesktop\":\"mrec_right\",\"adEnabled\":true,\"sticky\":true,\"targetingPosDesktop\":\"rec\",\"_updatedAt\":\"2025-01-22T21:26:50Z\",\"freestarPlacementMobile\":\"mrec_right\",\"useStoryContainer\":false,\"sizesDesktop\":[\"1x1\",\"300x250\",\"336x280\",\"300x600\"],\"_createdAt\":\"2024-10-03T20:34:50Z\",\"_id\":\"96a6e90a-fd30-49b6-8a19-f54f359450b6\",\"refId\":\"article_rec\",\"sizesMobile\":[\"1x1\"],\"targetingPosMobile\":\"rec\",\"_rev\":\"3owlkF8xsgBW8f7IExTqX2\"},{\"_updatedAt\":\"2024-10-03T20:20:59Z\",\"sizesMobile\":[\"1x1\",\"120x60\"],\"sizesDesktop\":[\"1x1\",\"120x60\"],\"targetingPosMobile\":\"button1\",\"_rev\":\"fPOqUxe82SxwNGPDggRrbo\",\"adEnabled\":true,\"sticky\":false,\"useStoryContainer\":false,\"_id\":\"a5478060-67bd-4e20-810d-89fa854388eb\",\"refId\":\"price_button_1\",\"_type\":\"adConfiguration\",\"title\":\"Price: Button 1\",\"_createdAt\":\"2024-10-03T20:20:59Z\",\"targetingPosDesktop\":\"button1\"},{\"useStoryContainer\":false,\"_updatedAt\":\"2025-01-30T21:13:10Z\",\"targetingPosMobile\":\"inbodymob\",\"adEnabled\":false,\"_id\":\"d9860f38-9b03-4d6d-bda1-67b0b373e594\",\"refId\":\"global_inbody\",\"targetingPosDesktop\":\"inbodydsk\",\"sizesMobile\":[\"fluid\"],\"sizesDesktop\":[\"fluid\"],\"_rev\":\"863aizRoMMlTw9aU7YezJ7\",\"_type\":\"adConfiguration\",\"title\":\"Global: Inbody\",\"_createdAt\":\"2024-10-03T20:20:38Z\",\"sticky\":false},{\"_rev\":\"DoAANF2LTsd1ssVJx1AhR4\",\"adEnabled\":true,\"useStoryContainer\":false,\"_id\":\"dbd211ff-5c97-4f4b-b6b1-deee5d3bb6dd\",\"targetingPosDesktop\":\"recprice\",\"sticky\":false,\"_updatedAt\":\"2025-01-30T20:32:43Z\",\"freestarPlacementMobile\":\"medrec\",\"sizesMobile\":[\"1x1\",\"300x250\"],\"_type\":\"adConfiguration\",\"title\":\"Price: Rec / Mid\",\"_createdAt\":\"2024-10-03T20:20:17Z\",\"refId\":\"price_rec\",\"sizesDesktop\":[\"1x1\",\"300x250\",\"336x280\"],\"targetingPosMobile\":\"mobilerecprice\",\"freestarPlacementDesktop\":\"medrec\"},{\"_rev\":\"fPOqUxe82SxwNGPDggUM27\",\"adEnabled\":true,\"useStoryContainer\":false,\"refId\":\"nativehp\",\"_updatedAt\":\"2024-10-03T20:37:15Z\",\"sizesDesktop\":[\"fluid\"],\"_type\":\"adConfiguration\",\"title\":\"Homepage: Native\",\"_createdAt\":\"2024-10-03T20:37:15Z\",\"sticky\":false,\"_id\":\"dc0bffe9-ebee-45e2-bda2-c25db02aee10\",\"targetingPosDesktop\":\"nativehp\",\"sizesMobile\":[\"fluid\"],\"targetingPosMobile\":\"nativehp\"}],\"adSettings\":{\"enableTickerAd\":false,\"parentAdunitCodeDesktop\":\"cddesktop\",\"articleAdTargetScoreDesktop\":1,\"enableOutbrain\":false,\"collapseEmptyAds\":false,\"disable\":{\"types\":{\"rec\":false,\"global_inbody\":false,\"mid\":false,\"article_wtk\":false}},\"articleAdTargetScoreMobile\":1.5,\"pageTypeMapping\":[{\"_type\":\"pathGroup\",\"_key\":\"5b347e845524\",\"key\":\"article\",\"values\":[\"/markets\",\"/business\",\"/policy\",\"/tech\",\"/learn\",\"/opinion\",\"/consensus-magazine\",\"/web3\",\"/coindesk-indices\",\"/coindesk-news\",\"/news-analysis\",\"/calculator\",\"/videos\"]},{\"values\":[\"/price\"],\"_type\":\"pathGroup\",\"_key\":\"039590a5108e\",\"key\":\"price\"},{\"values\":[\"/podcast\"],\"_type\":\"pathGroup\",\"_key\":\"77b811bfa136\",\"key\":\"podcast\"}],\"reserveSpace\":true,\"enableAds\":true,\"enableFreestar\":true,\"defaultPageType\":\"article\",\"articleAdDensityThreshold\":0.01,\"enableStickyFooter\":true,\"networkCode\":\"22031491390\",\"parentAdunitCodeMobile\":\"cdmobile\"}},\"rates\":[{\"iso\":\"USD\",\"name\":\"United States Dollar\",\"rate\":1,\"slug\":\"usd\",\"symbol\":\"$$\"}],\"children\":[[\"$\",\"main\",null,{\"className\":\"flex min-h-screen flex-col\",\"children\":[[\"$\",\"$L3b\",null,{\"children\":[null,[\"$\",\"$L3c\",null,{\"as\":\"header\",\"name\":\"navigation\",\"version\":\"1.0.0\",\"className\":\"top-0 z-[100] bg-white\",\"children\":[\"$\",\"div\",null,{\"className\":\"bg-white\",\"children\":[\"$L3d\",\"$L3e\"]}]}],[\"$\",\"$L3f\",null,{}],[\"$\",\"$L40\",null,{\"promoBanners\":[{\"backgroundHoverColor\":\"#000000\",\"textColorButton\":\"#FFFFFF\",\"textColorClock\":\"#262626\",\"title\":\"Promo Banner C31-3923 Yellow!\",\"sponsorText\":null,\"closeButtonColor\":\"#FFFFFF\",\"showSeconds\":true,\"radiusClock\":8,\"geolocation\":{\"filter\":false,\"countries\":[\"Aruba\",\"Anguilla\""])
    </script>
    <script>
        self.__next_f.push([1,",\"Argentine Republic\",\"Antigua and Barbuda\",\"Commonwealth of the Bahamas\",\"Collectivity of Saint Barthélemy\",\"Belize\",\"Bermuda\",\"Plurinational State of Bolivia\",\"Bonaire, Sint Eustatius and Saba\",\"Federative Republic of Brazil\",\"Barbados\",\"Canada\",\"Republic of Chile\",\"Republic of Colombia\",\"Republic of Costa Rica\",\"Republic of Cuba\",\"Country of Curaçao\",\"Cayman Islands\",\"Commonwealth of Dominica\",\"Dominican Republic\",\"Republic of Ecuador\",\"Falkland Islands\",\"Guadeloupe\",\"Grenada\",\"Greenland\",\"Republic of Guatemala\",\"Guiana\",\"Co-operative Republic of Guyana\",\"Republic of Honduras\",\"Republic of Haiti\",\"Jamaica\",\"Federation of Saint Christopher and Nevis\",\"Saint Lucia\",\"Saint Martin\",\"United Mexican States\",\"Montserrat\",\"Martinique\",\"Republic of Nicaragua\",\"Republic of Panama\",\"Republic of Peru\",\"Commonwealth of Puerto Rico\",\"Republic of Paraguay\",\"Republic of El Salvador\",\"Saint Pierre and Miquelon\",\"Republic of Suriname\",\"Sint Maarten\",\"Turks and Caicos Islands\",\"Republic of Trinidad and Tobago\",\"United States Minor Outlying Islands\",\"Oriental Republic of Uruguay\",\"United States of America\",\"Saint Vincent and the Grenadines\",\"Bolivarian Republic of Venezuela\",\"Virgin Islands\",\"Virgin Islands of the United States\",\"Islamic Republic of Afghanistan\",\"United Arab Emirates\",\"Republic of Armenia\",\"Republic of Azerbaijan\",\"People's Republic of Bangladesh\",\"Kingdom of Bahrain\",\"Nation of Brunei, Abode of Peace\",\"Kingdom of Bhutan\",\"People's Republic of China\",\"Georgia\",\"Hong Kong Special Administrative Region of the People's Republic of China\",\"Republic of Indonesia\",\"Republic of India\",\"Islamic Republic of Iran\",\"Republic of Iraq\",\"State of Israel\",\"Hashemite Kingdom of Jordan\",\"Japan\",\"Republic of Kazakhstan\",\"Kyrgyz Republic\",\"Kingdom of Cambodia\",\"Republic of Korea\",\"State of Kuwait\",\"Lao People's Democratic Republic\",\"Lebanese Republic\",\"Democratic Socialist Republic of Sri Lanka\",\"Macao Special Administrative Region of the People's Republic of China\",\"Republic of the Maldives\",\"Republic of the Union of Myanmar\",\"Mongolia\",\"Malaysia\",\"Federal Democratic Republic of Nepal\",\"Sultanate of Oman\",\"Islamic Republic of Pakistan\",\"Republic of the Philippines\",\"Democratic People's Republic of Korea\",\"State of Palestine\",\"State of Qatar\",\"Kingdom of Saudi Arabia\",\"Republic of Singapore\",\"Syrian Arab Republic\",\"Kingdom of Thailand\",\"Republic of Tajikistan\",\"Turkmenistan\",\"Democratic Republic of Timor-Leste\",\"Republic of Türkiye\",\"Republic of China (Taiwan)\",\"Republic of Uzbekistan\",\"Socialist Republic of Vietnam\",\"Republic of Yemen\",\"Republic of Angola\",\"Republic of Burundi\",\"Republic of Benin\",\"Burkina Faso\",\"Saint Helena, Ascension and Tristan da Cunha\",\"Republic of Botswana\",\"Central African Republic\",\"Republic of Côte d'Ivoire\",\"Republic of Cameroon\",\"Democratic Republic of the Congo\",\"Republic of the Congo\",\"Union of the Comoros\",\"Republic of Cabo Verde\",\"Republic of Djibouti\",\"People's Democratic Republic of Algeria\",\"Arab Republic of Egypt\",\"State of Eritrea\",\"Sahrawi Arab Democratic Republic\",\"Federal Democratic Republic of Ethiopia\",\"Gabonese Republic\",\"Republic of Ghana\",\"Republic of Guinea\",\"Republic of the Gambia\",\"Republic of Guinea-Bissau\",\"Republic of Equatorial Guinea\",\"British Indian Ocean Territory\",\"Republic of Kenya\",\"Republic of Liberia\",\"State of Libya\",\"Kingdom of Lesotho\",\"Kingdom of Morocco\",\"Republic of Madagascar\",\"Republic of Mali\",\"Republic of Mozambique\",\"Islamic Republic of Mauritania\",\"Republic of Mauritius\",\"Republic of Malawi\",\"Department of Mayotte\",\"Republic of Namibia\",\"Republic of Niger\",\"Federal Republic of Nigeria\",\"Réunion Island\",\"Republic of Rwanda\",\"Republic of the Sudan\",\"Republic of Senegal\",\"Republic of Sierra Leone\",\"Federal Republic of Somalia\",\"Republic of South Sudan\",\"Democratic Republic of São Tomé and Príncipe\",\"Kingdom of Eswatini\",\"Republic of Seychelles\",\"Republic of Chad\",\"Togolese Republic\",\"Tunisian Republic\",\"United Republic of Tanzania\",\"Republic of Uganda\",\"Republic of South Africa\",\"Republic of Zambia\",\"Republic of Zimbabwe\",\"Åland Islands\",\"Republic of Albania\",\""])
    </script>
    <script>
        self.__next_f.push([1,"Principality of Andorra\",\"Republic of Austria\",\"Kingdom of Belgium\",\"Republic of Bulgaria\",\"Bosnia and Herzegovina\",\"Republic of Belarus\",\"Swiss Confederation\",\"Republic of Cyprus\",\"Czech Republic\",\"Federal Republic of Germany\",\"Kingdom of Denmark\",\"Kingdom of Spain\",\"Republic of Estonia\",\"Republic of Finland\",\"French Republic\",\"Faroe Islands\",\"United Kingdom of Great Britain and Northern Ireland\",\"Bailiwick of Guernsey\",\"Gibraltar\",\"Hellenic Republic\",\"Republic of Croatia\",\"Hungary\",\"Isle of Man\",\"Republic of Ireland\",\"Iceland\",\"Italian Republic\",\"Bailiwick of Jersey\",\"Republic of Kosovo\",\"Principality of Liechtenstein\",\"Republic of Lithuania\",\"Grand Duchy of Luxembourg\",\"Republic of Latvia\",\"Principality of Monaco\",\"Republic of Moldova\",\"Republic of North Macedonia\",\"Republic of Malta\",\"Montenegro\",\"Kingdom of the Netherlands\",\"Kingdom of Norway\",\"Republic of Poland\",\"Portuguese Republic\",\"Romania\",\"Russian Federation\",\"Svalbard og Jan Mayen\",\"Most Serene Republic of San Marino\",\"Republic of Serbia\",\"Slovak Republic\",\"Republic of Slovenia\",\"Kingdom of Sweden\",\"Ukraine\",\"Vatican City State\",\"American Samoa\",\"Commonwealth of Australia\",\"Territory of the Cocos (Keeling) Islands\",\"Cook Islands\",\"Territory of Christmas Island\",\"Republic of Fiji\",\"Federated States of Micronesia\",\"Guam\",\"Independent and Sovereign Republic of Kiribati\",\"Republic of the Marshall Islands\",\"Commonwealth of the Northern Mariana Islands\",\"New Caledonia\",\"Territory of Norfolk Island\",\"Niue\",\"Republic of Nauru\",\"New Zealand\",\"Pitcairn Group of Islands\",\"Republic of Palau\",\"Independent State of Papua New Guinea\",\"French Polynesia\",\"Solomon Islands\",\"Tokelau\",\"Kingdom of Tonga\",\"Tuvalu\",\"Republic of Vanuatu\",\"Territory of the Wallis and Futuna Islands\",\"Independent State of Samoa\",\"Antarctica\",\"Territory of the French Southern and Antarctic Lands\",\"Bouvet Island\",\"Heard Island and McDonald Islands\",\"South Georgia and the South Sandwich Islands\"]},\"lowerColorField\":\"#FFFFFF\",\"radiusButton\":1,\"on\":true,\"backgroundColorClock\":\"#FFFFFF\",\"active\":true,\"upperColorField\":\"#FFFFFF\",\"lowerText\":null,\"backgroundColorField\":\"#464DFB\",\"sponsorColorField\":\"#262626\",\"backgroundColorButton\":\"#000000\",\"end\":\"2025-03-21T20:00:00.000Z\",\"_id\":\"a6e2c87b-b4b9-4ef5-8c95-df26074431a8\",\"upperText\":\"Consensus 2025 Prices Rise Soon\",\"sponsorUrl\":null,\"buttonText\":\"Register Now\",\"buttonLink\":\"https://consensus2025.coindesk.com/\"}]}],[\"$\",\"$L2\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\",\"(media)\",\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$L4\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":[[],[\"$\",\"div\",null,{\"className\":\"flex flex-col justify-center items-center px-5 container-tablet-medium bg-color-yellow-900 my-20 md:yt-24 lg:yt-28\",\"children\":[[\"$\",\"h1\",null,{\"className\":\"font-bold tracking-tight font-sans text-[4rem] md:text-[5rem] mb-10\",\"children\":\"404\"}],[\"$\",\"h2\",null,{\"className\":\"font-bold mdmax:tracking-[0px] md:tracking-[-0.5px] font-sans mdmax:text-[1.5rem] md:text-[2rem] lg:text-[3rem] mdmax:leading-[30px] md:leading-[60px] text-center mb-1\",\"children\":\"Hmm, that's weird. Could've sworn the page was around here somewhere...\"}],[\"$\",\"$L41\",null,{\"src\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/404.f509c014.png\",\"height\":242,\"width\":414,\"alt\":\"404-image\",\"loading\":\"lazy\",\"className\":\"mb-24\"}],[\"$\",\"$L42\",null,{\"href\":\"/\",\"className\":\"hover:opacity-80 cursor-pointer background-yellow-900 border border-color-yellow-900 border-solid rounded-lg mb-8 text-charcoal-900 font-label font-medium py-1 px-4 h-10 flex items-center justify-center\",\"children\":\"Go To Homepage\"}]]}]],\"forbidden\":\"$undefined\",\"unauthorized\":\"$undefined\"}]]}],[\"$\",\"$L3c\",null,{\"as\":\"footer\",\"name\":\"footer\",\"version\":\"1.0.0\",\"className\":\"bottom-0 flex w-full flex-col items-center bg-[#FAFAFA] px-0 pb-[64px] pt-4 lg:pb-0\",\"children\":[\"$\",\"div\",null,{\"className\":\"container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-"])
    </script>
    <script>
        self.__next_f.push([1,"8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6\",\"children\":[\"$\",\"div\",null,{\"className\":\"max-w-[100%]\",\"children\":[[\"$\",\"div\",null,{\"className\":\"mb-8 flex w-full flex-col items-start justify-between lg:flex-row lg:items-center\",\"children\":[\"$\",\"div\",null,{\"className\":\"mb-0 lg:mb-0\",\"children\":[\"$\",\"$L42\",null,{\"href\":\"/\",\"className\":\"flex items-center justify-center\",\"title\":\"CoinDesk homepage\",\"data-position\":\"Logo\",\"prefetch\":false,\"children\":[\"$\",\"svg\",null,{\"width\":\"150\",\"height\":\"29\",\"viewBox\":\"0 0 178 29\",\"fill\":\"none\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[\"$\",\"g\",null,{\"children\":[[\"$\",\"path\",null,{\"fillRule\":\"evenodd\",\"clipRule\":\"evenodd\",\"d\":\"$43\",\"fill\":\"#F8BF1E\"}],[\"$\",\"g\",null,{\"children\":[[\"$\",\"path\",null,{\"d\":\"$44\",\"fill\":\"#000000\"}],[\"$\",\"path\",null,{\"d\":\"M89.262 27.0795H83.8979V10.5823H89.0646V12.8378H89.1633C90.4138 11.0656 92.0263 10.099 94.3629 10.099C98.0486 10.099 100.221 12.6767 100.221 16.3499V27.0795H94.8565V17.4132C94.8565 15.6732 93.968 14.4811 92.2238 14.4811C90.4467 14.4811 89.262 15.931 89.262 17.9609V27.0795Z\",\"fill\":\"#000000\"}]]}],[\"$\",\"path\",null,{\"d\":\"M75.004 13.9719L75.0042 10.6182H81.6235V27.12H76.5196V13.9719H75.004Z\",\"fill\":\"#000000\"}],[\"$\",\"ellipse\",null,{\"cx\":\"78.6929\",\"cy\":\"6.31373\",\"rx\":\"2.93113\",\"ry\":\"2.86988\",\"fill\":\"#000000\"}]]}]}]}]}]}],[\"$\",\"hr\",null,{\"className\":\"my-6 border-[#A6A6A6]\"}],[\"$\",\"div\",null,{\"className\":\"grid grid-cols-2 gap-8 lg:grid-cols-6\",\"children\":[[\"$\",\"div\",null,{\"className\":\"column\",\"data-submodule-name\":\"About\",\"children\":[[\"$\",\"p\",null,{\"className\":\"font-title text-sm break-keep uppercase leading-[1.5] tracking-[0.1px] text-[#1A1A1A]\",\"children\":\"About\"}],[\"$\",\"ul\",null,{\"className\":\"column-items mt-6 font-serif\",\"children\":[[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"/about\",\"target\":\"$undefined\",\"aria-label\":\"About Us\",\"prefetch\":false,\"children\":\"About Us\"}]]}],[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"/masthead\",\"target\":\"$undefined\",\"aria-label\":\"Masthead\",\"prefetch\":false,\"children\":\"Masthead\"}]]}],[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"https://bullish.wd3.myworkdayjobs.com/CoinDesk\",\"target\":\"_blank\",\"aria-label\":\"Careers\",\"prefetch\":false,\"children\":\"Careers\"}]]}],[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"/coindesk-news\",\"target\":\"$undefined\",\"aria-label\":\"CoinDesk News\",\"prefetch\":false,\"children\":\"CoinDesk News\"}]]}],[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"https://developers.coindesk.com/documentation/data-api/introduction\",\"target\":\"$undefined\",\"aria-label\":\"Crypto API Documentation\",\"prefetch\":false,\"children\":\"Crypto API Documentation\"}]]}]]}]]}],[\"$\",\"div\",null,{\"className\":\"column\",\"data-submodule-name\":\"Contact\",\"children\":[[\"$\",\"p\",null,{\"className\":\"font-title text-sm break-keep uppercase leading-[1.5] tracking-[0.1px] text-[#1A1A1A]\",\"children\":\"Contact\"}],[\"$\",\"ul\",null,{\"className\":\"column-items mt-6 font-serif\",\"children\":[[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"/contact-us\",\"target\":\"$undefined\",\"aria-label\":\"Contact Us\",\"prefetch\":false,\"children\":\"Contact Us\"}]]}],[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"/accessibility-help\",\"target\":\""])
    </script>
    <script>
        self.__next_f.push([1,"$undefined\",\"aria-label\":\"Accessibility\",\"prefetch\":false,\"children\":\"Accessibility\"}]]}],[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"/advertise\",\"target\":\"$undefined\",\"aria-label\":\"Advertise\",\"prefetch\":false,\"children\":\"Advertise\"}]]}],[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[[null,[\"$\",\"$L42\",\"/es/sitemap\",{\"href\":\"/es/sitemap\",\"target\":\"$undefined\",\"aria-label\":\"Sitemap\",\"prefetch\":false,\"className\":\"hidden\"}],[\"$\",\"$L42\",\"/uk/sitemap\",{\"href\":\"/uk/sitemap\",\"target\":\"$undefined\",\"aria-label\":\"Sitemap\",\"prefetch\":false,\"className\":\"hidden\"}],[\"$\",\"$L42\",\"/ru/sitemap\",{\"href\":\"/ru/sitemap\",\"target\":\"$undefined\",\"aria-label\":\"Sitemap\",\"prefetch\":false,\"className\":\"hidden\"}],[\"$\",\"$L42\",\"/fil/sitemap\",{\"href\":\"/fil/sitemap\",\"target\":\"$undefined\",\"aria-label\":\"Sitemap\",\"prefetch\":false,\"className\":\"hidden\"}],[\"$\",\"$L42\",\"/it/sitemap\",{\"href\":\"/it/sitemap\",\"target\":\"$undefined\",\"aria-label\":\"Sitemap\",\"prefetch\":false,\"className\":\"hidden\"}],[\"$\",\"$L42\",\"/fr/sitemap\",{\"href\":\"/fr/sitemap\",\"target\":\"$undefined\",\"aria-label\":\"Sitemap\",\"prefetch\":false,\"className\":\"hidden\"}],[\"$\",\"$L42\",\"/pt-br/sitemap\",{\"href\":\"/pt-br/sitemap\",\"target\":\"$undefined\",\"aria-label\":\"Sitemap\",\"prefetch\":false,\"className\":\"hidden\"}]],[\"$\",\"$L42\",null,{\"href\":\"/sitemap\",\"target\":\"$undefined\",\"aria-label\":\"Sitemap\",\"prefetch\":false,\"children\":\"Sitemap\"}]]}],[\"$\",\"li\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-[#676767] hover:underline\",\"children\":[false,[\"$\",\"$L42\",null,{\"href\":\"https://status.coindesk.com\",\"target\":\"$undefined\",\"aria-label\":\"System Status\",\"prefetch\":false,\"children\":\"System Status\"}]]}]]}]]}],[\"$\",\"$L45\",null,{\"name\":\"disclaimer\",\"version\":\"1.0.0\",\"className\":\"col-span-4 flex flex-col gap-4\",\"children\":[[\"$\",\"div\",null,{\"className\":\"font-title uppercase text-sm text-[#1A1A1A] leading-none\",\"children\":\"DISCLOSURE \u0026 POLICES\"}],[\"$\",\"div\",null,{\"className\":\"font-metadata leading-[1.5] tracking-[0.4px] text-[#676767]\",\"children\":[\"CoinDesk is an\",\" \",[\"$\",\"$L42\",null,{\"href\":\"/business/2023/02/20/coindesk-wins-a-polk-award-a-top-journalism-prize-for-explosive-ftx-coverage/\",\"rel\":\"noopener noreferrer\",\"className\":\"text-[#1A1A1A] underline\",\"prefetch\":false,\"children\":\"award-winning\"}],\" \",\"media outlet that covers the cryptocurrency industry. Its journalists abide by a strict set of\",\" \",[\"$\",\"$L42\",null,{\"href\":\"/ethics\",\"rel\":\"noopener noreferrer\",\"className\":\"text-[#1A1A1A] underline\",\"prefetch\":false,\"children\":\"editorial policies\"}],\".\",\" \",\"CoinDesk has adopted a set of principles aimed at ensuring the integrity, editorial independence and freedom from bias of its publications. CoinDesk is part of the Bullish group, which owns and invests in digital asset businesses and digital assets. CoinDesk employees, including journalists, may receive Bullish group equity-based compensation. Bullish was incubated by technology investor Block.one.\"]}],[\"$\",\"div\",null,{\"className\":\"flex-start flex flex-wrap gap-x-4 gap-y-2 self-stretch\",\"children\":[[\"$\",\"span\",null,{\"className\":\"font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline\",\"children\":[\"$\",\"$L42\",null,{\"href\":\"/ethics\",\"target\":\"$undefined\",\"aria-label\":\"Ethics\",\"prefetch\":false,\"children\":\"Ethics\"}]}],[\"$\",\"span\",null,{\"className\":\"font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline\",\"children\":[\"$\",\"$L42\",null,{\"href\":\"/privacy\",\"target\":\"$undefined\",\"aria-label\":\"Privacy\",\"prefetch\":false,\"children\":\"Privacy\"}]}],[\"$\",\"span\",null,{\"className\":\"font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline\",\"children\":[\"$\",\"$L42\",null,{\"href\":\"/terms\",\"target\":\"$undefined\",\"aria-label\":\"Terms of Use\",\"prefetch\":"])
    </script>
    <script>
        self.__next_f.push([1,"false,\"children\":\"Terms of Use\"}]}],[\"$\",\"span\",null,{\"className\":\"font-metadata item-link cursor-pointer pb-2 leading-[1.5] tracking-[0.1px] text-black hover:underline\",\"children\":[\"$\",\"$L46\",null,{}]}],[\"$\",\"span\",null,{\"className\":\"font-metadata item-link cursor-pointer break-keep pb-2 leading-[1.5] tracking-[0.1px] text-[#1A1A1A] hover:underline\",\"children\":[\"$\",\"$L42\",null,{\"href\":\"/privacy#dnsmpi\",\"target\":\"$undefined\",\"aria-label\":\"Do Not Sell My Info\",\"prefetch\":false,\"children\":\"Do Not Sell My Info\"}]}]]}]]}]]}],[\"$\",\"hr\",null,{\"className\":\"my-6 border-[#A6A6A6]\"}],[\"$\",\"div\",null,{\"className\":\"xl:grid-cols-16 grid grid-cols-1 items-center gap-6 md:grid-cols-8 lg:grid-cols-12 lg:gap-0\",\"children\":[[\"$\",\"div\",null,{\"className\":\"year-dropdown font-metadata order-3 tracking-wide text-[#676767] md:col-span-8 lg:order-1 lg:col-span-3 xl:col-span-7\",\"children\":\"© 2025 CoinDesk, Inc.\"}],[\"$\",\"div\",null,{\"className\":\"order-1 flex h-full w-full flex-col items-center space-y-2 md:col-span-4 md:flex-col md:justify-between md:space-y-0 lg:order-2 lg:col-span-4 lg:w-auto lg:flex-row lg:justify-between xl:col-span-5\",\"children\":[\"$\",\"div\",null,{\"className\":\"social-icons flex h-full w-full items-center\",\"children\":[\"$\",\"div\",null,{\"className\":\"flex w-full flex-col\",\"children\":[\"$\",\"$L45\",null,{\"name\":\"social\",\"version\":\"1.0.0\",\"className\":\"flex w-full flex-row items-center justify-between\",\"children\":[[\"$\",\"$L42\",null,{\"href\":\"https://twitter.com/coindesk\",\"aria-label\":\"Twitter\",\"data-position\":\"Twitter\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"16\",\"height\":\"16\",\"className\":\"$undefined\",\"viewBox\":\"0 0 1400 1027\",\"fill\":\"none\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"aria-labelledby\":\"twitter-svg-a11y-label-id\",\"children\":[[\"$\",\"title\",null,{\"id\":\"twitter-svg-a11y-label-id\",\"children\":\"X icon\"}],[\"$\",\"path\",null,{\"d\":\"M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z\",\"fill\":\"#676767\"}]]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://facebook.com/coindesk\",\"aria-label\":\"Facebook\",\"data-position\":\"Facebook\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"24\",\"height\":\"24\",\"className\":\"$undefined\",\"fill\":\"none\",\"viewBox\":\"0 0 24 24\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[\"$\",\"path\",null,{\"d\":\"M16.3447 13.6068L16.863 10.1942H13.621V7.9796C13.621 7.04596 14.0739 6.13593 15.526 6.13593H17V3.2306C17 3.2306 15.6623 3 14.3834 3C11.7132 3 9.96805 4.63437 9.96805 7.59321V10.1942H7V13.6068H9.96805V21.8566C10.5632 21.9509 11.1732 22 11.7945 22C12.4159 22 13.0259 21.9509 13.621 21.8566V13.6068H16.3447Z\",\"fill\":\"#676767\"}]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://linkedin.com/company/coindesk\",\"aria-label\":\"LinkedIn\",\"data-position\":\"LinkedIn\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"24\",\"height\":\"24\",\"className\":\"$undefined\",\"fill\":\"none\",\"viewBox\":\"0 0 24 24\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[\"$\",\"path\",null,{\"d\":\"M2.25362 9.21772H6.53986V22.1164H2.25362V9.21772ZM4.42543 3C2.95843 3 2 3.9631 2 5.22719C2 6.46529 2.93038 7.45638 4.36933 7.45638H4.39667C5.89171 7.45638 6.82276 6.46524 6.82276 5.22719C6.79471 3.9631 5.89176 3 4.42543 3ZM17.0638 8.91471C14.7886 8.91471 13.7693 10.1661 13.2007 11.0438V9.21772H8.91314C8.9699 10.4278 8.91314 22.1164 8.91314 22.1164H13.2007V14.9129C13.2007 14.527 13.2287 14.1427 13.3415 13.8663C13.652 13.0961 14.3574 12.2985 15.5407 12.2985C17.0931 12.2985 17.7131 13.4819 17.7131 15.2151V22.1163H22V14.72C22 10.7581 19.8856 8.91471 17.0638 8.91471Z\",\"fill\":\"#676767\"}]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://www.coindesk.com/arc/outboundfeeds/rss/\",\"aria-label\":\"RSSFeed\",\"data-position\":\"RSSFeed\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"22\",\"height\":\"22\",\"className\":\"$undefined\",\"fill\":\"none\",\"viewBox\":"])
    </script>
    <script>
        self.__next_f.push([1,"\"0 0 20 20\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[[\"$\",\"path\",null,{\"d\":\"M6.18 19.9999C7.38398 19.9999 8.36 19.0239 8.36 17.8199C8.36 16.6159 7.38398 15.6399 6.18 15.6399C4.97602 15.6399 4 16.6159 4 17.8199C4 19.0239 4.97602 19.9999 6.18 19.9999Z\",\"fill\":\"#676767\"}],[\"$\",\"path\",null,{\"d\":\"M5.59 10.2301C4.75 10.0901 4 10.7801 4 11.6301C4 12.3401 4.53 12.9101 5.23 13.0301C8.15 13.5401 10.45 15.8501 10.97 18.7701C11.09 19.4701 11.66 20.0001 12.37 20.0001C13.22 20.0001 13.91 19.2501 13.78 18.4101C13.1 14.2101 9.79 10.9001 5.59 10.2301ZM5.56 4.52009C4.73 4.43009 4 5.10009 4 5.93009C4 6.66009 4.55 7.26009 5.27 7.33009C11.28 7.93009 16.06 12.7101 16.66 18.7201C16.73 19.4501 17.33 20.0001 18.06 20.0001C18.9 20.0001 19.56 19.2701 19.48 18.4401C18.75 11.1001 12.91 5.25009 5.56 4.52009Z\",\"fill\":\"#676767\"}]]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://instagram.com/coindesk\",\"aria-label\":\"Instagram\",\"data-position\":\"Instagram\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"22\",\"height\":\"22\",\"className\":\"$undefined\",\"fill\":\"none\",\"viewBox\":\"0 0 22 21\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[[\"$\",\"path\",null,{\"d\":\"M15.6837 4.55102C16.8149 4.55102 17.8998 5.0004 18.6997 5.8003C19.4996 6.6002 19.949 7.6851 19.949 8.81633V16.1837C19.949 17.3149 19.4996 18.3998 18.6997 19.1997C17.8998 19.9996 16.8149 20.449 15.6837 20.449H8.31633C7.1851 20.449 6.1002 19.9996 5.3003 19.1997C4.5004 18.3998 4.05102 17.3149 4.05102 16.1837V8.81633C4.05102 7.6851 4.5004 6.6002 5.3003 5.8003C6.1002 5.0004 7.1851 4.55102 8.31633 4.55102H15.6837ZM15.6837 3H8.31633C6.77516 3.0046 5.29842 3.61887 4.20865 4.70865C3.11887 5.79842 2.5046 7.27516 2.5 8.81633V16.1837C2.5046 17.7248 3.11887 19.2016 4.20865 20.2914C5.29842 21.3811 6.77516 21.9954 8.31633 22H15.6837C17.2248 21.9954 18.7016 21.3811 19.7914 20.2914C20.8811 19.2016 21.4954 17.7248 21.5 16.1837V8.81633C21.4954 7.27516 20.8811 5.79842 19.7914 4.70865C18.7016 3.61887 17.2248 3.0046 15.6837 3Z\",\"fill\":\"#676767\"}],[\"$\",\"path\",null,{\"d\":\"M17.0294 6.35297C16.8083 6.35297 16.5923 6.41852 16.4085 6.54132C16.2247 6.66413 16.0814 6.83868 15.9968 7.04291C15.9122 7.24713 15.8901 7.47185 15.9332 7.68865C15.9763 7.90546 16.0828 8.1046 16.2391 8.26091C16.3954 8.41721 16.5945 8.52366 16.8113 8.56678C17.0282 8.60991 17.2529 8.58778 17.4571 8.50318C17.6613 8.41859 17.8359 8.27534 17.9587 8.09154C18.0815 7.90775 18.147 7.69166 18.147 7.47061C18.147 7.32384 18.1181 7.17851 18.062 7.04291C18.0058 6.90731 17.9235 6.7841 17.8197 6.68032C17.7159 6.57653 17.5927 6.49421 17.4571 6.43804C17.3215 6.38187 17.1762 6.35297 17.0294 6.35297Z\",\"fill\":\"#676767\"}],[\"$\",\"path\",null,{\"d\":\"$47\",\"fill\":\"#676767\"}]]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://www.youtube.com/coindesk\",\"aria-label\":\"YouTube\",\"data-position\":\"YouTube\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"24\",\"height\":\"24\",\"className\":\"$undefined\",\"fill\":\"none\",\"viewBox\":\"0 0 24 19\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[\"$\",\"path\",null,{\"d\":\"M23.4986 5.65459C23.2227 4.60964 22.4095 3.78682 21.3768 3.50753C19.505 3 12 3 12 3C12 3 4.49499 3 2.62318 3.50753C1.59071 3.78682 0.777377 4.60964 0.501423 5.65459C0 7.5485 0 11.5001 0 11.5001C0 11.5001 0 15.4517 0.501423 17.3454C0.777377 18.3904 1.59071 19.2134 2.62318 19.4927C4.49499 20 12 20 12 20C12 20 19.505 20 21.3768 19.4927C22.4095 19.2134 23.2227 18.3904 23.4986 17.3454C24 15.4517 24 11.5001 24 11.5001C24 11.5001 24 7.5485 23.4986 5.65459ZM9.59988 15.143V7.85719L15.8352 11.5001L9.59988 15.143Z\",\"fill\":\"#676767\"}]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://www.tiktok.com/@coindesk/\",\"aria-label\":\"TikTok\",\"data-position\":\"TikTok\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"24\",\"height\":\"24\",\"className\":\"$undefined\",\"fill\":\"none\",\"viewBox\":\"0 0 24 24\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[\"$\",\"path\",null,{\"d\":\"M9.78998 17.745C11.2577 17.745 12.4475 16.61 12.4475 14.8745V2H15.6346C15.4559 4.34796 17.6168 6.61603 20 6.56415V9.80125C17.9619 9.80125 16.2288 8.87041 15.6256 8.35382V14.8745C15.6256 "])
    </script>
    <script>
        self.__next_f.push([1,"17.745 13.5349 21 9.78998 21C6.04501 21 4 17.745 4 14.8745C4 10.8231 7.96936 8.47349 10.5984 9.04778V12.3449C10.4661 12.2944 10.125 12.2197 9.83453 12.2197C8.35462 12.1608 7.13245 13.4572 7.13245 14.8745C7.13245 16.4598 8.32227 17.745 9.78998 17.745Z\",\"fill\":\"#676767\"}]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://discord.com/invite/tRuUMkkQd9\",\"aria-label\":\"Discord\",\"data-position\":\"Discord\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"24\",\"height\":\"24\",\"className\":\"$undefined\",\"fill\":\"none\",\"viewBox\":\"0 0 24 24\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[\"$\",\"path\",null,{\"d\":\"$48\",\"fill\":\"#676767\"}]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://t.me/CoinDeskGlobal\",\"aria-label\":\"Telegram\",\"data-position\":\"Telegram\",\"className\":\"lg:pl-4 xl:pl-6\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"width\":\"24\",\"height\":\"24\",\"className\":\"$undefined\",\"viewBox\":\"0 0 27 22\",\"fill\":\"none\",\"xmlns\":\"http://www.w3.org/2000/svg\",\"children\":[\"$\",\"path\",null,{\"d\":\"M2.5 21L23.5 12L2.5 3V10L17.5 12L2.5 14V21Z\",\"fill\":\"#676767\"}]}]}]]}]}]}]}],[\"$\",\"div\",null,{\"className\":\"order-2 flex flex-col justify-start md:col-span-4 md:justify-end lg:order-3 lg:col-span-4 xl:col-span-4\",\"children\":[\"$\",\"div\",null,{\"className\":\"flex w-full flex-col\",\"children\":[\"$\",\"div\",null,{\"className\":\"flex flex-row items-center justify-start gap-4 md:justify-end\",\"children\":[[\"$\",\"$L42\",null,{\"href\":\"https://apps.apple.com/us/app/coindesk-crypto-bitcoin-news/id6502816903\",\"aria-label\":\"AppStore\",\"data-position\":\"AppStore\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"xmlns\":\"http://www.w3.org/2000/svg\",\"width\":\"120\",\"height\":\"40\",\"viewBox\":\"0 0 120 40\",\"fill\":\"none\",\"children\":[[\"$\",\"g\",null,{\"clipPath\":\"url(#clip0_211_554)\",\"children\":[[\"$\",\"path\",null,{\"d\":\"$49\",\"fill\":\"#A6A6A6\"}],[\"$\",\"path\",null,{\"d\":\"$4a\",\"fill\":\"black\"}],[\"$\",\"path\",null,{\"d\":\"M25.1049 20.3006C25.1157 19.4659 25.3374 18.6475 25.7494 17.9216C26.1614 17.1956 26.7504 16.5857 27.4615 16.1485C27.0098 15.5034 26.4138 14.9724 25.721 14.5979C25.0282 14.2233 24.2575 14.0155 23.4703 13.9908C21.7911 13.8146 20.1631 14.9957 19.3074 14.9957C18.4352 14.9957 17.1177 14.0083 15.6989 14.0375C14.7813 14.0672 13.8869 14.334 13.103 14.8121C12.3192 15.2901 11.6725 15.9631 11.226 16.7654C9.29201 20.1138 10.7346 25.0349 12.5872 27.7415C13.5141 29.0668 14.5974 30.5473 16.0148 30.4948C17.4019 30.4372 17.9199 29.6103 19.5942 29.6103C21.253 29.6103 21.739 30.4948 23.1852 30.4614C24.6736 30.4372 25.6114 29.1302 26.5058 27.7923C27.1717 26.8479 27.6842 25.8042 28.0242 24.6997C27.1595 24.334 26.4215 23.7218 25.9024 22.9395C25.3833 22.1572 25.1059 21.2394 25.1049 20.3006Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M22.3735 12.2108C23.185 11.2366 23.5848 9.98445 23.488 8.72021C22.2482 8.85044 21.1029 9.44299 20.2804 10.3798C19.8783 10.8375 19.5703 11.3699 19.3741 11.9467C19.1778 12.5235 19.0972 13.1333 19.1367 13.7412C19.7569 13.7476 20.3704 13.6132 20.931 13.3481C21.4917 13.083 21.9849 12.6942 22.3735 12.2108Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M42.6382 27.1396H37.9048L36.7681 30.496H34.7632L39.2466 18.078H41.3296L45.813 30.496H43.7739L42.6382 27.1396ZM38.395 25.5907H42.147L40.2974 20.1435H40.2456L38.395 25.5907Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M55.4956 25.9697C55.4956 28.7832 53.9898 30.5908 51.7173 30.5908C51.1417 30.6209 50.5692 30.4883 50.0654 30.2082C49.5616 29.928 49.1469 29.5117 48.8687 29.0068H48.8257V33.4912H46.9673V21.4423H48.7661V22.9482H48.8003C49.0913 22.4457 49.513 22.0316 50.0206 21.7497C50.5283 21.4679 51.1028 21.3289 51.6831 21.3476C53.9809 21.3476 55.4956 23.164 55.4956 25.9697ZM53.5855 25.9697C53.5855 24.1367 52.6382 22.9316 51.1929 22.9316C49.773 22.9316 48.8179 24.1621 48.8179 25.9697C48.8179 27.7939 49.773 29.0156 51.1929 29.0156C52.6382 29.0156 53.5855 27.8193 53.5855 25.9697Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M65.4605 25.9697C65.4605 28.7832 63.9546 30.5908 61.6822 30.5908C61.1065 30.6209 60.534 30.4883 60.0302 30.2081C59.5264 29.928 59.1117 29.5117 58.8335 29.0068H58.7905V33.4912H56.9321V21.4423H58.7309V22.9482H58.7651C59.0561 22.4457 59.4778 22.03"])
    </script>
    <script>
        self.__next_f.push([1,"15 59.9854 21.7497C60.4931 21.4679 61.0676 21.3289 61.6479 21.3476C63.9458 21.3476 65.4605 23.164 65.4605 25.9697ZM63.5503 25.9697C63.5503 24.1367 62.603 22.9316 61.1577 22.9316C59.7378 22.9316 58.7827 24.1621 58.7827 25.9697C58.7827 27.7939 59.7378 29.0156 61.1577 29.0156C62.6031 29.0156 63.5503 27.8193 63.5503 25.9697Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M72.0464 27.0361C72.1841 28.2675 73.3804 29.0761 75.0152 29.0761C76.5816 29.0761 77.7085 28.2675 77.7085 27.1571C77.7085 26.1932 77.0288 25.6161 75.4195 25.2206L73.8101 24.8329C71.5298 24.2821 70.4712 23.2157 70.4712 21.4852C70.4712 19.3427 72.3384 17.871 74.9898 17.871C77.6138 17.871 79.4126 19.3427 79.4732 21.4852H77.5972C77.4849 20.246 76.4605 19.4979 74.9634 19.4979C73.4663 19.4979 72.4419 20.2548 72.4419 21.3563C72.4419 22.2343 73.0962 22.7509 74.6968 23.1463L76.0649 23.4823C78.6128 24.0848 79.6714 25.1083 79.6714 26.9247C79.6714 29.2479 77.8208 30.703 74.8774 30.703C72.1235 30.703 70.2642 29.2821 70.144 27.036L72.0464 27.0361Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M83.6821 19.2997V21.4423H85.4038V22.9139H83.6821V27.9052C83.6821 28.6805 84.0269 29.0419 84.7837 29.0419C84.9881 29.0383 85.1921 29.024 85.395 28.9989V30.4618C85.0547 30.5253 84.7089 30.5541 84.3628 30.5477C82.5298 30.5477 81.8149 29.8592 81.8149 28.1034V22.9139H80.4985V21.4423H81.8149V19.2997H83.6821Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M86.4009 25.9696C86.4009 23.121 88.0786 21.3309 90.6948 21.3309C93.3198 21.3309 94.9897 23.1209 94.9897 25.9696C94.9897 28.8261 93.3286 30.6083 90.6948 30.6083C88.062 30.6083 86.4009 28.826 86.4009 25.9696ZM93.0962 25.9696C93.0962 24.0155 92.2007 22.8622 90.6948 22.8622C89.189 22.8622 88.2944 24.0243 88.2944 25.9696C88.2944 27.9315 89.189 29.0761 90.6948 29.0761C92.2007 29.0761 93.0962 27.9315 93.0962 25.9696Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M96.522 21.4423H98.2944V22.9833H98.3374C98.4574 22.502 98.7393 22.0766 99.1359 21.7788C99.5325 21.4809 100.02 21.3286 100.515 21.3475C100.729 21.3468 100.943 21.37 101.152 21.4169V23.1551C100.882 23.0725 100.599 23.0346 100.317 23.0428C100.047 23.0319 99.7778 23.0795 99.5279 23.1824C99.2781 23.2853 99.0535 23.441 98.8695 23.6389C98.6855 23.8368 98.5465 24.0721 98.4621 24.3288C98.3777 24.5855 98.3498 24.8574 98.3804 25.1258V30.496H96.522L96.522 21.4423Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M109.72 27.8368C109.47 29.4803 107.87 30.6083 105.822 30.6083C103.188 30.6083 101.553 28.8436 101.553 26.0126C101.553 23.1727 103.197 21.3309 105.744 21.3309C108.249 21.3309 109.824 23.0516 109.824 25.7968V26.4335H103.429V26.5458C103.4 26.879 103.441 27.2146 103.552 27.5305C103.662 27.8463 103.838 28.1351 104.068 28.3777C104.299 28.6202 104.578 28.811 104.888 28.9373C105.197 29.0636 105.53 29.1225 105.865 29.1102C106.304 29.1514 106.745 29.0497 107.121 28.8202C107.498 28.5908 107.791 28.2459 107.956 27.8368L109.72 27.8368ZM103.438 25.1346H107.964C107.981 24.835 107.936 24.5352 107.831 24.254C107.726 23.9728 107.565 23.7163 107.356 23.5005C107.148 23.2847 106.897 23.1144 106.619 23.0002C106.342 22.886 106.044 22.8303 105.744 22.8368C105.441 22.835 105.141 22.8931 104.861 23.0079C104.581 23.1226 104.326 23.2917 104.112 23.5053C103.898 23.7189 103.728 23.9729 103.612 24.2526C103.496 24.5322 103.437 24.832 103.438 25.1346Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M38.1621 8.73101C38.5517 8.70305 38.9427 8.76191 39.3068 8.90335C39.6709 9.04478 39.9991 9.26526 40.2677 9.54889C40.5363 9.83251 40.7386 10.1722 40.86 10.5435C40.9814 10.9148 41.0188 11.3083 40.9697 11.6959C40.9697 13.6021 39.9395 14.6979 38.1621 14.6979H36.0068V8.73101H38.1621ZM36.9336 13.854H38.0586C38.337 13.8707 38.6156 13.825 38.8741 13.7204C39.1327 13.6158 39.3646 13.4548 39.5531 13.2493C39.7416 13.0437 39.8819 12.7987 39.9638 12.5321C40.0456 12.2655 40.067 11.9839 40.0264 11.708C40.0641 11.4332 40.0405 11.1534 39.9574 10.8887C39.8743 10.6241 39.7336 10.3811 39.5456 10.1771C39.3575 9.97322 39.1267 9.81341 38.8696 9.70917C38.6125 9.60494 38.3356 9.55885 38.0586 9.57422H36.9336V13.854Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M42.0164 12.4444C41.9881 12.1485 42.02"])
    </script>
    <script>
        self.__next_f.push([1,"19 11.8499 42.1158 11.5679C42.2096 11.2858 42.3614 11.0264 42.5613 10.8065C42.7613 10.5865 43.005 10.4107 43.2768 10.2904C43.5487 10.1702 43.8427 10.108 44.1399 10.108C44.4372 10.108 44.7312 10.1702 45.003 10.2904C45.2749 10.4107 45.5186 10.5865 45.7185 10.8065C45.9185 11.0264 46.0702 11.2858 46.1641 11.5679C46.2579 11.8499 46.2918 12.1485 46.2635 12.4444C46.2923 12.7406 46.2589 13.0396 46.1653 13.3221C46.0717 13.6047 45.92 13.8645 45.72 14.0849C45.52 14.3053 45.2761 14.4814 45.004 14.602C44.7319 14.7225 44.4376 14.7848 44.1399 14.7848C43.8423 14.7848 43.548 14.7225 43.2758 14.602C43.0037 14.4814 42.7598 14.3053 42.5598 14.0849C42.3598 13.8645 42.2082 13.6047 42.1146 13.3221C42.021 13.0396 41.9875 12.7406 42.0164 12.4444ZM45.3494 12.4444C45.3494 11.4683 44.9109 10.8975 44.1414 10.8975C43.3689 10.8975 42.9344 11.4683 42.9344 12.4444C42.9344 13.4283 43.369 13.9947 44.1414 13.9947C44.9109 13.9947 45.3494 13.4244 45.3494 12.4444Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M51.9092 14.6978H50.9873L50.0566 11.3813H49.9863L49.0596 14.6978H48.1465L46.9053 10.1948H47.8066L48.6133 13.6308H48.6797L49.6055 10.1948H50.458L51.3838 13.6308H51.4541L52.2568 10.1948H53.1455L51.9092 14.6978Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M54.1895 10.1949H55.0449V10.9102H55.1113C55.224 10.6533 55.414 10.4379 55.6549 10.2941C55.8957 10.1503 56.1755 10.0852 56.4551 10.1079C56.6742 10.0915 56.8942 10.1245 57.0988 10.2046C57.3034 10.2847 57.4873 10.4098 57.637 10.5707C57.7867 10.7315 57.8983 10.924 57.9635 11.1338C58.0287 11.3436 58.0458 11.5654 58.0137 11.7827V14.6977H57.125V12.0059C57.125 11.2823 56.8106 10.9224 56.1533 10.9224C56.0046 10.9155 55.8561 10.9408 55.718 10.9966C55.58 11.0525 55.4556 11.1375 55.3535 11.2459C55.2514 11.3543 55.1739 11.4834 55.1263 11.6246C55.0788 11.7657 55.0624 11.9154 55.0781 12.0635V14.6978H54.1895L54.1895 10.1949Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M59.4297 8.43701H60.3184V14.6978H59.4297V8.43701Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M61.5535 12.4444C61.5252 12.1484 61.5591 11.8499 61.6529 11.5678C61.7468 11.2857 61.8986 11.0263 62.0985 10.8064C62.2985 10.5864 62.5422 10.4106 62.8141 10.2903C63.086 10.17 63.38 10.1079 63.6773 10.1079C63.9745 10.1079 64.2686 10.17 64.5404 10.2903C64.8123 10.4106 65.056 10.5864 65.256 10.8064C65.4559 11.0263 65.6077 11.2857 65.7016 11.5678C65.7954 11.8499 65.8293 12.1484 65.801 12.4444C65.8298 12.7406 65.7964 13.0396 65.7027 13.3221C65.6091 13.6046 65.4574 13.8645 65.2574 14.0849C65.0574 14.3053 64.8135 14.4814 64.5414 14.6019C64.2692 14.7225 63.9749 14.7847 63.6773 14.7847C63.3796 14.7847 63.0853 14.7225 62.8132 14.6019C62.541 14.4814 62.2971 14.3053 62.0971 14.0849C61.8971 13.8645 61.7454 13.6046 61.6518 13.3221C61.5581 13.0396 61.5247 12.7406 61.5535 12.4444ZM64.8865 12.4444C64.8865 11.4683 64.448 10.8975 63.6785 10.8975C62.906 10.8975 62.4715 11.4683 62.4715 12.4444C62.4715 13.4283 62.906 13.9947 63.6785 13.9947C64.448 13.9947 64.8865 13.4244 64.8865 12.4444Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M66.7368 13.4243C66.7368 12.6138 67.3403 12.1465 68.4116 12.0801L69.6313 12.0098V11.6211C69.6313 11.1455 69.3169 10.877 68.7095 10.877C68.2134 10.877 67.8696 11.0591 67.771 11.3774H66.9106C67.0015 10.604 67.729 10.1079 68.7505 10.1079C69.8794 10.1079 70.5161 10.6699 70.5161 11.6211V14.6978H69.6606V14.0649H69.5903C69.4476 14.2919 69.2472 14.477 69.0096 14.6012C68.772 14.7254 68.5056 14.7843 68.2378 14.7719C68.0488 14.7916 67.8577 14.7714 67.6769 14.7127C67.4962 14.654 67.3297 14.5581 67.1883 14.4311C67.0469 14.3042 66.9337 14.149 66.8559 13.9756C66.7781 13.8021 66.7376 13.6144 66.7368 13.4243ZM69.6313 13.0395V12.6631L68.5317 12.7334C67.9116 12.7749 67.6304 12.9858 67.6304 13.3828C67.6304 13.7881 67.9819 14.0239 68.4654 14.0239C68.607 14.0382 68.7501 14.0239 68.8861 13.9819C69.0221 13.9398 69.1482 13.8707 69.257 13.7789C69.3658 13.6871 69.455 13.5743 69.5193 13.4473C69.5836 13.3202 69.6217 13.1816 69.6313 13.0395Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M71.6841 12.4444C71.6841 11.0215 72.4155 10.1201 73.5532 10.1201C73.8346 10.1072 74.1139 10.1746 74.3585 10.3145C74.603 10.4544 "])
    </script>
    <script>
        self.__next_f.push([1,"74.8026 10.661 74.9341 10.9101H75.0005V8.43701H75.8892V14.6978H75.0376V13.9863H74.9673C74.8257 14.2338 74.6191 14.4378 74.3698 14.5763C74.1206 14.7148 73.8382 14.7825 73.5532 14.772C72.4077 14.772 71.6841 13.8706 71.6841 12.4444ZM72.6021 12.4444C72.6021 13.3994 73.0523 13.9741 73.8052 13.9741C74.5542 13.9741 75.0171 13.3911 75.0171 12.4483C75.0171 11.5098 74.5494 10.9185 73.8052 10.9185C73.0571 10.9185 72.6021 11.4971 72.6021 12.4444Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M79.5657 12.4444C79.5374 12.1485 79.5712 11.8499 79.6651 11.5679C79.7589 11.2858 79.9107 11.0264 80.1106 10.8065C80.3106 10.5865 80.5543 10.4107 80.8261 10.2904C81.098 10.1702 81.392 10.108 81.6892 10.108C81.9865 10.108 82.2805 10.1702 82.5524 10.2904C82.8242 10.4107 83.0679 10.5865 83.2679 10.8065C83.4678 11.0264 83.6196 11.2858 83.7134 11.5679C83.8072 11.8499 83.8411 12.1485 83.8128 12.4444C83.8416 12.7406 83.8082 13.0396 83.7146 13.3221C83.621 13.6047 83.4693 13.8645 83.2693 14.0849C83.0693 14.3053 82.8254 14.4814 82.5533 14.602C82.2812 14.7225 81.9869 14.7848 81.6892 14.7848C81.3916 14.7848 81.0973 14.7225 80.8252 14.602C80.553 14.4814 80.3091 14.3053 80.1092 14.0849C79.9092 13.8645 79.7575 13.6047 79.6639 13.3221C79.5703 13.0396 79.5369 12.7406 79.5657 12.4444ZM82.8987 12.4444C82.8987 11.4683 82.4602 10.8975 81.6907 10.8975C80.9182 10.8975 80.4837 11.4683 80.4837 12.4444C80.4837 13.4283 80.9183 13.9947 81.6907 13.9947C82.4602 13.9947 82.8987 13.4244 82.8987 12.4444Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M85.0054 10.1949H85.8608V10.9102H85.9273C86.0399 10.6533 86.2299 10.4379 86.4708 10.2941C86.7117 10.1503 86.9914 10.0852 87.271 10.1079C87.4901 10.0915 87.7101 10.1245 87.9147 10.2046C88.1193 10.2847 88.3033 10.4098 88.4529 10.5707C88.6026 10.7315 88.7142 10.924 88.7794 11.1338C88.8446 11.3436 88.8617 11.5654 88.8296 11.7827V14.6977H87.9409V12.0059C87.9409 11.2823 87.6265 10.9224 86.9692 10.9224C86.8205 10.9155 86.672 10.9408 86.5339 10.9966C86.3959 11.0525 86.2715 11.1375 86.1694 11.2459C86.0673 11.3543 85.9898 11.4834 85.9423 11.6246C85.8947 11.7657 85.8783 11.9154 85.894 12.0635V14.6978H85.0054V10.1949Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M93.8511 9.07373V10.2153H94.8267V10.9639H93.8511V13.2793C93.8511 13.751 94.0454 13.9575 94.4878 13.9575C94.601 13.9572 94.7142 13.9503 94.8267 13.937V14.6772C94.6671 14.7058 94.5054 14.721 94.3433 14.7226C93.355 14.7226 92.9614 14.375 92.9614 13.5068V10.9638H92.2466V10.2153H92.9614V9.07373H93.8511Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M96.0405 8.43701H96.9214V10.9185H96.9917C97.1098 10.6591 97.305 10.4425 97.5507 10.2982C97.7964 10.1539 98.0807 10.0888 98.3647 10.1118C98.5827 10.1 98.8005 10.1364 99.0028 10.2184C99.2051 10.3004 99.3868 10.4261 99.5349 10.5864C99.683 10.7468 99.7939 10.9378 99.8597 11.146C99.9255 11.3541 99.9445 11.5742 99.9155 11.7905V14.6978H99.0259V12.0098C99.0259 11.2905 98.6909 10.9263 98.063 10.9263C97.9103 10.9137 97.7567 10.9347 97.6129 10.9878C97.4691 11.0408 97.3387 11.1247 97.2307 11.2334C97.1227 11.3421 97.0397 11.4732 96.9877 11.6173C96.9356 11.7614 96.9157 11.9152 96.9292 12.0679V14.6977H96.0406L96.0405 8.43701Z\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"$4b\",\"fill\":\"white\"}]]}],[\"$\",\"defs\",null,{\"children\":[\"$\",\"clipPath\",null,{\"id\":\"clip0_211_554\",\"children\":[\"$\",\"rect\",null,{\"width\":\"120\",\"height\":\"40\",\"fill\":\"white\",\"transform\":\"translate(0.335938)\"}]}]}]]}]}],[\"$\",\"$L42\",null,{\"href\":\"https://play.google.com/store/apps/details?id=com.coindesk.mobile\",\"aria-label\":\"GooglePlay\",\"data-position\":\"GooglePlay\",\"target\":\"_blank\",\"children\":[\"$\",\"svg\",null,{\"xmlns\":\"http://www.w3.org/2000/svg\",\"width\":\"135\",\"height\":\"40\",\"viewBox\":\"0 0 135 40\",\"fill\":\"none\",\"children\":[[\"$\",\"path\",null,{\"d\":\"M130 0H5C2.23858 0 0 2.23858 0 5V35C0 37.7614 2.23858 40 5 40H130C132.761 40 135 37.7614 135 35V5C135 2.23858 132.761 0 130 0Z\",\"fill\":\"black\"}],[\"$\",\"path\",null,{\"d\":\"M130 0.8C132.32 0.8 134.2 2.68 134.2 5V35C134.2 37.32 132.32 39.2 130 39.2H5C2.68 39.2 0.8 37.32 0.8 35V5C0.8 2.68 2.68 0.8 5 0.8H130ZM130 0H5C2.25 0 0 2.25 0 5V35C0 37.75 2.25 40 5 40H130C132.75 40 135 37.75 135 35V5C13"])
    </script>
    <script>
        self.__next_f.push([1,"5 2.25 132.75 0 130 0Z\",\"fill\":\"#A6A6A6\"}],[\"$\",\"path\",null,{\"d\":\"M47.4201 10.24C47.4201 11.08 47.1701 11.75 46.6701 12.24C46.1101 12.83 45.3701 13.13 44.4701 13.13C43.5701 13.13 42.8701 12.83 42.2601 12.23C41.6501 11.63 41.3501 10.88 41.3501 9.99999C41.3501 9.11999 41.6501 8.36999 42.2601 7.76999C42.8701 7.16999 43.6001 6.87 44.4701 6.87C44.9001 6.87 45.3101 6.95 45.7001 7.12C46.0901 7.29 46.4001 7.51 46.6401 7.79L46.1101 8.31999C45.7101 7.84999 45.1701 7.60999 44.4701 7.60999C43.8401 7.60999 43.2901 7.82999 42.8301 8.27999C42.3701 8.72 42.1401 9.29999 42.1401 10.01C42.1401 10.72 42.3701 11.3 42.8301 11.74C43.2901 12.18 43.8401 12.41 44.4701 12.41C45.1401 12.41 45.7001 12.19 46.1501 11.74C46.4401 11.45 46.6101 11.04 46.6501 10.52H44.4701V9.79999H47.3801C47.4101 9.95999 47.4201 10.11 47.4201 10.25V10.24Z\",\"fill\":\"white\",\"stroke\":\"white\",\"strokeWidth\":\"0.2\",\"strokeMiterlimit\":\"10\"}],[\"$\",\"path\",null,{\"d\":\"M52.0303 7.74H49.3003V9.64H51.7603V10.36H49.3003V12.26H52.0303V13H48.5303V7H52.0303V7.74Z\",\"fill\":\"white\",\"stroke\":\"white\",\"strokeWidth\":\"0.2\",\"strokeMiterlimit\":\"10\"}],[\"$\",\"path\",null,{\"d\":\"M55.2801 13H54.5101V7.74H52.8301V7H56.9501V7.74H55.2701V13H55.2801Z\",\"fill\":\"white\",\"stroke\":\"white\",\"strokeWidth\":\"0.2\",\"strokeMiterlimit\":\"10\"}],[\"$\",\"path\",null,{\"d\":\"M59.9399 13V7H60.7099V13H59.9399Z\",\"fill\":\"white\",\"stroke\":\"white\",\"strokeWidth\":\"0.2\",\"strokeMiterlimit\":\"10\"}],[\"$\",\"path\",null,{\"d\":\"M64.1302 13H63.3602V7.74H61.6802V7H65.8002V7.74H64.1202V13H64.1302Z\",\"fill\":\"white\",\"stroke\":\"white\",\"strokeWidth\":\"0.2\",\"strokeMiterlimit\":\"10\"}],[\"$\",\"path\",null,{\"d\":\"M73.6101 12.22C73.0201 12.83 72.2901 13.13 71.4101 13.13C70.5301 13.13 69.8001 12.83 69.2101 12.22C68.6201 11.61 68.3301 10.87 68.3301 9.99999C68.3301 9.12999 68.6201 8.37999 69.2101 7.77999C69.8001 7.16999 70.5301 6.87 71.4101 6.87C72.2901 6.87 73.0101 7.16999 73.6101 7.77999C74.2001 8.38999 74.5001 9.12999 74.5001 9.99999C74.5001 10.87 74.2001 11.62 73.6201 12.22H73.6101ZM69.7801 11.72C70.2201 12.17 70.7701 12.39 71.4101 12.39C72.0501 12.39 72.6001 12.17 73.0401 11.72C73.4801 11.27 73.7101 10.7 73.7101 9.99999C73.7101 9.29999 73.4901 8.73 73.0401 8.27999C72.6001 7.82999 72.0501 7.60999 71.4101 7.60999C70.7701 7.60999 70.2201 7.82999 69.7801 8.27999C69.3401 8.73 69.1101 9.29999 69.1101 9.99999C69.1101 10.7 69.3301 11.27 69.7801 11.72Z\",\"fill\":\"white\",\"stroke\":\"white\",\"strokeWidth\":\"0.2\",\"strokeMiterlimit\":\"10\"}],[\"$\",\"path\",null,{\"d\":\"M75.5801 13V7H76.5201L79.4401 11.67H79.4701L79.4401 10.51V7H80.2101V13H79.4101L76.3601 8.11H76.3301L76.3601 9.27V13.01H75.5901L75.5801 13Z\",\"fill\":\"white\",\"stroke\":\"white\",\"strokeWidth\":\"0.2\",\"strokeMiterlimit\":\"10\"}],[\"$\",\"path\",null,{\"d\":\"$4c\",\"fill\":\"white\"}],[\"$\",\"path\",null,{\"d\":\"M20.7198 19.42L10.0698 30.72C10.3998 31.95 11.5198 32.85 12.8498 32.85C13.3798 32.85 13.8798 32.71 14.3098 32.45L14.3398 32.43L26.3198 25.52L20.7098 19.41L20.7198 19.42Z\",\"fill\":\"#EA4335\"}],[\"$\",\"path\",null,{\"d\":\"M31.4895 17.5H31.4795L26.3095 14.49L20.4795 19.68L26.3295 25.53L31.4795 22.56C32.3795 22.07 32.9895 21.12 32.9895 20.03C32.9895 18.94 32.3895 17.99 31.4895 17.51V17.5Z\",\"fill\":\"#FBBC04\"}],[\"$\",\"path\",null,{\"d\":\"M10.0697 9.28003C10.0097 9.52003 9.96973 9.76003 9.96973 10.02V29.99C9.96973 30.25 9.99973 30.49 10.0697 30.73L21.0797 19.72L10.0697 9.28003Z\",\"fill\":\"#4285F4\"}],[\"$\",\"path\",null,{\"d\":\"M20.7998 20L26.3098 14.49L14.3398 7.55001C13.9098 7.29001 13.3998 7.14001 12.8498 7.14001C11.5198 7.14001 10.3998 8.05002 10.0698 9.27002L20.7998 19.99V20Z\",\"fill\":\"#34A853\"}]]}]}]]}]}]}]]}]]}]}]}],null]}],[\"$\",\"$L4d\",null,{}],[\"$\",\"$L4e\",null,{}]]}]]}]}]]}]\n4f:I[63530,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe"])
    </script>
    <script>
        self.__next_f.push([1,"4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"PriceTicker\"]\n50:I[16076,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"HamburgerMenu\"]\n51:I[51509,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"NavLink\"]\n52:I[39850,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmC"])
    </script>
    <script>
        self.__next_f.push([1,"TDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"LanguageSwitcher\"]\n3d:[\"$\",\"div\",null,{\"className\":\"relative box-content flex h-9 items-center justify-between overflow-x-hidden\",\"children\":[[\"$\",\"$L4f\",null,{\"prices\":[{\"iso\":\"BTC\",\"href\":\"/price/bitcoin\",\"initial\":{\"price\":84215.2522413005,\"change\":-1.7915288118093502}},{\"iso\":\"ETH\",\"href\":\"/price/ethereum\",\"initial\":{\"price\":1974.71559297809,\"change\":-1.7493987109229499}},{\"iso\":\"USDT\",\"href\":\"/price/tether\",\"initial\":{\"price\":0.999688880214219,\"change\":-0.0450094306077971}},{\"iso\":\"XRP\",\"href\":\"/price/xrp\",\"initial\":{\"price\":2.41078861969634,\"change\":-1.66580214082546}},{\"iso\":\"BNB\",\"href\":\"/price/binance-coin\",\"initial\":{\"price\":630.662891628422,\"change\":0.767189707478989}},{\"iso\":\"SOL\",\"href\":\"/price/solana\",\"initial\":{\"price\":128.156087430383,\"change\":-4.844011329800639}},{\"iso\":\"USDC\",\"href\":\"/price/usd-coin\",\"initial\":{\"price\":0.999999869509804,\"change\":-0.00850518950888899}},{\"iso\":\"ADA\",\"href\":\"/price/cardano\",\"initial\":{\"price\":0.719445865195478,\"change\":-1.48154867702509}},{\"iso\":\"DOGE\",\"href\":\"/price/dogecoin\",\"initial\":{\"price\":0.169230495614341,\"change\":-2.9631925256550398}},{\"iso\":\"TRX\",\"href\":\"/price/tron\",\"initial\":{\"price\":0.231642143237995,\"change\":0.446927693102639}},{\"iso\":\"WBTC\",\"href\":\"/price/wrapped-bitcoin\",\"initial\":{\"price\":84083.9181932981,\"change\":-1.79321635246882}},{\"iso\":\"LINK\",\"href\":\"/price/chainlink\",\"initial\":{\"price\":14.2182081330868,\"change\":-3.25882368519428}},{\"iso\":\"TON\",\"href\":\"/price/toncoin\",\"initial\":{\"price\":3.72218374232988,\"change\":1.8919006859259802}},{\"iso\":\"LEO\",\"href\":\"/price/unus-sed-leo\",\"initial\":{\"price\":9.74418299808647,\"change\":-0.809005575405245}},{\"iso\":\"XLM\",\"href\":\"/price/xlm\",\"initial\":{\"price\":0.281515783406136,\"change\":-1.11088849803935}},{\"iso\":\"HBAR\",\"href\":\"/price/hbar\",\"initial\":{\"price\":0.186641246131732,\"change\":-4.6043374337543606}},{\"iso\":\"AVAX\",\"href\":\"/price/avax\",\"initial\":{\"price\":18.9824821597686,\"change\":-0.86128124118283}},{\"iso\":\"SHIB\",\"href\":\"/price/shiba-inu\",\"initial\":{\"price\":0.000012917621870477,\"change\":0.252792650449219}},{\"iso\":\"SUI\",\"href\":\"/price/sui\",\"initial\":{\"price\":2.30325873118736,\"change\":-5.5064768351517}},{\"iso\":\"LTC\",\"href\":\"/price/ltc\",\"initial\":{\"price\":93.2833461726077,\"change\":0.686298048236225}}]}],[\"$\",\"div\",null,{\"className\":\"bg-charcoal-25 absolute right-0 z-20 flex h-full flex-row items-center justify-between overflow-hidden pl-2 pr-4 lg:pr-6\",\"children\":[[\"$\",\"span\",null,{\"className\":\"mr-2 text-xs lg:mr-4\",\"children\":\"Ad\"}],[\"$\",\"div\",null,{\"className\":\"inline-block h-[20px] w-[57px]\",\"children\":[\"$\",\"$L1f\",null,{\"adId\":\"ticker\",\"height\":\"20\",\"width\":\"57\",\"targeting\":{\"pos\":\"ticker\",\"adIndex\":\"0\"}}]}]]}]]}]\n3e:[\"$\",\"div\",null,{\"className\":\"relative flex h-[4rem] items-center justify-between border-b border-b-gray-300 p-0 md:p-[1.25rem]\",\"children\":[[\"$\",\"div\",null,{\"className\":\"md:justify-unset flex h-full items-center\",\"children\":[\"$\",\"$1a\",null,{\"fallback\":null,\"children\":[\"$\",\"$L50\",null,{\"useCover\":true,\"nav\":{\"primary\":{\"items\":[{\"url\":\"/\",\"title\":\"News\",\"isOpenInNewTab\":false,\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":null,\"description\":null},{\"description\":null,\"url\":\"/price\",\"title\":\"Prices\",\"isOpenInNewTab\":false,\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":null},{\"isInHamburger\":null,\"dropdown\":[{\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"https://data.coindesk.com/trade-data\",\"title\":\"Trade Data\",\"isOpenInNewTab\":false,\"description\":\"Market-leading trade data co"])
    </script>
    <script>
        self.__next_f.push([1,"vering 300,000 digital asset pairs.\"},{\"url\":\"https://data.coindesk.com/derivatives\",\"title\":\"Derivatives\",\"isOpenInNewTab\":false,\"description\":\"Real-time futures and options data from major exchanges.\",\"isInPrimary\":null,\"isInHamburger\":null},{\"description\":\"Complete L1/L2 order book data covering 99% of the market.\",\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"https://data.coindesk.com/order-book\",\"title\":\"Order Book Data\",\"isOpenInNewTab\":false},{\"isOpenInNewTab\":false,\"description\":\"Key blockchain metrics and trade data across 10 networks.\",\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"https://data.coindesk.com/on-chain-data\",\"title\":\"On-Chain Data\"},{\"title\":\"API\",\"isOpenInNewTab\":false,\"description\":\"Institutional-grade crypto data streamed live from 300+ exchanges.\",\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"https://developers.coindesk.com/documentation\"},{\"url\":\"https://data.coindesk.com/reports\",\"title\":\"Research \u0026 Insights\",\"isOpenInNewTab\":false,\"description\":\"Data-driven analysis of key digital asset trends.\",\"isInPrimary\":null,\"isInHamburger\":null},{\"url\":\"https://data.coindesk.com/data-catalogue\",\"title\":\"Data Catalogue\",\"isOpenInNewTab\":false,\"description\":\"Explore our data solutions and request sample sets.\",\"isInPrimary\":null,\"isInHamburger\":null},{\"url\":\"https://data.coindesk.com/ai-machine-learning\",\"title\":\"AI \u0026 Machine Learning\",\"isOpenInNewTab\":false,\"description\":\"Data to power AI and algorithmic trading models.\",\"isInPrimary\":null,\"isInHamburger\":null}],\"description\":\"Market-leading digital asset data with exceptional depth and clarity.\",\"url\":\"https://data.coindesk.com/\",\"title\":\"Data\",\"isOpenInNewTab\":false,\"isInPrimary\":null},{\"isInHamburger\":null,\"dropdown\":[{\"url\":\"https://indices.coindesk.com/multi-asset-indices\",\"title\":\"Multi-Asset Indices\",\"isOpenInNewTab\":false,\"description\":\"BMR compliant broad-based, dynamic and thematic benchmarks.\",\"isInPrimary\":null,\"isInHamburger\":null},{\"url\":\"https://indices.coindesk.com/reference-rates\",\"title\":\"Reference Rates\",\"isOpenInNewTab\":false,\"description\":\"BMR compliant real-time and settlement rates.\",\"isInPrimary\":null,\"isInHamburger\":null},{\"url\":\"https://indices.coindesk.com/strategies-and-services\",\"title\":\"Strategies and Services\",\"isOpenInNewTab\":false,\"description\":\"Research-driven strategies, plus a full suite of services.\",\"isInPrimary\":null,\"isInHamburger\":null},{\"description\":\"Institutional-grade crypto data streamed live from 300+ exchanges.\",\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"https://developers.coindesk.com/documentation\",\"title\":\"API\",\"isOpenInNewTab\":false},{\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"https://indices.coindesk.com/insights-and-announcements\",\"title\":\"Insights \u0026 Announcements\",\"isOpenInNewTab\":false,\"description\":\"Stay informed through our newsletters and market updates.\"},{\"description\":\"Index methodologies, policies, announcements and updates.\",\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"https://indices.coindesk.com/documentation-and-governance\",\"title\":\"Documentation \u0026 Governance\",\"isOpenInNewTab\":false}],\"description\":\"A trusted partner since 2014. BMR compliant. \",\"url\":\"https://indices.coindesk.com/\",\"title\":\"Indices\",\"isOpenInNewTab\":false,\"isInPrimary\":null},{\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":null,\"description\":null,\"url\":\"/reports\",\"title\":\"Research\",\"isOpenInNewTab\":false},{\"title\":\"Consensus\",\"isOpenInNewTab\":false,\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":null,\"description\":null,\"url\":\"https://consensus.coindesk.com/\"},{\"url\":\"https://www.coindesk.com/sponsored-content\",\"title\":\"Sponsored\",\"isOpenInNewTab\":false,\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":null,\"description\":null}]},\"secondary\":{\"items\":[{\"isInHamburger\":null,\"dropdown\":[{\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/videos/coindesk-daily\",\"title\":\"CoinDesk Daily\"},{\"url\":\"/videos/shorts\",\"title\":\"Shorts\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null},{\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/videos/ed"])
    </script>
    <script>
        self.__next_f.push([1,"itors-picks\",\"title\":\"Editor's Picks\",\"isOpenInNewTab\":false,\"description\":null}],\"description\":null,\"url\":\"/videos\",\"title\":\"Videos\",\"isOpenInNewTab\":false,\"isInPrimary\":null},{\"url\":\"/podcasts\",\"title\":\"Podcasts\",\"isOpenInNewTab\":false,\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":[{\"url\":\"/podcasts/coindesk-podcast-network\",\"title\":\"CoinDesk Podcast Network\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null},{\"url\":\"/podcasts/markets-daily\",\"title\":\"Markets Daily\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null},{\"url\":\"/podcasts/generation-c\",\"title\":\"Gen C\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null},{\"url\":\"/podcasts/unchained\",\"title\":\"Unchained with Laura Shin\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null},{\"url\":\"/podcasts/coindesk-podcast-network\",\"title\":\"The Mining Pod\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null}],\"description\":null},{\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":[{\"description\":\"The biggest crypto news and ideas of the day.\",\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/newsletters/the-node\",\"title\":\"The Node\",\"isOpenInNewTab\":false},{\"url\":\"/newsletters/daybook-us\",\"title\":\"Crypto Daybook Americas\",\"isOpenInNewTab\":false,\"description\":\"Market analysis for crypto traders and investors.\",\"isInPrimary\":null,\"isInHamburger\":null},{\"isInHamburger\":null,\"url\":\"/newsletters/state-of-crypto\",\"title\":\"State of Crypto\",\"isOpenInNewTab\":false,\"description\":\"Examining the intersection of cryptocurrency and government.\",\"isInPrimary\":null},{\"title\":\"Crypto Long \u0026 Short\",\"isOpenInNewTab\":false,\"description\":\" Insights, news and analysis delivered weekly.\",\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/newsletters/crypto-long-short\"},{\"isInHamburger\":null,\"url\":\"/newsletters/crypto-for-advisors\",\"title\":\"Crypto for Advisors\",\"isOpenInNewTab\":false,\"description\":\"Defining crypto, digital assets and the future of finance for financial advisors.\",\"isInPrimary\":null}],\"description\":null,\"url\":\"/newsletters\",\"title\":\"Newsletters\",\"isOpenInNewTab\":false},{\"isOpenInNewTab\":false,\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":null,\"description\":null,\"url\":\"https://data.coindesk.com/reports\",\"title\":\"Research\"},{\"dropdown\":[{\"isInHamburger\":null,\"url\":\"https://consensus2025.coindesk.com/\",\"title\":\"Consensus 2025\",\"isOpenInNewTab\":false,\"description\":\"May 14-16 in Toronto, Canada\",\"isInPrimary\":null},{\"url\":\"https://policy-regulation.coindesk.com/\",\"title\":\"Policy \u0026 Regulation Conference\",\"isOpenInNewTab\":false,\"description\":\"September 10 in Washington, DC\",\"isInPrimary\":null,\"isInHamburger\":null}],\"description\":null,\"url\":\"https://events.coindesk.com/\",\"title\":\"Webinars \u0026 Events\",\"isOpenInNewTab\":true,\"isInPrimary\":null,\"isInHamburger\":null},{\"isInHamburger\":null,\"dropdown\":[{\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/sponsored-content\",\"title\":\"Thought Leadership\",\"isOpenInNewTab\":false},{\"url\":\"/press-release\",\"title\":\"Press Releases\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null},{\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/sponsored-content/hub/coinw\",\"title\":\"CoinW\",\"isOpenInNewTab\":false},{\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/sponsored-content/hub/MEXC\",\"title\":\"MEXC\"},{\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/sponsored-content/hub/Phemex\",\"title\":\"Phemex\",\"isOpenInNewTab\":false,\"description\":null},{\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/advertise\",\"title\":\"Advertise\",\"isOpenInNewTab\":false,\"description\":null}],\"description\":null,\"url\":\"/sponsored-content\",\"title\":\"Sponsored\",\"isOpenInNewTab\":false,\"isInPrimary\":null},{\"isInPrimary\":null,\"isInHamburger\":null,\"dropdown\":[{\"url\":\"/markets\",\"title\":\"Markets\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null},{\"isInHamburger\":null,\"url\":\"/business\",\"title\":\"Finance\",\"isOpenInNewTab\":fals"])
    </script>
    <script>
        self.__next_f.push([1,"e,\"description\":null,\"isInPrimary\":null},{\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/tech\",\"title\":\"Tech\"},{\"url\":\"/policy\",\"title\":\"Policy\",\"isOpenInNewTab\":false,\"description\":null,\"isInPrimary\":null,\"isInHamburger\":null},{\"isInPrimary\":null,\"isInHamburger\":null,\"url\":\"/focus\",\"title\":\"Focus\",\"isOpenInNewTab\":false,\"description\":null}],\"description\":null,\"url\":\"/\",\"title\":\"News Sections\",\"isOpenInNewTab\":false}]},\"auth\":{\"items\":[{\"url\":null,\"title\":\"Sign In\",\"type\":\"link\",\"isInHamburger\":false},{\"url\":null,\"title\":\"Sign Up\",\"type\":\"btn\",\"isInHamburger\":true}]}}}]}]}],[\"$\",\"div\",null,{\"className\":\"flex h-full items-center\",\"children\":[\"$\",\"$L42\",null,{\"href\":\"/\",\"prefetch\":false,\"className\":\"px-4\",\"children\":[\"$\",\"$L41\",null,{\"className\":\"h-full max-h-[32px] w-[124px] max-w-[124px] sm:w-auto md:w-[169px] md:max-w-[169px]\",\"alt\":\"Logo\",\"src\":{\"src\":\"https://coindesk-next-laep3of2c-coindesk.vercel.app/_next/static/media/coindesk-logo.68661da3.png\",\"height\":128,\"width\":678,\"blurDataURL\":\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAACCAMAAABSSm3fAAAAGFBMVEUAAAAAAAACAgAAAAAAAAAAAAAAAABbSgDtoIGwAAAACHRSTlN0ST2DJlhgS2PJXwUAAAAJcEhZcwAALEsAACxLAaU9lqkAAAAaSURBVHicY2BnYmJkZGVhZGBiY2BgYGZgBgABmgAmn6yVbAAAAABJRU5ErkJggg==\",\"blurWidth\":8,\"blurHeight\":2},\"width\":169,\"height\":32,\"priority\":true}]}]}],[\"$\",\"div\",null,{\"className\":\"flex h-full items-center md:ml-auto lg:min-w-[320px]\",\"children\":[\"$\",\"ul\",null,{\"className\":\"h-full items-center justify-center gap-0 md:flex xl:gap-0\",\"children\":[[[\"$\",\"$L51\",\"News\",{\"href\":\"/\",\"text\":\"News\",\"dropdown\":null,\"target\":\"_self\",\"description\":null}],[\"$\",\"$L51\",\"Prices\",{\"href\":\"/price\",\"text\":\"Prices\",\"dropdown\":null,\"target\":\"_self\",\"description\":null}],[\"$\",\"$L51\",\"Data\",{\"href\":\"https://data.coindesk.com/\",\"text\":\"Data\",\"dropdown\":[\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:2:dropdown:0\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:2:dropdown:1\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:2:dropdown:2\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:2:dropdown:3\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:2:dropdown:4\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:2:dropdown:5\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:2:dropdown:6\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:2:dropdown:7\"],\"target\":\"_self\",\"description\":\"Market-leading digital asset data with exceptional depth and clarity.\"}],[\"$\",\"$L51\",\"Indices\",{\"href\":\"https://indices.coindesk.com/\",\"text\":\"Indices\",\"dropdown\":[\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:3:dropdown:0\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:3:dropdown:1\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:3:dropdown:2\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:3:dropdown:3\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:3:dropdown:4\",\"$3e:props:children:0:props:children:props:children:props:nav:primary:items:3:dropdown:5\"],\"target\":\"_self\",\"description\":\"A trusted partner since 2014. BMR compliant. \"}],[\"$\",\"$L51\",\"Research\",{\"href\":\"/reports\",\"text\":\"Research\",\"dropdown\":null,\"target\":\"_self\",\"description\":null}],[\"$\",\"$L51\",\"Consensus\",{\"href\":\"https://consensus.coindesk.com/\",\"text\":\"Consensus\",\"dropdown\":null,\"target\":\"_self\",\"description\":null}],[\"$\",\"$L51\",\"Sponsored\",{\"href\":\"https://www.coindesk.com/sponsored-content\",\"text\":\"Sponsored\",\"dropdown\":null,\"target\":\"_self\",\"description\":null}]],[\"$\",\"$L52\",null,{\"isNewNav\":true}],\"$L53\"]}]}]]}]\n54:I[53461,[\"6917\",\"static/chunks/6917-654d8ec6a0b77abc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6267\",\"static/chunks/6267-ed5f216b4231ddbd.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2489\",\"static/chunks/2489-96addce7e6c4e6df.js?dpl=dpl_G7oTxkLmCTDLWfy"])
    </script>
    <script>
        self.__next_f.push([1,"JUsRe4ifkasks\",\"8188\",\"static/chunks/8188-d4177295b8621ccc.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5387\",\"static/chunks/5387-0b517cad3b931f7f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"44\",\"static/chunks/44-4d84d0f37386ce0f.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"5489\",\"static/chunks/5489-86b594684545ed15.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2808\",\"static/chunks/2808-3df5a386bb6da125.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"2768\",\"static/chunks/2768-993e812a03a439e2.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6094\",\"static/chunks/6094-871fee5277d4b041.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7509\",\"static/chunks/7509-86eb1f47407ae7aa.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"7248\",\"static/chunks/7248-77556f2733699a41.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"3757\",\"static/chunks/3757-01418bb9389a235e.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"9727\",\"static/chunks/9727-6fa8cc5a461c710d.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\",\"6945\",\"static/chunks/app/(media)/layout-8af8b7e25ac94f4b.js?dpl=dpl_G7oTxkLmCTDLWfyJUsRe4ifkasks\"],\"AvatarMenu\"]\n53:[\"$\",\"$1a\",null,{\"fallback\":null,\"children\":[\"$\",\"$L54\",null,{\"src\":\"https://s.gravatar.com/avatar/4ed81ca47fdff994197aa34ad11d8728?s=480\u0026r=pg\u0026d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fso.png\"}]}]\n"])
    </script>

    @livewireScripts
    </body>

</html>