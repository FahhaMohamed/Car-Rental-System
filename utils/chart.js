const transaction = document.getElementById("myTransactionChart");

// Fetch the data from the PHP script
fetch("get_daily_trans_amount.php")
  .then((response) => response.json())
  .then((data) => {
    console.log(data);

    if (data && data.length > 0) {
      new Chart(transaction, {
        type: "line",
        data: {
          labels: data.map((row) => row.date),
          datasets: [
            {
              label: "Total Transaction Amount",
              data: data.map((row) => row.total),
              borderWidth: 2,
              borderColor: "rgba(75, 192, 192, 1)",
              backgroundColor: "rgba(75, 192, 192, 0.2)",
              pointBackgroundColor: "rgba(255, 99, 132, 1)",
              pointBorderColor: "rgba(255, 255, 255, 1)",
              pointHoverBackgroundColor: "rgba(255, 99, 132, 1)",
              pointHoverBorderColor: "rgba(255, 255, 255, 1)",
              pointRadius: 5,
              pointHoverRadius: 7,
              tension: 0.3,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              title: {
                display: true,
                text: "Date",
                color: "#666",
                font: {
                  size: 14,
                  weight: "bold",
                },
              },
              grid: {
                display: false,
              },
            },
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: "Total Amount (Rs)",
                color: "#666",
                font: {
                  size: 14,
                  weight: "bold",
                },
              },
              grid: {
                color: "rgba(200, 200, 200, 0.2)",
              },
            },
          },
          plugins: {
            title: {
              display: true,
              text: "Daily Transactions",
              font: {
                size: 18,
                weight: "bold",
              },
              padding: {
                top: 10,
                bottom: 30,
              },
            },
            legend: {
              display: false,
              labels: {
                color: "#666",
                font: {
                  size: 12,
                },
              },
            },
            tooltip: {
              enabled: true,
              backgroundColor: "rgba(0, 0, 0, 0.7)",
              titleFont: {
                size: 14,
                weight: "bold",
              },
              bodyFont: {
                size: 12,
              },
              padding: 10,
              cornerRadius: 5,
            },
          },
        },
      });
    }
  });
