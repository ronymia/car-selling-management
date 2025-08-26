<x-guest-layout title="Sign up" bodyClass="page-signup">

    {{-- page title --}}
    <h1 class="auth-page-title">Sign up</h1>

    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Repeat Password" />
        </div>
        <hr />
        <div class="form-group">
            <input type="text" placeholder="First Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Last Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Phone" />
        </div>
        <button class="btn btn-primary btn-login w-full">Register</button>
    </form>

    {{-- FOOTER LINK --}}
    <x-slot:footerLink>
        Already have an account? -
        <a href="/login"> Click here to login </a>
    </x-slot:footerLink>
</x-guest-layout>
