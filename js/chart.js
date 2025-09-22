const ctx = document.getElementById("overviewChart").getContext("2d");
new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    datasets: [
      {
        label: "Attendance",
        data: [
          3000, 3800, 3200, 5000, 1500, 3100, 1500, 1600, 3500, 3450, 2200,
          3300,
        ],
        backgroundColor: "rgb(15 23 42)",
        borderRadius: 6,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: {
        beginAtZero: true,
        min: 0,
        max: 5000,
        ticks: {
          stepSize: 1000,
          callback: function (value) {
            return value;
          },
        },
        grid: { drawBorder: false },
      },
      x: {
        grid: { display: false, drawBorder: false },
      },
    },
    plugins: {
      legend: { display: false },
      tooltip: {
        callbacks: {
          label: function (context) {
            return context.raw + " students";
          },
        },
        backgroundColor: "#1f2937",
        titleColor: "#fff",
        bodyColor: "#fff",
        padding: 10,
        borderRadius: 8,
      },
    },
  },
});
