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
            @livewire('top-event')
             
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
				[&amp;_.jwplayer.jw-skin-cdtv.jw-flag-floating_.jw-float-bar_.jw-float-bar-icon]:right-[10px]">
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
   
    @livewireScripts
   
    </body>

</html>