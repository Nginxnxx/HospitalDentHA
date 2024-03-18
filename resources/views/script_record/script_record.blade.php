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

            barChart: null,

            init() {
                isDark = this.$store.app.theme === 'dark' || this.$store.app.isDarkMode;
                isRtl = this.$store.app.rtlClass === 'rtl';

                setTimeout(() => {
                    this.barChart = new ApexCharts(this.$refs.barChart, this
                        .barChartOptions);
                    this.barChart.render();
                }, 300);

                this.$watch('$store.app.theme', () => {
                    this.refreshOptions();
                });

                this.$watch('$store.app.rtlClass', () => {
                    this.refreshOptions();
                });
            },

            refreshOptions() {
                isDark = this.$store.app.theme === 'dark' || this.$store.app.isDarkMode;
                isRtl = this.$store.app.rtlClass === 'rtl';
                this.barChart.updateOptions(this.barChartOptions);
            },

            get barChartOptions() {
                return {
                    series: [{
                        name: 'Sales',
                        data: [44, 55, 41, 67, 22, 43, 21, 70],
                    }],
                    chart: {
                        height: 300,
                        type: 'bar',
                        zoom: {
                            enabled: false,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        show: true,
                        width: 1,
                    },
                    colors: ['#4361ee'],
                    xaxis: {
                        categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
                        axisBorder: {
                            color: isDark ? '#191e3a' : '#e0e6ed',
                        },
                    },
                    yaxis: {
                        opposite: isRtl,
                        reversed: isRtl,
                    },
                    grid: {
                        borderColor: isDark ? '#191e3a' : '#e0e6ed',
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                        },
                    },
                    fill: {
                        opacity: 0.8,
                    },
                };
            },
        }));
    });
</script>
{{-- 
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
                    series: [{
                            name: 'Net Profit',
                            data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
                        },
                        {
                            name: 'Revenue',
                            data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
                        },
                    ],
                    chart: {
                        height: 300,
                        type: 'bar',
                        zoom: {
                            enabled: false,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#805dca', '#e7515a'],
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
                        categories: @json($arrary_dname),
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
</script> --}}

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

            lineChart: null,

            init() {
                setTimeout(() => {
                    this.lineChart = new ApexCharts(this.$refs.lineChart, this.lineChartOptions);
                    this.lineChart.render();
                }, 300);

                this.$watch('$store.app.theme', () => {
                    this.refreshOptions();
                });

                this.$watch('$store.app.rtlClass', () => {
                    this.refreshOptions();
                });
            },

            refreshOptions() {
                this.lineChart.updateOptions(this.lineChartOptions);
            },

            get lineChartOptions() {
                const isDark = this.$store.app.theme === 'dark' || this.$store.app.isDarkMode;
                const isRtl = this.$store.app.rtlClass === 'rtl';
                return {
                    chart: {
                        height: 300,
                        type: 'line',
                        toolbar: false,
                    },
                    colors: ['#4361ee', '#ec4646', '#3ebf9b'],
                    stroke: {
                        width: 2,
                        curve: 'smooth',
                    },
                    xaxis: {
                        categories: @json($arrary_dname),
                        axisBorder: {
                            color: isDark ? '#191e3a' : '#e0e6ed',
                        },
                    },
                    yaxis: {
                        opposite: isRtl,
                        labels: {
                            offsetX: isRtl ? -20 : 0,
                        },
                    },
                    series:@json($jsonData),

                    grid: {
                        borderColor: isDark ? '#191e3a' : '#e0e6ed',
                    },
                    tooltip: {
                        theme: isDark ? 'dark' : 'light',
                        y: {
                            formatter(number) {
                                return number;
                            },
                        },
                    },
                };
            },
        }));
    });
</script>

{{-- <script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("chart", () => ({
            init() {
                isDark = this.$store.app.theme === "dark" ? true : false;
                let columnChart = new ApexCharts(this.$refs.columnChart, this.columnChartOptions);
                columnChart.render();
            },
            columnChartOptions() {
                let seriesData = @json($seriesData);
                let seriesNames = @json($seriesNames);

                let series = seriesData.map((data, index) => ({
                    name: seriesNames[index],
                    data: data
                }));

                return {
                    series: series,
                    chart: {
                        height: 300,
                        type: 'bar',
                        zoom: {
                            enabled: false
                        },
                        toolbar: {
                            show: false
                        }
                    },
                    colors: ['#805dca', '#e7515a'],
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded'
                        },
                    },
                    grid: {
                        borderColor: isDark ? '#191e3a' : '#e0e6ed'
                    },
                    xaxis: {
                        categories: @json($categories),
                        axisBorder: {
                            color: isDark ? '#191e3a' : '#e0e6ed'
                        },
                    },
                    yaxis: {
                        opposite: isRtl ? true : false,
                        labels: {
                            offsetX: isRtl ? -10 : 0,
                        }
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
</script> --}}