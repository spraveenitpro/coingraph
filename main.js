const {LineChart, Line, XAxis, YAxis, CartesianGrid, Tooltip, Legend} = Recharts;

var change = 'usd';

setInterval(function(){

var allDataBTC = new Array();
$.ajax({
    url: "getdata.php?base=btc&change="+change,
    dataType: "JSON",
    success: function(json){
        //here inside json variable you've the json returned by your PHP
        var btc = json.btc;
        var data = Object.keys(btc).map(function(e) {
          return [Number(e), btc[e]];
        });
        data.forEach(function(element) {
          element[1]['price'] = parseFloat(element[1]['price']);
          allDataBTC.push(element[1]);
        });

        document.getElementById('btc-value').innerHTML = (Number((allDataBTC[(allDataBTC.length)-1]['price']).toFixed(2)))+" "+(change.toUpperCase());

        if (allDataBTC[(allDataBTC.length)-1]['price'] > allDataBTC[(allDataBTC.length)-2]['price']) {
          $('#btc-value').addClass('green').removeClass('red');
        }
        else if (allDataBTC[(allDataBTC.length)-1]['price'] < allDataBTC[(allDataBTC.length)-2]['price']) {
          $('#btc-value').addClass('red').removeClass('green');
        }

        var ChartBTC = React.createClass({
        	render () {
          	return (
              <LineChart width={$('#btc-graph').width()} height={$('#btc-graph').height()} data={allDataBTC} margin={{ top: 10, right: 0, left: 0, bottom: 10 }}>
                <XAxis dataKey="time" hide={true}/>
                <YAxis hide={true} domain={['auto', 'auto']}/>
                <Line type="monotone" dataKey="price" stroke="#f1c40f" dot={false} isAnimationActive={false}/>
              </LineChart>
            );
          }
        });

        ReactDOM.render(
          <ChartBTC />,
          document.getElementById('btc-graph')
        );

    }
})

var allDataETH = new Array();
$.ajax({
    url: "getdata.php?base=eth&change="+change,
    dataType: "JSON",
    success: function(json){
        //here inside json variable you've the json returned by your PHP
        var eth = json.eth;
        var data = Object.keys(eth).map(function(e) {
          return [Number(e), eth[e]];
        });
        data.forEach(function(element) {
          element[1]['price'] = parseFloat(element[1]['price']);
          allDataETH.push(element[1]);
        });

        document.getElementById('eth-value').innerHTML = (Number((allDataETH[(allDataETH.length)-1]['price']).toFixed(2)))+" "+(change.toUpperCase());

        if (allDataETH[(allDataETH.length)-1]['price'] > allDataETH[(allDataETH.length)-2]['price']) {
          $('#eth-value').addClass('green').removeClass('red');
        }
        else if (allDataETH[(allDataETH.length)-1]['price'] < allDataETH[(allDataETH.length)-2]['price']) {
          $('#eth-value').addClass('red').removeClass('green');
        }

        var ChartETH = React.createClass({
        	render () {
          	return (
              <LineChart width={$('#eth-graph').width()} height={$('#eth-graph').height()} data={allDataETH} margin={{ top: 10, right: 0, left: 0, bottom: 10 }}>
                <XAxis dataKey="time" hide={true}/>
                <YAxis hide={true} domain={['auto', 'auto']}/>
                <Line type="monotone" dataKey="price" stroke="#3498db" dot={false} isAnimationActive={false}/>
              </LineChart>
            );
          }
        });

        ReactDOM.render(
          <ChartETH />,
          document.getElementById('eth-graph')
        );

    }
})

}, 3000);