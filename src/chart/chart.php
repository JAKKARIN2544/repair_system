<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>

new Morris.Donut({
  element: 'myfirstchart3',
  data: [
    {label: "รับซ่อม", value: 12},
    {label: "กำลังซ่อม", value: 30},
    {label: "ยกเลิกซ่อม", value: 20}
  ],
  colors : ['#28a745', '#ffc107', '#dc3545']
});

  new Morris.Bar({
  element: 'myfirstchart',
  data: [
    { d: 'รับซ่อม', a: 100,},
    { d: 'กำลังซ่อม', b: 20,},
    { d: 'ยกเลิกรับซ่อม', c: 60,}
  ],
  xkey: ['d'],
  ykeys: ['a','b','c'],
  labels: ['รับซ่อม', 'กำลังซ่อม', 'ยกเลิกรับซ่อม'],
  barColors : ['#28a745','#ffc107','#dc3545'],
  resize : true,
});

new Morris.Line({
  element: 'myfirstchart2',
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  xkey: 'year',
  ykeys: ['value'],
  labels: ['Value'],
  hideHover: 'auto',
  behaveLikeLine: true,
  resize: true,
  pointFillColors: ['#ffffff'],
  pointStrokeColors: ['black'],
  lineColors: ['red', 'blue'],
});
</script>
