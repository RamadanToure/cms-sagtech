@extends('layouts.general')

@section('content')
    <div class="">
        <div class="container-fluid">
            <div class="row project-wrapper">
                <div class="col-xxl-12">

                                 <!-- Widgets Statistiques -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card card-animate bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="fw-medium  text-white">Documents Archivés</h6>
                                        <h2 class="mt-2"><span class="counter-value" data-target="{{$docTotalArchive}}">0</span></h2>
                                    </div>
                                    <div>
                                        <i class="ri-folder-open-line display-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card card-animate bg-warning text-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="fw-medium">Documents Privés</h6>
                                        <h2 class="mt-2"><span class="counter-value" data-target="{{$docsPrive}}">0</span></h2>
                                    </div>
                                    <div>
                                        <i class="ri-lock-line display-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card card-animate bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="fw-medium">Courriers Non Traités</h6>
                                        <h2 class="mt-2"><span class="counter-value" data-target="{{$courrierNonTraiteCount}}">0</span></h2>
                                    </div>
                                    <div>
                                        <i class="ri-mail-unread-line display-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card card-animate bg-danger text-white">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="fw-medium">Total Courriers Reçus</h6>
                                        <h2 class="mt-2"><span class="counter-value" data-target="{{$CourrierTotalRecu}}">0</span></h2>
                                    </div>
                                    <div>
                                        <i class="ri-mail-line display-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <!-- Archivage Section -->
                        <div class="col-xl-4">
                            <div class="card card-animate archivage-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
                                                <i class="ri-folder-line text-white"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                Document archivé</p>
                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                    data-target="{{$docTotalArchive}}">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card card-animate archivage-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                                <i class="ri-lock-line text-white"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-medium text-muted mb-3">Document Privé</p>
                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                    data-target="{{$docsPrive}}">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card card-animate archivage-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                                <i class="ri-user-line text-white"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                Nombre d'utilisateur</p>
                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                    data-target="{{$nombreUser}}">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Courrier Section -->
                    {{-- <div class="row mt-4">
                        <div class="col-xl-4">
                            <div class="card card-animate courrier-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-danger text-danger rounded-2 fs-2">
                                                <i class="ri-mail-line text-white"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                Courrier non traité</p>
                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                    data-target="{{$courrierNonTraiteCount}}">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card card-animate courrier-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                                <i class="ri-mail-send-line text-white"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-medium text-muted mb-3">Courrier non transmis</p>
                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                    data-target="{{$courrierNonTranmis}}">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card card-animate courrier-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-secondary text-secondary rounded-2 fs-2">
                                                <i class="ri-mail-open-line text-white"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                Total courrier</p>
                                            <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                    data-target="{{$CourrierTotalRecu}}">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                </div>

                <div class="col-xxl-12">
                    <!-- Section Archivage -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Statistiques des Documents Archivés</h5>
                                    <div id="archivage-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Répartition des Documents Privés</h5>
                                    <div id="document-prive-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section Courrier -->
                    <div class="row mt-4">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Statistiques des Courriers</h5>
                                    <div id="courrier-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Répartition des Courriers Non Traités</h5>
                                    <div id="courrier-non-traite-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xxl-12">


                    <!-- Graphiques principaux -->
                    <div class="row mt-4">
                        <!-- Graphique 1 -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Tendances des Documents</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                            Filtrer par
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Semaine</a></li>
                                            <li><a class="dropdown-item" href="#">Mois</a></li>
                                            <li><a class="dropdown-item" href="#">Année</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="tendance-documents"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Graphique 2 -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Progression des Courriers</h5>
                                </div>
                                <div class="card-body">
                                    <div id="progression-courriers"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Graphique combiné -->
                    <div class="row mt-4">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Vue Globale : Documents & Courriers</h5>
                                </div>
                                <div class="card-body">
                                    <div id="global-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="card-title mb-0">Liste des documents</h4>
                        </div><!-- end cardheader -->
                        <div class="card-body pt-0">
                            <div class="upcoming-scheduled">
                                <input type="text" class="form-control" data-provider="flatpickr"
                                    data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
                            </div>
                            @if(count($docsAll) != 0)
                                <?php $i=0;?>
                                <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Statistiques </h6>
                                @foreach($docsAll as $list)
                                    <?php $i++; ?>
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                {{$i}}
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Sujet : {{$list->sujet_doc.' Réf :'.$list->ref_doc}} </h6>
                                            <p class="text-muted mb-0">{{isset($list->type_doc) ? trans('entite.type_doc_Archive')[$list->type_doc] : trans('data.not_found')}}</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            Ajouté le <p class="text-muted mb-0">{{date('d/m/Y',strtotime($list->created_at))}} <span class="text-uppercase"></span></p>
                                        </div>
                                    </div><!-- end -->
                                @endforeach
                                <div class="mt-3 text-center">
                                    <a href="{{url('archive')}}" class="text-muted text-decoration-underline">Voir tous les documents</a>
                                </div>
                            @else
                                <div Class="alert alert-info"><strong>Info! </strong> {!!trans('data.AucunInfosTrouve')!!} </div>
                            @endif
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col --> --}}
            </div><!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>

    @if($archive=="")
        <div class="">
            <div class="container-fluid">
                <div class="row project-wrapper">
                    <div class="col-xxl-12">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                                    <i class="ri-file-line text-white"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-3">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                    Courrier non traité</p>
                                                <div class="d-flex align-items-center mb-3">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                            data-target="{{$courrierNonTraiteCount}}">0</span></h4>
                                                </div>
                                                <!-- <p class="text-muted text-truncate mb-0">Projects this month</p> -->
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-4">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span
                                                    class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                                    <i class="ri-file-line text-white"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="text-uppercase fw-medium text-muted mb-3">Courrier non tranmis</p>
                                                <div class="d-flex align-items-center mb-3">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                            data-target="{{$courrierNonTranmis}}">0</span></h4>
                                                </div>
                                                <!-- <p class="text-muted mb-0">Leads this month</p> -->
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-4">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                                    <i class="ri-file-line text-white"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-3">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                    Total courrier</p>
                                                <div class="d-flex align-items-center mb-3">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                            data-target="{{$CourrierTotalRecu}}">0</span></h4>
                                                </div>
                                                <!-- <p class="text-muted text-truncate mb-0">Work this month</p> -->
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div><!-- end col -->

{{--
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <h4 class="card-title mb-0">Liste des courriers non traités</h4>
                            </div><!-- end cardheader -->
                            <div class="card-body pt-0">
                                <div class="upcoming-scheduled">
                                    <input type="text" class="form-control" data-provider="flatpickr"
                                        data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
                                </div>
                                @if(count($courrierNonTraiteData) != 0)

                                    <?php $i=0;?>
                                    <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Statistiques </h6>
                                    @foreach($courrierNonTraiteData as $list)
                                        <?php $i++; ?>
                                        <div class="mini-stats-wid d-flex align-items-center mt-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                    {{$i}}
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Sujet : {{$list->sujet_cour.' Réf :'.$list->ref_cour.' '.date('d/m/Y',strtotime($list->date_rece))}} </h6>
                                                <p class="text-muted mb-0">{{isset($list->expediteur) ? $list->expediteur->nom_expe : trans('data.not_found')}}</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                Ajouté le <p class="text-muted mb-0">{{date('d/m/Y',strtotime($list->created_at))}} <span class="text-uppercase"></span></p>
                                            </div>
                                        </div><!-- end -->
                                    @endforeach
                                    <div class="mt-3 text-center">
                                        <a href="{{url('listcourrieratraiter')}}" class="text-muted text-decoration-underline">Voir tous les courriers non traités</a>
                                    </div>
                                @else
                                    <div Class="alert alert-info"><strong>Info! </strong> {!!trans('data.AucunInfosTrouve')!!} </div>
                                @endif
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col --> --}}
                </div><!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
    @endif


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // Graphique des documents archivés
    var optionsArchivage = {
        chart: { type: 'bar', height: 350 },
        series: [{
            name: 'Documents',
            data: [{{$docTotalArchive}}, {{$docsPrive}}, {{$nombreUser}}]
        }],
        xaxis: {
            categories: ['Archivé', 'Privé', 'Utilisateurs']
        },
        colors: ['#28a745']
    };
    var archivageChart = new ApexCharts(document.querySelector("#archivage-chart"), optionsArchivage);
    archivageChart.render();

    // Graphique des documents privés
    var optionsDocumentPrive = {
        chart: { type: 'pie', height: 350 },
        series: [{{$docsPrive}}, {{$docTotalArchive}}],
        labels: ['Privés', 'Archivés'],
        colors: ['#ffc107', '#28a745']
    };
    var documentPriveChart = new ApexCharts(document.querySelector("#document-prive-chart"), optionsDocumentPrive);
    documentPriveChart.render();

    // Graphique des courriers
    var optionsCourrier = {
        chart: { type: 'line', height: 350 },
        series: [{
            name: 'Courriers',
            data: [{{$courrierNonTraiteCount}}, {{$courrierNonTranmis}}, {{$CourrierTotalRecu}}]
        }],
        xaxis: {
            categories: ['Non Traités', 'Non Transmis', 'Total Reçu']
        },
        colors: ['#dc3545']
    };
    var courrierChart = new ApexCharts(document.querySelector("#courrier-chart"), optionsCourrier);
    courrierChart.render();

    // Graphique des courriers non traités
    var optionsCourrierNonTraite = {
        chart: { type: 'donut', height: 350 },
        series: [{{$courrierNonTraiteCount}}, {{$courrierNonTranmis}}],
        labels: ['Non Traités', 'Non Transmis'],
        colors: ['#dc3545', '#17a2b8']
    };
    var courrierNonTraiteChart = new ApexCharts(document.querySelector("#courrier-non-traite-chart"), optionsCourrierNonTraite);
    courrierNonTraiteChart.render();



    // Tendance des documents
    var optionsTendance = {
        chart: { type: 'area', height: 350 },
        series: [
            { name: 'Documents Archivés', data: [10, 20, 15, 30, 25, 40] },
            { name: 'Documents Privés', data: [5, 10, 8, 20, 18, 25] }
        ],
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
        colors: ['#28a745', '#ffc107']
    };
    new ApexCharts(document.querySelector("#tendance-documents"), optionsTendance).render();

    // Progression des courriers
    var optionsProgression = {
        chart: { type: 'bar', height: 350 },
        series: [{ name: 'Courriers', data: [{{$courrierNonTraiteCount}}, {{$courrierNonTranmis}}, {{$CourrierTotalRecu}}] }],
        xaxis: { categories: ['Non Traités', 'Non Transmis', 'Total'] },
        colors: ['#dc3545']
    };
    new ApexCharts(document.querySelector("#progression-courriers"), optionsProgression).render();

    // Vue globale : Documents et courriers
    var optionsGlobal = {
        chart: { type: 'line', height: 350 },
        series: [
            { name: 'Documents', data: [30, 50, 40, 60, 70, 90] },
            { name: 'Courriers', data: [20, 40, 30, 50, 60, 80] }
        ],
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] },
        colors: ['#007bff', '#17a2b8']
    };
    new ApexCharts(document.querySelector("#global-chart"), optionsGlobal).render();
</script>

@endsection
