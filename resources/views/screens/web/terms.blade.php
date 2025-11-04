@extends('layouts.web.app')

@php
    $page = false;
@endphp

@section('section')
    <x-hero-banner Heading="Home" subHeading="Terms & Conditions" :route="route('index')" />
    <section class="co-op-diff-sec">
        <div class="container">
            <p class="sec-para p-0"><b>Effective Date:</b> August 29, 2025</p>
            <p class="sec-para">Welcome to CooperativeShares.com. By accessing or using this website, you agree
                to comply with and be bound by these Terms & Conditions. Please read them carefully before using our
                platform. If you do not agree with any part of these terms, you must not use the website.
            </p>

            <h5 class="diff-para">1. Acceptance of Terms</h5>
            <h5 class="diff-para1">By using this website, you acknowledge that you have read, understood, and agreed to
                these Terms & Conditions, our Privacy Policy, and any other policies referenced on the site.</h5>

            <h5 class="diff-para">2. Use of the Website</h5>
            <h5 class="diff-para1 mb-4">You agree to use this website only for lawful purposes and in a manner consistent
                with
                all applicable laws. You may use the website to:</h5>
            <ul class="diff-listing">
                <li>
                    <p class="diff-para1 text-start">Browse and search listings.</p>
                </li>
                <li>
                    <p class="diff-para1 text-start">Post property listings if you are authorized as a co-op board, property
                        manager, or developer.</p>
                </li>
                <li>
                    <p class="diff-para1 text-start">Access educational resources and tools.</p>
                </li>
            </ul>
            <p class="diff-para1 mb-4">You may not:</p>
            <ul class="diff-listing">
                <li>
                    <p class="diff-para1 text-start">Post false, misleading, or defamatory information.</p>
                </li>
                <li>
                    <p class="diff-para1 text-start">Attempt to gain unauthorized access to other users’ information or
                        accounts.</p>
                </li>
                <li>
                    <p class="diff-para1 text-start">Use the website for any commercial or illegal purposes not authorized
                        by CooperativeShares.com.</p>
                </li>
            </ul>

            <h5 class="diff-para">3. User Accounts</h5>
            <h5 class="diff-para1">To post listings or access certain features, you may be required to create an account.
                You are responsible for maintaining the confidentiality of your login credentials and for all activity under
                your account. You agree to notify us immediately if you suspect any unauthorized use.</h5>

            <h5 class="diff-para">4. Listings and Content</h5>
            <h5 class="diff-para1 mb-4">All listings are submitted by users (co-op boards, management companies, or
                developers)
                and represent their properties. CooperativeShares.com <b>does not guarantee the accuracy or completeness</b>
                of any
                listing. Users are responsible for providing accurate information and images for their listings.</h5>
            <h5 class="diff-para1">By submitting a listing, you grant CooperativeShares.com a <b>non-exclusive license</b>
                to
                display, reproduce, and distribute your content for the purpose of operating the website.
            </h5>

            <h5 class="diff-para">5. Intellectual Property</h5>
            <h5 class="diff-para1">All content on this website, including text, images, logos, and software, is the property
                of CooperativeShares.com or its licensors. You may not reproduce, distribute, or use this content for
                commercial purposes without written permission.</h5>

            <h5 class="diff-para">6. Limitation of Liability</h5>
            <h5 class="diff-para1">CooperativeShares.com provides the website “as is” and is not responsible for errors,
                omissions, or inaccuracies in listings or content. We are not liable for any damages, direct or indirect,
                resulting from your use of the website or reliance on any listings.</h5>

            <h5 class="diff-para">7. Third-Party Links</h5>
            <h5 class="diff-para1">This website may contain links to third-party websites. CooperativeShares.com is <b>not
                    responsible for the content, accuracy, or privacy practices</b> of any linked site. Users should review
                the
                terms and policies of any third-party websites they visit.</h5>

            <h5 class="diff-para">8. Modifications to the Terms</h5>
            <h5 class="diff-para1">We may update these Terms & Conditions from time to time. Any changes will be posted on
                this page with the updated effective date. Continued use of the website constitutes acceptance of the
                updated terms.</h5>

            <h5 class="diff-para">9. Termination</h5>
            <h5 class="diff-para1">CooperativeShares.com reserves the right to suspend or terminate your account or access
                to the website for violation of these terms, illegal activity, or any action deemed harmful to the site or
                its users.</h5>

            <h5 class="diff-para">10. Governing Law</h5>
            <h5 class="diff-para1">These Terms & Conditions are governed by and interpreted under the laws of the United
                States, without regard to conflict of law principles. Any disputes arising from these terms or the use of
                this website shall be resolved in the appropriate courts in the State of Kansas.</h5>

            <h5 class="diff-para">11. Contact Information</h5>
            <h5 class="diff-para1">For questions regarding these Terms & Conditions, please contact us:</h5>
            <ul class="diff-listing">
                <li>
                    <p class="diff-para1 text-start"><b>Email : </b><a href="mailto:info@cooperativeshares.com"
                            class="text-black">info@cooperativeshares.com</a></p>
                </li>
                <li>
                    <p class="diff-para1 text-start"><b>Phone : </b><a href="tel:8165297022" class="text-black">(816)
                            529-7022</a></p>
                </li>
                <li>
                    <p class="diff-para1 text-start"><b>Address : </b>520 E. 4th St, Tonganoxie, KS 66086</p>
                </li>
            </ul>
        </div>
    </section>
    <x-partner-section />
@endsection
