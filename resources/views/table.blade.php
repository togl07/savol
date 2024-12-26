
@section('table')
<style>
      body {
          font-family: Arial, sans-serif;
          background-color: #f8f9fa;
          color: #333;
          margin: 0;
          padding: 20px;
      }
      .table-container {
          overflow-x: auto;
      }
      table {
          width: 100%;
          border-collapse: collapse;
          background-color: #ffffff;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }
      th, td {
          padding: 12px 15px;
          text-align: center;
          text-align: left;
          border: 1px solid #e9ecef;
      }
      th {
          background-color: #f1f3f5; /* Lighter gray for table header */
          font-weight: bold;
      }
      tr:nth-child(even) {
          background-color: #f8f9fa; /* Alternate row background */
      }
      tr:nth-child(odd) {
          background-color: #ffffff; /* White for contrast */
      }
      a {
          color: #007bff; /* Bootstrap blue for links */
          text-decoration: none;
      }
      a:hover {
          text-decoration: underline;
      }
      .status {
          font-weight: bold;
          text-transform: capitalize;
      }
      .status-upcoming {
          color: #007bff; /* Blue for upcoming */
      }
      .status-ended {
          color: #dc3545; /* Red for ended */
      }
  </style>
  <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Tasks</th>
                      <th>Start Time</th>
                      <th>Duration</th>
                      <th>Status</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><a href="competitions/1">Robocontest Round #99</a></td>
                      <td>-</td>
                      <td>25.12.2024 19:30</td>
                      <td>02:30:00</td>
                      <td class="status status-upcoming">Boshlanmagan</td>
                  </tr>
                  <tr>
                      <td><a href="#">Happy New Year | Robocontest Round #100</a></td>
                      <td>-</td>
                      <td>30.12.2024 19:30</td>
                      <td>02:30:00</td>
                      <td class="status status-upcoming">Boshlanmagan</td>
                  </tr>
              </tbody>
          </table>
      </div>

      <h2>Completed</h2>
      <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Tasks</th>
                      <th>Participants</th>
                      <th>Start Time</th>
                      <th>Duration</th>
                      <th>Status</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><a href="#">"Eng yaxshi dasturchi" Final bosqich</a></td>
                      <td>8</td>
                      <td>179</td>
                      <td>23.12.2024 19:00</td>
                      <td>03:00:00</td>
                      <td class="status status-ended">Ended</td>
                  </tr>
                  <tr>
                      <td><a href="#">Robocontest Round #98</a></td>
                      <td>8</td>
                      <td>1313</td>
                      <td>11.12.2024 19:30</td>
                      <td>02:20:00</td>
                      <td class="status status-ended">Ended</td>
                  </tr>
              </tbody>
          </table>
      </div>
@endsection
