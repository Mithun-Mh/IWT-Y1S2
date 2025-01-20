 // JavaScript code for the line graph
 document.addEventListener("DOMContentLoaded", function() {
    const lineGraph = document.getElementById("line-graph");
    const chooser = document.getElementById("chooser");

    // Event listener for the chooser
    chooser.addEventListener("change", function(event) {
      const selectedValue = event.target.value;

      // Update the line graph based on the selected value
      updateLineGraph(selectedValue);
    });

    // Function to update the line graph
    function updateLineGraph(selectedValue) {
      const ctx = lineGraph.getContext("2d");

      // Clear the canvas
      ctx.clearRect(0, 0, lineGraph.width, lineGraph.height);

      // Generate the line graph based on the selected value
      switch (selectedValue) {
        case "net-sales":
          // Generate line graph for net sales
          generateLineGraph(ctx, "Net Sales", [50, 55, 70, 80, 10, 100]);
          break;
        case "today-sales":
          // Generate line graph for today's sales
          generateLineGraph(ctx, "Today's Sales", [30, 21, 50, 60, 12, 4]);
          break;
        case "week-sales":
          // Generate line graph for this week's sales
          generateLineGraph(ctx, "This Week's Sales", [20, 30, 40, 50, 60, 70]);
          break;
        default:
          break;
      }
    }

    // Function to generate the line graph
    function generateLineGraph(ctx, title, data) {
      const width = lineGraph.width;
      const height = lineGraph.height;
      const padding = 20;
      const xAxisValues = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

      const maxValue = Math.max(...data);
      const yAxisRatio = (height - 2 * padding) / maxValue;

      // Draw x-axis
      ctx.beginPath();
      ctx.moveTo(padding, height - padding);
      ctx.lineTo(width - padding, height - padding);
      ctx.stroke();

      // Draw y-axis
      ctx.beginPath();
      ctx.moveTo(padding, padding);
      ctx.lineTo(padding, height - padding);
      ctx.stroke();

      // Draw data points and lines
      ctx.beginPath();
      ctx.moveTo(padding, height - padding - data[0] * yAxisRatio);
      for (let i = 1; i < data.length; i++) {
        const x = padding + (width - 2 * padding) * (i / (data.length - 1));
        const y = height - padding - data[i] * yAxisRatio;
        ctx.lineTo(x, y);
        ctx.arc(x, y, 2, 0, Math.PI * 2);
      }
      ctx.strokeStyle = "rgb(75, 192, 192)";
      ctx.stroke();

      // Add labels
      ctx.fillStyle = "black";
      ctx.font = "12px Arial";
      for (let i = 0; i < xAxisValues.length; i++) {
        const x = padding + (width - 2 * padding) * (i / (data.length - 1));
        ctx.fillText(xAxisValues[i], x - 10, height - padding + 15);
      }


      ctx.save();
      ctx.rotate(-Math.PI / 2);
      ctx.fillText("Sales", -height / 2, 10);
      ctx.restore();

      // Add title
      ctx.textAlign = "center";
      ctx.font = "16px Arial";
      ctx.fillText(title, width / 2, 12);
    }

    // Initial update of the line graph with the default selected value
    updateLineGraph("net-sales");
  });



  document.addEventListener("DOMContentLoaded", function() {
    const totalSoldTickets = document.getElementById("total-sold-tickets");
    const totalSoldTicketsWeek = document.getElementById("total-sold-tickets-week");
    const fullSoldTicketsMonth = document.getElementById("full-sold-tickets-month");
    const totalIssuedTickets = document.getElementById("total-issued-tickets");
  
    // Set ticket details
    totalSoldTickets.textContent = "150";
    totalSoldTicketsWeek.textContent = "50";
    fullSoldTicketsMonth.textContent = "120";
    totalIssuedTickets.textContent = "Total Issued Tickets: 500";
  
    const canvas = document.getElementById("pie-chart-canvas");
    const ctx = canvas.getContext("2d");
  
    const soldTickets = 150;
    const remainingTickets = 350;
  
    const totalTickets = soldTickets + remainingTickets;
  
    const soldTicketsAngle = (soldTickets / totalTickets) * 2 * Math.PI;
    const remainingTicketsAngle = (remainingTickets / totalTickets) * 2 * Math.PI;
  
    ctx.beginPath();
    ctx.moveTo(canvas.width / 2, canvas.height / 2);
    ctx.arc(canvas.width / 2, canvas.height / 2, canvas.height / 2, 0, soldTicketsAngle);
    ctx.fillStyle = "rgb(255, 211, 99)";
    ctx.fill();
  
    ctx.beginPath();
    ctx.moveTo(canvas.width / 2, canvas.height / 2);
    ctx.arc(
      canvas.width / 2,
      canvas.height / 2,
      canvas.height / 2,
      soldTicketsAngle,
      soldTicketsAngle + remainingTicketsAngle
    );
    ctx.fillStyle = "rgb(214, 17, 17)";
    ctx.fill();

// Calculate the position for the label
const labelX = canvas.width / 2 + Math.cos(soldTicketsAngle + remainingTicketsAngle / 2) * (canvas.height / 2 - 20);
const labelY = canvas.height / 2 + Math.sin(soldTicketsAngle + remainingTicketsAngle / 2) * (canvas.height / 2 - 20);

// Set the style and position for the label
ctx.fillStyle = "black";
ctx.textAlign = "center";
ctx.textBaseline = "middle";
ctx.font = "14px Arial";

// Write the label text
ctx.fillText("Unsold", labelX + 10, labelY + 10);
ctx.fillText("Sold", labelX + 65, labelY + 80);
  });
  
  
