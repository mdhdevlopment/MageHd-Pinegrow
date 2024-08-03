document.getElementById('page-speed-form').addEventListener('submit', function (event) {
    event.preventDefault();
    const url = document.getElementById('urlInput').value;
    const apiKey = 'AIzaSyCIq-J9QUOn9_32dtsAZEETXlpkR9085U4';
    const desktopUrl = `https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=${encodeURIComponent(url)}&key=${apiKey}&strategy=desktop`;
    const mobileUrl = `https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=${encodeURIComponent(url)}&key=${apiKey}&strategy=mobile`;

    document.getElementById('spinner').style.display = 'block';

    Promise.all([fetchPageSpeedData(desktopUrl, 'desktop'), fetchPageSpeedData(mobileUrl, 'mobile')])
        .then(() => {
            //window.location.href = 'http://localhost/magehd/page-speed/';
            window.location.href = '/page-speed/';
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('spinner').style.display = 'none';
        });
});

function fetchPageSpeedData(apiUrl, strategy) {
    return fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const fullPageImg = data.lighthouseResult.fullPageScreenshot.screenshot['data'];
            const performance = data.lighthouseResult.categories.performance.score * 100;
            const firstContentfulPaint = data.lighthouseResult.audits['first-contentful-paint'].displayValue;
            const speedIndex = data.lighthouseResult.audits['speed-index'].displayValue;
            const largestContentfulPaint = data.lighthouseResult.audits['largest-contentful-paint'].displayValue;
            const timeToInteractive = data.lighthouseResult.audits['interactive'].displayValue;
            const totalBlockingTime = data.lighthouseResult.audits['total-blocking-time'].displayValue;
            const cumulativeLayoutShift = data.lighthouseResult.audits['cumulative-layout-shift'].displayValue;

            const result = {
                fullPageImg,
                performance,
                firstContentfulPaint,
                speedIndex,
                largestContentfulPaint,
                timeToInteractive,
                totalBlockingTime,
                cumulativeLayoutShift
            };

            localStorage.setItem(strategy, JSON.stringify(result));
        });
}


// get data
$('.mobile-content.speed-content').hide();
$('.speed-view-btn').click(function () {
  $('.speed-view-btn').removeClass('active');
  $(this).addClass('active');
  const btnActiveId = $('.speed-view-btn.active').attr('id');
  $('.speed-content').hide();
  $('.speed-content#' + btnActiveId).show();
});

function fetchPageSpeedData(apiUrl, strategy) {
  return fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      const fullPageImg = data.lighthouseResult.fullPageScreenshot.screenshot['data'];
      const performance = data.lighthouseResult.categories.performance.score * 100;
      const firstContentfulPaint = data.lighthouseResult.audits['first-contentful-paint'].displayValue;
      const speedIndex = data.lighthouseResult.audits['speed-index'].displayValue;
      const largestContentfulPaint = data.lighthouseResult.audits['largest-contentful-paint'].displayValue;
      const timeToInteractive = data.lighthouseResult.audits['interactive'].displayValue;
      const totalBlockingTime = data.lighthouseResult.audits['total-blocking-time'].displayValue;
      const cumulativeLayoutShift = data.lighthouseResult.audits['cumulative-layout-shift'].displayValue;

      const result = {
        fullPageImg,
        performance,
        firstContentfulPaint,
        speedIndex,
        largestContentfulPaint,
        timeToInteractive,
        totalBlockingTime,
        cumulativeLayoutShift
      };

      localStorage.setItem(strategy, JSON.stringify(result));
    });
}

document.addEventListener('DOMContentLoaded', function () {
  const desktopResult = JSON.parse(localStorage.getItem('desktop'));
  const mobileResult = JSON.parse(localStorage.getItem('mobile'));

  if (desktopResult) {
    document.getElementById('desktopResult').innerHTML = generateResultHtml(
      desktopResult,
      'desktopChart1',
      'desktopChart2',
      'desktopChartText1',
      'desktopChartText2'
    );
    createPerformanceChart('desktopChart1', desktopResult.performance, 'desktopChartText1');
    createPerformanceChart('desktopChart2', desktopResult.performance, 'desktopChartText2');
  }
  if (mobileResult) {
    document.getElementById('mobileResult').innerHTML = generateResultHtml(
      mobileResult,
      'mobileChart1',
      'mobileChart2',
      'mobileChartText1',
      'mobileChartText2'
    );
    createPerformanceChart('mobileChart1', mobileResult.performance, 'mobileChartText1');
    createPerformanceChart('mobileChart2', mobileResult.performance, 'mobileChartText2');
  }
});

document.addEventListener('DOMContentLoaded', function() {
  const textValue = document.querySelector('.chart-text');

  let value = parseFloat(textValue.textContent).toFixed(0);
  textValue.textContent = value;
});
function generateResultHtml(data, chartId1, chartId2, chartTextId1, chartTextId2) {
  return `
          <div class="flex performance-chart">
            <div class="chart-content-wrap sm:w-12/12 md:w-6/12">
              <div class="chart-container">
                <div class="performace-chart-wrpper">
                  <canvas id="${chartId1}" class="performace-chart"></canvas>
                  <div class="chart-text" id="${chartTextId1}"></div>
                </div>
                <h3>Performance</h3>
                <h5>Values are estimated and may vary. The performance score is calculated directly from these metrics.See calculator.</h5>
                <div class="chart-color-info">
                  <div class="gray-dot-icon">0-49</div>
                  <div class="orange-dot-icon">50-80</div>
                  <div class="blue-dot-icon">90-100</div>
                </div>
              </div>
            </div>
            <div class="page-ss sm:w-12/12 md:w-6/12"> 
              <img src="${data.fullPageImg}" alt="Full Page" class="full-page-img">
            </div>
          </div>

            <div class="scores-wrapper">
              <div class="score-list">
                <div class="chart-container">
                  <canvas id="${chartId2}"></canvas>
                  <div class="chart-text" id="${chartTextId2}"></div>
                </div>
                <h4>Performance</h4>
              </div>
                <div class="score-list">
                <div class="chart-container">
                  <canvas id="${chartId2}"></canvas>
                  <div class="chart-text" id="${chartTextId2}"></div>
                </div>
                <h4>Accessibility</h4>
              </div>
                <div class="score-list">
                <div class="chart-container">
                  <canvas id="${chartId2}"></canvas>
                  <div class="chart-text" id="${chartTextId2}"></div>
                </div>
                <h4>Best Practice</h4>
              </div>
                <div class="score-list">
                <div class="chart-container">
                  <canvas id="${chartId2}"></canvas>
                  <div class="chart-text" id="${chartTextId2}"></div>
                </div>
                <h4>Performance</h4>
              </div>
            </div>


            <div class="metric-wrapper">
              <h3>Metrics</h3>
               <div class="metric-list">
                <div class="metric first-contentful-paint">
                  <div class="metric-dot">
                  </div>
                  <div class="metric-info">
                    <h4>First Contentful Paint</h4>
                    <p id="first-contentful-paint" class="metric-text">${data.firstContentfulPaint}</p>
                    <a href="#" class="speed-read-more">Read</a>
                  </div>
                </div>
                <div class="metric total-blocking-time">
                  <div class="metric-dot">
                  </div>
                  <div class="metric-info">
                    <h4>Total Blocking Time</h4>
                    <p id="total-blocking-time" class="metric-text">${data.totalBlockingTime}</p>
                    <a href="#" class="speed-read-more">Read</a>
                  </div>
                </div>
                <div class="metric speed-index">
                  <div class="metric-dot">
                  </div>
                  <div class="metric-info">
                    <h4>Speed Index</h4>
                    <p id="speed-index" class="metric-text">${data.speedIndex}</p>
                    <a href="#" class="speed-read-more">Read</a>
                  </div>
                </div>
                <div class="metric largest-contentful-paint">
                  <div class="metric-dot">
                  </div>
                  <div class="metric-info">
                    <h4>Largest Contentful Paint</h4>
                    <p id="largest-contentful-paint" class="metric-text">${data.largestContentfulPaint}</p>
                    <a href="#" class="speed-read-more">Read</a>
                  </div>
                </div>
                <div class="metric cumulative-layout-shift">
                  <div class="metric-dot">
                  </div>
                  <div class="metric-info">
                    <h4>Cumulative Layout Shift</h4>
                    <p id="cumulative-layout-shift" class="metric-text">${data.cumulativeLayoutShift}</p>
                    <a href="#" class="speed-read-more">Read</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="get-help-issue">
              <p>Get help to resolve your issue</p>
              <a href="/contact-us/" class="blue-btn"> <span>Get Start</span> <i class="fa-solid fa-arrow-right"></i> </a>
            </div>
        `;
}

// metric dot color

//First Contentful Paint
document.addEventListener('DOMContentLoaded', function () {
  const fcpValue = parseFloat(document.getElementById('first-contentful-paint').innerText);
  const metricDot = document.querySelector('.first-contentful-paint .metric-dot');
  const metricText = document.querySelector('.first-contentful-paint .metric-text');
  if (fcpValue > 0.6) {
    metricDot.classList.add('blue-dot-icon');
    metricText.classList.add('blue-text');
  } else if (fcpValue > 0.3) {
    metricDot.classList.add('orange-dot-icon');
    metricText.classList.add('orange-text');
  } else {
    metricDot.classList.add('gray-dot-icon');
    metricText.classList.add('gray-text');
  }
});

//Total Blocking Time
document.addEventListener('DOMContentLoaded', function () {
  const fcpValue = parseFloat(document.getElementById('total-blocking-time').innerText);
  console.log(fcpValue);
  const metricDot = document.querySelector('.total-blocking-time .metric-dot');
  const metricText = document.querySelector('.total-blocking-time .metric-text');
  if (fcpValue < 200) {
    metricDot.classList.add('blue-dot-icon');
    metricText.classList.add('blue-text');
  } else if (fcpValue < 500) {
    metricDot.classList.add('orange-dot-icon');
    metricText.classList.add('orange-text');
  } else {
    metricDot.classList.add('gray-dot-icon');
    metricText.classList.add('gray-text');
  }
});

//Speed Index
document.addEventListener('DOMContentLoaded', function () {
  const fcpValue = parseFloat(document.getElementById('speed-index').innerText);
  const metricDot = document.querySelector('.speed-index .metric-dot');
  const metricText = document.querySelector('.speed-index .metric-text');
  if (fcpValue > 6) {
    metricDot.classList.add('blue-dot-icon');
    metricText.classList.add('blue-text');
  } else if (fcpValue > 3) {
    metricDot.classList.add('orange-dot-icon');
    metricText.classList.add('orange-text');
  } else {
    metricDot.classList.add('gray-dot-icon');
    metricText.classList.add('gray-text');
  }
});

//Largest Contentful Paint
document.addEventListener('DOMContentLoaded', function () {
  const fcpValue = parseFloat(document.getElementById('largest-contentful-paint').innerText);
  const metricDot = document.querySelector('.largest-contentful-paint .metric-dot');
  const metricText = document.querySelector('.largest-contentful-paint .metric-text');
  if (fcpValue > 6) {
    metricDot.classList.add('blue-dot-icon');
    metricText.classList.add('blue-text');
  } else if (fcpValue > 3) {
    metricDot.classList.add('orange-dot-icon');
    metricText.classList.add('orange-text');
  } else {
    metricDot.classList.add('gray-dot-icon');
    metricText.classList.add('gray-text');
  }
});

// Cumulative Layout Shift
document.addEventListener('DOMContentLoaded', function () {
  const fcpValue = parseFloat(document.getElementById('cumulative-layout-shift').innerText);
  const metricDot = document.querySelector('.cumulative-layout-shift .metric-dot');
  const metricText = document.querySelector('.cumulative-layout-shift .metric-text');
  if (fcpValue < 0.3) {
    metricDot.classList.add('blue-dot-icon');
    metricText.classList.add('blue-text');
  } else if (fcpValue < 0.6) {
    metricDot.classList.add('orange-dot-icon');
    metricText.classList.add('orange-text');
  } else {
    metricDot.classList.add('gray-dot-icon');
    metricText.classList.add('gray-text');
  }
});

function createPerformanceChart(chartId, performanceScore, textId) {
  const ctx = document.getElementById(chartId).getContext('2d');
  const chartText = document.getElementById(textId);
  chartText.textContent = `${performanceScore}`;

  let backgroundColor;
  if (performanceScore >= 90) {
    backgroundColor = '#3B65AF';
  } else if (performanceScore >= 50) {
    backgroundColor = '#FF5622';
  } else {
    backgroundColor = '#666666';
  }

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Performance Score', 'Remaining'],
      datasets: [{
        data: [performanceScore, 100 - performanceScore],
        backgroundColor: [backgroundColor, '#F2F2F2'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        tooltip: {
          enabled: false
        },
        legend: {
          display: false
        }
      },
      cutout: '70%'
    }
  });
}