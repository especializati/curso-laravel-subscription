<section id="pricing" class="py-20 m-h-screen" data-section="">
    <div class="c-container">
        <div class="w-content text-center mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Plano que melhor se adapta a você</h2>
            <p class="text-gray-400 leading-relaxed">
                Escolha o plano que melhor se encaixa as suas necessidades
            </p>
        </div>
        <div class="pricingTable mt-10" x-data="pricingTable()">
            <div class="flex flex-col lg:flex-row my-5 lg:space-x-4 space-y-8">
                <template :key="index"></template>
                <div class="flex-1 flex-1 md:w-2/3 md:mx-auto lg:w-auto">
                    <div class="card card--col" :id="item.ref" id="Basic">
                        <div class="card__header">
                            <div class="flex items-center justify-between">
                                <h3 class="card__title" x-text="item.title">Mensal</h3><template
                                    x-if="item.badge"><span class="badge"
                                        x-text="item.badge"></span></template>
                            </div>
                            <div class="card__price"><span class="price-currency mr-2"
                                    x-text="item.price.currency">R$</span> <span class="price-value"
                                    x-text="item.price[currentPricing]">19,90</span> <span
                                    class="price-period"><span class="px-1">/</span><span
                                        x-text="translate()">Mês</span></span></div>
                        </div>
                        <div class="card__features"><template x-for="(feature, index) in item.features"
                                :key="index">
                                <p class="feature"><svg class="w-5 h-5 mr-2" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg> <span x-text="feature"></span></p>
                            </template>
                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg> <span x-text="feature">Recurso XYZ</span></p>
                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg> <span x-text="feature">Recurso XYZ</span></p>
                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg> <span x-text="feature">Recurso XYZ</span></p>
                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg> <span x-text="feature">Recurso XYZ</span></p>
                        </div>
                        <div class="card__footer text-center my-4"><a href="#"
                                class="button button--filled button--primary">Assinar Agora Mesmo<svg
                                    class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></div>
                    </div>
                </div>
                <div class="flex-1 flex-1 md:w-2/3 md:mx-auto lg:w-auto">
                    <div class="card card--col" :id="item.ref" id="Pro">
                        <div class="card__header">
                            <div class="flex items-center justify-between">
                                <h3 class="card__title" x-text="item.title">Anual</h3><template
                                    x-if="item.badge"><span class="badge"
                                        x-text="item.badge"></span></template><span class="badge"
                                    x-text="item.badge">Recomendado</span>
                            </div>
                            <div class="card__price"><span class="price-currency mr-2"
                                    x-text="item.price.currency">R$</span> <span class="price-value"
                                    x-text="item.price[currentPricing]">39,90</span> <span
                                    class="price-period"><span class="px-1">/</span><span
                                        x-text="translate()">Mês</span></span></div>
                        </div>
                        <div class="card__features"><template x-for="(feature, index) in item.features"
                                :key="index">
                                <p class="feature"><svg class="w-5 h-5 mr-2" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg> <span x-text="feature"></span></p>
                            </template>
                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg> <span x-text="feature">Recurso XYZ</span></p>
                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg> <span x-text="feature">Recurso XYZ</span></p>
                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg> <span x-text="feature">Recurso XYZ</span></p>
                            <p class="feature"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg> <span x-text="feature">Recurso XYZ</span></p>
                        </div>
                        <div class="card__footer text-center my-4"><a href="#"
                                class="button button--filled button--primary">Assinar Agora Mesmo<svg
                                    class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
