<div class="panel-body">
	<div id="morris-area-chart" class="chart text-center text-muted"></div>
</div>
<div class="panel-body rb-summary">
	<div class="rb-table-column"><span class="rb-num">31</span> Visit</div>
	<div class="rb-table-column"><span class="rb-num">2</span> Unique</div>
	<div class="rb-table-column"><span class="rb-num">2</span> Views</div>
	<div class="rb-table-column"><span class="rb-num">2</span> Mobile</div>
</div>

<script>
$(function() {
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2012 Q1',
            visit: 2778,
            unique: 52294,
            views: 53294,
            mobile: 50000
        }, {
            period: '2012 Q2',
            visit: 2778,
            unique: 2294,
            views: 3294,
            mobile: 50000
        }, {
            period: '2012 Q3',
            visit: 4912,
            unique: 1969,
            views: 3294,
            mobile: 50000
        }, {
            period: '2012 Q4',
            visit: 3767,
            unique: 3597,
            views: 3294,
            mobile: 1294
        }, {
            period: '2013 Q1',
            visit: 36810,
            unique: 31914,
            views: 33294,
            mobile: 31294
        }, {
            period: '2013 Q2',
            visit: 5670,
            unique: 4293,
            views: 3294,
            mobile: 50000
        }, {
            period: '2013 Q3',
            visit: 4820,
            unique: 3795,
            views: 3294,
            mobile: 50000
        }, {
            period: '2013 Q4',
            visit: 15073,
            unique: 5967,
            views: 23294,
            mobile: 50000
        }, {
            period: '2014 Q1',
            visit: 10687,
            unique: 4460,
            views: 13294,
            mobile: 50000
        }, {
            period: '2014 Q2',
            visit: 8432,
            unique: 5713,
            views: 15294,
            mobile: 50000
        }],
        xkey: 'period',
        ykeys: ['visit', 'unique', 'views', 'mobile'],
        labels: ['Visit', 'Unique', 'Views', 'Mobile'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
});
</script>
