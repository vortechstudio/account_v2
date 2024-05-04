<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-2 rounded-lg bg-yellow-100">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 items-center hidden md:inline">
                    <p class="ml-3 text-black cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card js-cookie-consent cookie-consent shadow bg-gradient-warning rounded-end-bottom rounded-0">
    <div class="card-body">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="d-flex flex-row align-items-center">
                <i class="ti ti-cookie fs-2 me-2"></i>
                <div class="d-flex flex-column">
                    <span class="fw-bold">Cookies et technologies similaires sur ce site</span>
                    <span>{!! trans('cookie-consent::texts.message') !!}</span>
                </div>
            </div>
            <button class="btn btn-lg bg-orange-300" data-bs-toggle="modal" data-bs-target="#cookie-consent">En savoir plus...</button>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="cookie-consent">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="d-flex flex-column justify-content-center align-items-center w-75 mx-auto mb-3">
                    <span class="fs-2 fw-bold mb-1">Cookies et technologies similaires sur ce site</span>
                    <img src="{{ Storage::url('logos/logo.png') }}" class="img-fluid w-px-250" alt="">
                </div>
                <p class="fs-6">Veuillez sélectionner si ce site peut utiliser des cookies ou des technologies connexes telles que des balises web, des pixels et des objets Flash (« cookies »), comme décrit ci-dessous. Pour en savoir plus sur la manière dont ce site utilise les cookies et les technologies connexes, lisez notre Politique en matière de cookies ou en consultant le lien ci-dessous.</p>
                <div class="border border-gray rounded-3 p-3 mb-5">
                    <div class="d-flex flex-column">
                        <span class="fs-4">Cookies Obligatoires</span>
                        <span>Ces cookies sont nécessaires au fonctionnement de base de ce site, comme la connexion sécurisée.</span>
                        <div class="accordion mt-2" id="cookieRequired">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo" role="tabpanel">
                                        Voir les cookies Obligatoires
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Structure</th>
                                                    <th>Domaine</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Vortech Studio</td>
                                                    <td>
                                                        vortechstudio.fr,railway-manager.ovh,account.vortechstudio.fr,beta.railway-manager.ovh,stable.railway-manager.ovh,labs.vortechstudio.fr
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>Chez Vortech Studio, ils s'engagent à créer des expériences virtuelles immersives pour les joueurs. En plus des produits de jeux tels que Railway Manager, Vortech Studio a également lancé le produit communautaire VortechLabs.</p>
                                                        <ul>
                                                            <li><a href="">Conditions d'utilisations des services Vortech Studio</a></li>
                                                            <li><a href="">Droit sur la politique d'accès et de rectifications des données</a></li>
                                                            <li><a href="">Politique en matière de cookie</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray rounded-3 p-3 mb-5">
                    <div class="d-flex flex-column">
                        <span class="fs-4">Cookies Fonctionnels</span>
                        <span>Ces cookies nous aident à analyser votre utilisation du site afin d'évaluer et d'améliorer nos performances. Ils peuvent également être utilisés afin d'offrir une meilleure expérience client. Par exemple, ils permettent de mémoriser vos données de connexion ou de nous fournir des informations sur l'utilisation de notre site.</span>
                        <div class="accordion mt-2" id="fonctionCookie">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFonctionCookie">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#bodyFonctionCookie" aria-expanded="false" aria-controls="bodyFonctionCookie" role="tabpanel">
                                        Paramètre détailler
                                    </button>
                                </h2>
                                <div id="bodyFonctionCookie" class="accordion-collapse collapse" aria-labelledby="headingFonctionCookie" data-bs-parent="#cookieRequired">
                                    <div class="accordion-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Structure</th>
                                                    <th>Domaine</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Google Inc.</td>
                                                    <td>
                                                        apis.google.com, google.com, region1.google-analytics.com, www.google-analytics.com, www.google.com, www.google.ie, www.googletagmanager.com, www.gstatic.com
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Meta (formerly Facebook)</td>
                                                    <td>
                                                        static.xx.fbcdn.net
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray rounded-3 p-3 mb-5">
                    <div class="d-flex flex-column">
                        <span class="fs-4">Cookies publicitaires</span>
                        <span>Les cookies publicitaires sont utilisés afin de vous proposer des publicités personnalisées. Nous pouvons partager ces informations avec des annonceurs afin de mieux comprendre vos intérêts, vos préférences et vos habitudes. Par exemple, les cookies publicitaires peuvent être utilisés pour partager des données avec des annonceurs afin que les publicités que vous voyez soient plus pertinentes pour vous, et vous permettent de partager des pages sur les réseaux sociaux ou de publier des commentaires sur notre site.</span>
                        <div class="accordion mt-2" id="pubCookie">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingPubCookie">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#bodyPubCookie" aria-expanded="false" aria-controls="bodyPubCookie" role="tabpanel">
                                        Paramètre détailler
                                    </button>
                                </h2>
                                <div id="bodyPubCookie" class="accordion-collapse collapse" aria-labelledby="headingFonctionCookie" data-bs-parent="#pubCookie">
                                    <div class="accordion-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Structure</th>
                                                    <th>Domaine</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Google Advertising Products</td>
                                                    <td>
                                                        googleads.g.doubleclick.net, static.doubleclick.net, stats.g.doubleclick.net, www.youtube.com, youtube.com
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Google Inc.</td>
                                                    <td>
                                                        i.ytimg.com
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary js-coolie-consent-agree cookie-consent__agree">{{ trans('cookie-consent::texts.agree') }}</button>
            </div>
        </div>
    </div>
</div>
