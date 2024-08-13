<x-app-layout>

    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img alt="" src="{{ URL::asset(auth()->user()->profile_photo_path) }}"></a>
                            </div>
                        </div>
                        <x-profile.basic />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
