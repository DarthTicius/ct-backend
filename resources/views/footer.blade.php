<footer class="bg-gray-800" aria-labelledby="footer-heading">
    <div class="container mx-auto max-w-1.5xl">
        <h2 id="footer-heading" class="sr-only">
            Footer
        </h2>
        <div class="mx-auto max-w-full py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-4">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-base font-medium text-white">Cars</h3>
                            <ul class="mt-4 space-y-4">

                                <li>
                                    <a href=# class="text-base text-gray-300 hover:text-white">
                                        Buy Cars
                                    </a>
                                </li>
                                <li>
                                    <a href=# class="text-base text-gray-300 hover:text-white">
                                        Cars Dealers
                                    </a>
                                </li>
                                <li>
                                    <a href=# class="text-base text-gray-300 hover:text-white">
                                        Browse All Car Makes
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-base font-medium text-white">Motorcycles</h3>
                            <ul class="mt-4 space-y-4">

                                <li>
                                    <a href=# class="text-base text-gray-300 hover:text-white">
                                        Buy Motorcycles
                                    </a>
                                </li>
                                <li>
                                    <a href=# class="text-base text-gray-300 hover:text-white">
                                        Motorcycles Dealers
                                    </a>
                                </li>
                                <li>
                                    <a href=# class="text-base text-gray-300 hover:text-white">
                                        Browse All Motorcycles Makes
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-base font-medium text-white">Company</h3>
                            <ul class="mt-4 space-y-4">

                                <li>
                                    <a href=# class="text-base text-gray-300 hover:text-white">About</a>
                                </li>
                                <li><a href=# class="text-base text-gray-300 hover:text-white">Blog</a></li>
                                <li><a href=# class="text-base text-gray-300 hover:text-white">Jobs</a></li>
                                <li><a href=# class="text-base text-gray-300 hover:text-white">Press</a></li>
                                <li><a href=# class="text-base text-gray-300 hover:text-white">Partners</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 xl:mt-0">
                    <h3 class="text-base font-medium text-white">Language &amp; Currency</h3>
                    <form class="mt-4 sm:max-w-xs">
                        <fieldset class="w-full">
                            <label htmlFor="language" class="sr-only">
                                Language
                            </label>
                            <div class="relative">
                                <select id="language" name="language"
                                    class="block w-full appearance-none rounded-md border border-transparent bg-gray-700 bg-none py-2 pl-3 pr-10 text-base text-white focus:border-white focus:outline-none focus:ring-white sm:text-sm"
                                    defaultValue="English">
                                    <option>English</option>
                                    <option>French</option>
                                    <option>German</option>
                                    <option>Japanese</option>
                                    <option>Spanish</option>
                                </select>

                            </div>
                        </fieldset>
                        <fieldset class="mt-4 w-full">
                            <label htmlFor="currency" class="sr-only">
                                Currency
                            </label>
                            <div class="relative mt-1.5">
                                <select id="currency" name="currency"
                                    class="block w-full appearance-none rounded-md border border-transparent bg-gray-700 bg-none py-2 pl-3 pr-10 text-base text-white focus:border-white focus:outline-none focus:ring-white sm:text-sm"
                                    defaultValue="AUD">
                                    <option>ARS</option>
                                    <option>AUD</option>
                                    <option>CAD</option>
                                    <option>CHF</option>
                                    <option>EUR</option>
                                    <option>GBP</option>
                                    <option>JPY</option>
                                    <option>USD</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">

                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 lg:flex lg:items-center lg:justify-between xl:mt-0">
                <div>
                    <h3 class="text-base font-medium text-white">Subscribe to our newsletter</h3>
                    <p class="mt-2 text-base text-gray-300">
                        The latest news, articles, and resources, sent to your inbox weekly.
                    </p>
                </div>
                <form class="mt-4 sm:flex sm:max-w-md lg:mt-0">
                    <label htmlFor="email-address" class="sr-only">
                        Email address
                    </label>
                    <input type="email" name="email-address" id="email-address" autoComplete="email" required
                        class="w-full min-w-0 appearance-none rounded-md border border-transparent bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:border-white focus:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 sm:max-w-xs"
                        placeholder="Enter your email" />
                    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-green-500 py-2 px-4 text-base font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <p class="mt-8 text-base text-gray-400 md:order-1 md:mt-0">
                    &copy; <?php echo date('Y'); ?> CT Trader, Inc. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
