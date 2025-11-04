@extends('layouts.web.app')

@php
    $page = false;
@endphp

@section('section')
    <x-hero-banner Heading="Home" subHeading="FAQs" :route="route('index')" />
    <section class="co-op-diff-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What types of listings can I post on CooperativeShares.com?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">You can list co-op homes for sale, including units for
                                    seniors,
                                    families, and developers. Each listing can include photos, pricing, and detailed unit
                                    descriptions.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Can I showcase my cooperative community’s amenities and features?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Yes. Listings can include detailed descriptions of the
                                    community, floor plans, photos, and amenities, helping buyers make informed decisions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Are there resources for buyers and sellers on the site?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Absolutely. We provide guides, FAQs, and step-by-step
                                    instructions on how to buy a co-op share and transfer shares.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Does CooperativeShares.com offer support for senior housing communities?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Yes. We provide tools, educational content, and listing
                                    management features tailored for senior cooperative housing, ensuring visibility and
                                    accessibility for older adults and families.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. What is the difference between a co-op and a traditional home?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">In a co-op, residents own shares in the building rather than the
                                    unit itself. This shared ownership promotes collaboration, collective decision-making,
                                    and cost savings.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6. Why should I consider cooperative living communities?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Co-op communities offer shared responsibility, transparency,
                                    lower maintenance costs, and a strong sense of community, making them a secure and
                                    engaging housing option.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    7. How is senior cooperative housing different from other housing options?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Senior co-op housing combines the stability of ownership with
                                    supportive community management, offering safety, affordability, and social engagement
                                    for seniors.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    8. How do I search for co-op homes for sale?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">You can use our platform’s search filters to browse co-op homes
                                    for sale based on location, price, size, and amenities.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    9. Can I find affordable housing options through co-ops?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Yes. Many co-op communities provide affordable alternatives to
                                    traditional real estate, making housing more accessible to different budgets.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-partner-section />
@endsection
