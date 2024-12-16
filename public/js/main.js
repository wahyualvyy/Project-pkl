const ctx = document.getElementById("myChart");

new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Mercedes", "Toyota", "BMW"],
    datasets: [
      {
        label: "Data Pembeli Mobil Hari ini",
        data: [15, 25, 10],
        backgroundColor: "#36C2CE",
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
