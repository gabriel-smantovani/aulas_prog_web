<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('SISTEMA DE ALUGUEL DE CARROS') }}
        </h2>
    </x-slot>
    
    @section('content')
        @auth
            <div class="flex items-center justify-center bg-gray-100">
                <div class="text-center">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages': ['corechart']});

                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = new google.visualization.DataTable();
                            data.addColumn('string', 'Status');
                            data.addColumn('number', 'Quantidade');
                            data.addRows([
                                ['Alugados', {{ $carrosAlugados }}],
                                ['Não Alugados', {{ $carrosNaoAlugados }}]
                            ]);

                            var options = {
                                title: 'Disponibilidade dos carros',
                                width: 800,
                                height: 450,
                                titleTextStyle: {
                                    fontSize: 20,
                                    bold: true,
                                    alignment: 'center',
                                },
                                legend: {
                                    position: 'bottom',
                                    textStyle: {
                                        fontSize: 16 // Tamanho da fonte da legenda
                                    }
                                }
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div id="chart_div"></div>
                </div>
            </div>
        @endauth
    @endsection
</x-app-layout>