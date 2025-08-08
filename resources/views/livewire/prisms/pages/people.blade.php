<div>
    <div class="row g-4">
        <!-- Vertical Tabs -->
        <div class="col-12 col-lg-4">
            <div class="science-sticky position-sticky">
                <div class="card shadow-sm">
                    <div class="card-body p-3">
                        <div class="nav nav-pills flex-column gap-2" id="science-tab" role="tablist"
                             aria-orientation="vertical">
                            <button class="nav-link text-start {{ $active === 'faculty' ? 'active' : '' }}"
                                    type="button" role="tab"
                                    wire:click="setActive('faculty')"
                                    aria-controls="pane-overview" aria-selected="true">
                                <i class="fas fa-circle-info me-2 text-primary"></i> Faculty and Staff
                            </button>
{{--                            <button class="nav-link text-start {{ $active === 'staff' ? 'active' : '' }}"--}}
{{--                                    type="button" role="tab"--}}
{{--                                    wire:click="setActive('staff')"--}}
{{--                                    aria-controls="pane-precipitation" aria-selected="false">--}}
{{--                                <i class="fas fa-cloud-rain me-2 text-success"></i> Staff--}}
{{--                            </button>--}}
                            <button class="nav-link text-start {{ $active === 'students' ? 'active' : '' }}"
                                    type="button" role="tab"
                                    wire:click="setActive('students')"
                                    aria-controls="pane-recrystallization" aria-selected="false">
                                <i class="fas fa-gem me-2 text-warning"></i> Students and Post-Docs
                            </button>
                            <button class="nav-link text-start {{ $active === 'eab' ? 'active' : '' }}"
                                    type="button" role="tab"
                                    wire:click="setActive('eab')"
                                    aria-controls="pane-tensile" aria-selected="false">
                                <i class="fas fa-arrows-left-right me-2 text-danger"></i> External Advisory Board
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="col-12 col-lg-8">
            <div class="tab-content">
                @if($active == "faculty")
                    <div class="tab-pane fade {{ $active === 'faculty' ? 'show active' : '' }}"
                         role="tabpanel">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.science.includes.overview')
                            </div>
                        </div>
                    </div>
                @endif

                @if($active == "staff")
                    <div class="tab-pane fade {{ $active === 'staff' ? 'show active' : '' }}"
                         role="tabpanel">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.science.includes.precipitate')
                            </div>
                        </div>
                    </div>
                @endif

                @if ($active == "students")
                    <div class="tab-pane fade {{ $active === 'students' ? 'show active' : '' }}"
                         role="tabpanel">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.science.includes.recrystallization')
                            </div>
                        </div>
                    </div>
                @endif

                @if($active == "eab")
                    <div class="tab-pane fade {{ $active === 'eab' ? 'show active' : '' }}"
                         role="tabpanel">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body p-4">
                                @include('pages.science.includes.tensile')
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>>


