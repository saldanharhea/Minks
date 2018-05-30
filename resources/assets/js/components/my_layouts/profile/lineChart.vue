

<script>
    import {Line} from 'vue-chartjs'

    export default {
        extends: Line,

        data () {

            return {
                datacollection: {

                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],

                    datasets: [
                        {
                            label: 'Bus Booking',
                            borderColor: '#dc3545',
                            pointBackgroundColor: 'white',
                            borderWidth: 3,
                            pointBorderColor: 'white',
                            backgroundColor: this.gradient,
                            data: [40, 39, 10, 40, 39, 80, 40,60, 55, 32, 10, 2, 12, 53,]
                        },{
                            label: 'Money Transfer',
                            borderColor: '#007bff',
                            pointBackgroundColor: 'white',
                            pointBorderColor: 'white',
                            borderWidth: 3,
                            backgroundColor: this.gradient2,
                            data: [60, 55, 32, 10, 2, 12, 53,40, 39, 10, 40, 39, 80, 40]
                        },
                        {
                            label: 'Recharge',
                            borderColor: '#ffc107',
                            pointBackgroundColor: 'white',
                            pointBorderColor: 'white',
                            borderWidth: 3,
                            backgroundColor: this.gradient,
                            data: [90, 52, 32, 40, 2, 12, 53,40, 39, 10, 40, 19, 10, 10]
                        },

                    ]
                },




            }
        },
        mounted () {
            this.renderChart(this.datacollection, {responsive: true, maintainAspectRatio: false, cutoutPercentage:'60'})
        }
    }



</script>