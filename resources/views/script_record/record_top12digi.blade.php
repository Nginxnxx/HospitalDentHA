<script>
    document.addEventListener('alpine:init', () => {
   

        Alpine.data('chart', () => ({
            // highlightjs
            codeArr: [],
            toggleCode(name) {
                if (this.codeArr.includes(name)) {
                    this.codeArr = this.codeArr.filter((d) => d != name);
                } else {
                    this.codeArr.push(name);

                    setTimeout(() => {
                        document.querySelectorAll('pre.code').forEach((el) => {
                            hljs.highlightElement(el);
                        });
                    });
                }
            },

            
            columnChart: null,

            init() {
                isDark = this.$store.app.theme === 'dark' || this.$store.app.isDarkMode ? true :
                    false;
                isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;

                setTimeout(() => {
               

                    this.columnChart = new ApexCharts(this.$refs.columnChart, this
                        .columnChartOptions);
                    this.columnChart.render();


                }, 300);

                this.$watch('$store.app.theme', () => {
                    this.refreshOptions();
                });

                this.$watch('$store.app.rtlClass', () => {
                    this.refreshOptions();
                });
            },

            refreshOptions() {
                isDark = this.$store.app.theme === 'dark' || this.$store.app.isDarkMode ? true :
                    false;
                isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;
                this.columnChart.updateOptions(this.columnChartOptions);
               
            },

         
            get columnChartOptions() {
                return {
                    series: @json($jsonData),
                    chart: {
                        height: 800,
                        type: 'bar',
                        zoom: {
                            enabled: false,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#805dca', '#a775d4', '#d39ee3', '#e3c7ed',],
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent'],
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                        },
                    },
                    grid: {
                        borderColor: isDark ? '#191e3a' : '#e0e6ed',
                    },
                    xaxis: {
                        categories:  @json($arrary_ICD10_namese),
                        axisBorder: {
                            color: isDark ? '#191e3a' : '#e0e6ed',
                        },
                    },
                    yaxis: {
                        opposite: isRtl ? true : false,
                        labels: {
                            offsetX: isRtl ? -10 : 0,
                        },
                    },
                    tooltip: {
                        theme: isDark ? 'dark' : 'light',
                        y: {
                            formatter: function(val) {
                                return val;
                            },
                        },
                    },
                };
            },


        }));
    });
</script> 