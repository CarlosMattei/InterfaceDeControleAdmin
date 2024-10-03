<div class="uk-container uk-margin-top">
    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-card-primary">
                <h3 class="uk-card-title">Total de Clientes</h3>
                <p>000</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-card-primary">
                <h3 class="uk-card-title">Vendas no mês</h3>
                <p>R$ 00,00</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body uk-card-primary">
                <h3 class="uk-card-title">Total vendido</h3>
                <p>000</p>
            </div>
        </div>
    </div>


    <div class="uk-text-center" uk-grid>
        <div class="uk-width-2-3@l">
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Vendas no mês</h3>
            <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="uk-width-1-3@l">
        <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title">Vendas no mês</h3>
                <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small">Registrar novo Produto</button>
                <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small">Registrar novo Cliente</button>
                <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small">Historico de vendas</button>
                <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small">Historico de Compras</button>
        </div>
        </div>
    </div>
</div>
</body>

<script>
    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>