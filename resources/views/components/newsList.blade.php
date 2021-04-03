<section class="container" style="padding-top: 200px; min-height: 500px;">
    <h2 class="section-title text-center">Tin tức</h2>

    @if (count($list) === 0)
        <div class="text-danger text-center">
            Không tồn tại bản ghi
        </div>
    @else
        <div class="row">
            <div class="col-lg-6">
                @foreach ($list as $content)
                    <a href="/tin-tuc/{{ $content->slug }}" class="text-decoration-none">
                        <div class="d-flex w-100 mb-5">
                            <div class="mr-3">
                                <img src="http://sso-admin.cttd.tk/{{ $content->thumbnail }}"
                                        style="width: 6rem; height: 6rem"
                                        class="rounded object-fit-cover">
                            </div>
                            <div class="text-body">
                                <div class="font-weight-500">
                                    {{ $content->title }}
                                </div>

                                <div>
                                    {{ $content->description }}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</section>
