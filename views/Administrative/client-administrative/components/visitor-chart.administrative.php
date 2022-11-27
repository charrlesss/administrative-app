 <canvas id="root"></canvas>

<script>

Chart.defaults.elements.arc.borderWidth = 0;
Chart.defaults.datasets.doughnut.cutout = '75%';


const config = {
  type: 'doughnut',
  data: {
    datasets: [{
      label: 'My First Dataset',
      data: [50],
      backgroundColor: [
        '#c566ed',
        'white'
      ],
      borderRadius:100,
      borderWidth: 10,
    }]
  },

  options: {
        layout: {
            padding: 20
        }
  },
  plugins: [{
    beforeDraw:(chart)=>{
        var width = chart.width,
        height = chart.height,
        ctx = chart.ctx;

    ctx.restore();
    var fontSize = (height / 154).toFixed(2);
    ctx.font = fontSize + "em sans-serif";
    ctx.fillStyle ="#c566ed";
    ctx.textBaseline = "middle";

    var text = (2500).toLocaleString('en-US'),
        textX = Math.round((width - ctx.measureText(text).width) / 2),
        textY = height -140;
    ctx.fillText(text, textX, textY);
    ctx.save();
    }
  }]
};
    new Chart(document.querySelector('#root') ,config)
    
</script>