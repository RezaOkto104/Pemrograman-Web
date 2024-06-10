<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verifikasi Email Anda') }}</div>

                    <div class="card-body">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                {{ __('Tautan Verifikasi Baru Telah Dikirim Ke Alamat Email. ') }}
                            </div>
                        @endif

                        {{ __('Sebelum Melanjutkan Silahkan Periksa Email Anda Untuk Tautan Verifikasi.') }}
                        {{ __('Jika Anda Tidak Menerima Email Tersebut') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="p-0 m-0 align-baseline btn btn-link">{{ __('Klik Disini Untuk Meminta Yang lain') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
