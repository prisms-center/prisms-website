<div class="card border-0 shadow-sm mb-4 h-100">
    <div class="card-body p-4">
        <div class="row g-4 align-items-start">
            <!-- Profile Image -->
            <div class="col-md-3 col-lg-2">
                <div class="text-center">
                    <img src="{{ $person['image'] ?: 'assets/img/people/placeholder.jpg' }}"
                         alt="{{ $person['first_name'] }} {{ $person['last_name'] }}"
                         class="img-fluid rounded-circle shadow-sm"
                         style="max-width: 120px; width: 100%; aspect-ratio: 1; object-fit: cover;">
                </div>
            </div>

            <!-- Person Details -->
            <div class="col-md-9 col-lg-10">
                <!-- Name and Title -->
                <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                    <h4 class="h5 text-dark mb-0">
                        {{ $person['title'] }}{{ $person['first_name'] }} {{ $person['last_name'] }}
                    </h4>
                    @if(!empty($person['advisor']))
                        <span class="badge bg-info bg-opacity-75 text-dark small">{{ $person['advisor'] }}</span>
                    @endif
                </div>

                <!-- Contact and Research Links -->
                <div class="d-flex flex-wrap gap-2 mb-3">
                    @if(!empty($person['email']))
                        <a href="mailto:{{ $person['email'] }}" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-envelope me-1"></i>{{ $person['email'] }}
                        </a>
                    @endif

                    @if(!empty($person['research']))
                        <a href="{{ $person['research'] }}" target="_blank" rel="noopener"
                           class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-external-link-alt me-1"></i>Research Profile
                        </a>
                    @endif
                </div>

                <!-- Research Description -->
                @if(!empty($person['blurb']))
                    <p class="text-muted mb-0 small lh-base">
                        {{ $person['blurb'] }}
                    </p>
                @endif

                <!-- Advisor Information (if applicable) -->
                @if(!empty($person['advisor']) && !empty($person['blurb']))
                    <div class="mt-2">
                        <small class="text-secondary">
                            <i class="fas fa-user-graduate me-1"></i>
                            <strong>Advisor:</strong> {{ $person['advisor'] }}
                        </small>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
