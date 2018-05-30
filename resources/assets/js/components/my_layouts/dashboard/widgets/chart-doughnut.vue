

<script>
import {Doughnut} from 'vue-chartjs'

export default {
  extends: Doughnut,
  
  data () {

    return {
        datacollection: {

        labels: ['January', 'February','March'],
        
        datasets: [
          {
            label: 'Data One',
            
            data: [40, 20,100],
            backgroundColor: [
          '#00c5dc', 
          '#f4516c',
          '#716aca',
          
        ],
         
         hoverBackgroundColor: [
          '#17a2b8', 
          '#dc3545',
          '#6f42c1',
          
        ],
        borderColor: [
          'white'
        ],
         
      
        hoverBorderColor: [
          'white'
        ],
        borderWidth: 10,
        hoverBorderWidth: 1,
          }
        ]
      },


    

    }
  },
  mounted () {
    this.renderChart(this.datacollection, {responsive: true, maintainAspectRatio: false, cutoutPercentage:'60'})
  }
}



</script>