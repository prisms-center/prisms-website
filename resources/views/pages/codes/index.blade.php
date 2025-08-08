<x-layouts.prisms :title="'PRISMS Science'">
    <style>
        /* Page-specific styles for Science page */
        .science-hero {
            background: linear-gradient(135deg, #f8f9fa 0%, #eef2f7 100%);
            border-radius: .75rem;
        }

        .nav-pills .nav-link {
            border-radius: .5rem;
        }

        .nav-pills .nav-link.active {
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.08);
        }

        .tab-pane .card {
            border: 0;
        }

        .tab-pane .card + .card {
            margin-top: 1rem;
        }

        .icon-circle {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
        }

        /* Ensure sticky sidebar has room under fixed navbar */
        @media (min-width: 992px) {
            .science-sticky {
                top: 2rem;
            }
        }
    </style>

    <livewire:prisms.pages.codes/>

</x-layouts.prisms>
