<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css-grid.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display:400,600|Share+Tech+Mono|Turret+Road:400,800&display=swap"
      rel="stylesheet"
    />
    <title>CSS Grid | CSS grid cheatsheet</title>
  </head>
  <body>
    <main>
      <section class="header">
        <div class="container">
          <h1>CSS grid cheatsheet</h1>
          <nav>
            <ul class="menu-main">
              <li class="menu-main__item">About</li>
              <li class="menu-main__item">About</li>
              <li class="menu-main__item">About</li>
            </ul>
          </nav>
        </div>
      </section>
      <section class="grid-container">
        <h2>Grid container</h2>
        <div class="property">
          <div class="property__name">display</div>
          <div class="property__values">
            <div class="value">grid</div>
            <div class="value">inline-grid</div>
          </div>
          <div class="property__code">
            <pre rel="css">
                <code>
.grid {
  display: grid;
}
                </code>
              </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid display">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property GRID-TEMPLATE-COLUMNS/ROWS -->
        <div class="property">
          <div class="property__name">grid-template-(columns | rows)</div>
          <div class="property__values">
            <div class="value">&lt;track-size&gt;</div>
            <div class="value">&lt;line-name&gt;</div>
          </div>
          <div class="property__code">
            <pre rel="css">
                  <code>
.grid-template-columns-rows {
  grid-template-columns: 40% 1fr;
  grid-template-rows: repeat(2, 1fr);
}
                  </code>
                </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid grid-template-columns-rows">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property GRID-TEMPLATE-AREAS -->
        <div class="property">
          <div class="property__name">grid-template-areas</div>
          <div class="property__values">
            <div class="value">&lt;grid-area-name&gt;</div>
            <div class="value">.</div>
            <div class="value">none</div>
          </div>
          <div class="property__code">
            <pre rel="css">
            <code>
.grid-template-areas {
  grid-template-columns: repeat(2, 1fr) 0.5fr;
  grid-template-rows: auto;
  grid-template-areas:
    'header header header'
    'body body sidebar'
    'footer footer footer';
}

.grid-item {
  grid-area: header;
}
            </code>
          </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid grid-template-areas">
                <div class="grid-item header">Header</div>
                <div class="grid-item body">Body</div>
                <div class="grid-item sidebar">Sidebar</div>
                <div class="grid-item footer">Footer</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property GRID-TEMPLATE -->
        <div class="property">
          <div class="property__name">grid-template</div>
          <div class="property__values">
            <div class="value">none</div>
            <div class="value"
              >&lt;grid-template-rows&gt; / &lt;grid-template-columns&gt;</div
            >
          </div>
          <div class="property__code">
            <pre rel="css">
              <code>
.grid-template {
  grid-template: 1fr 2fr / 0.8fr 1.2fr;
}
              </code>
            </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid grid-template">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property GRID-COLUMN/ROW-GAP -->
        <div class="property">
          <div class="property__name">grid-(column | row)-gap</div>
          <div class="property__values">
            <div class="value">&lt;line-size&gt;</div>
          </div>
          <div class="property__code">
            <pre rel="css">
                <code>
.grid-column-row-gap {
  grid-column-gap: 20px;
  grid-row-gap: 10px;
}
                </code>
              </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid grid-column-row-gap">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property GRID-GAP-->
        <div class="property">
          <div class="property__name">grid-gap</div>
          <div class="property__values">
            <div class="value"
              >&lt;grid-row-gap&gt; &lt;grid-column-gap&gt;</div
            >
          </div>
          <div class="property__code">
            <pre rel="css">
                  <code>
.grid-gap {
  grid-gap: 20px 10px;
}
                  </code>
                </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid grid-gap">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property JUSTIFY-ITEMS -->
        <div class="property">
          <div class="property__name">justify-items</div>
          <div class="property__values">
            <div class="value">start</div>
            <div class="value">end</div>
            <div class="value">center</div>
            <div class="value">strech</div>
          </div>
          <div class="property__code">
            <pre rel="css">
                    <code>
.justify-items {
  justify-items: start;
}
              </code>
            </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid justify-items">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property ALIGN-ITEMS -->
        <div class="property">
          <div class="property__name">align-items</div>
          <div class="property__values">
            <div class="value">start</div>
            <div class="value">end</div>
            <div class="value">center</div>
            <div class="value">strech</div>
          </div>
          <div class="property__code">
            <pre rel="css">
              <code>
.align-items {
  align-items: end;
}
              </code>
            </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid align-items">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property PLACE-ITEMS -->
        <div class="property">
          <div class="property__name">place-items</div>
          <div class="property__values">
            <div class="value">&lt;align-items&gt; &lt;justify-items&gt;</div>
          </div>
          <div class="property__code">
            <pre rel="css">
                <code>
.place-items {
  place-items: start / end;
}
                </code>
              </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid place-items">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property JUSTIFY-CONTENT -->
        <div class="property">
          <div class="property__name">justify-content</div>
          <div class="property__values">
            <div class="value">start</div>
            <div class="value">end</div>
            <div class="value">center</div>
            <div class="value">stretch</div>
            <div class="value">space-around</div>
            <div class="value">space-between</div>
            <div class="value">space-evently</div>
          </div>
          <div class="property__code">
            <pre rel="css">
                  <code>
.justify-content {
  justify-content: space-between;
}
                  </code>
                </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid justify-content">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property ALIGN-CONTENT -->
        <div class="property">
          <div class="property__name">align-content</div>
          <div class="property__values">
            <div class="value">start</div>
            <div class="value">end</div>
            <div class="value">center</div>
            <div class="value">stretch</div>
            <div class="value">space-around</div>
            <div class="value">space-between</div>
            <div class="value">space-evently</div>
          </div>
          <div class="property__code">
            <pre rel="css">
              <code>
.align-content {
  align-content: space-between;
}
              </code>
            </pre>
          </div>
          <div class="property__example">
            <div class="wrapper">
              <div class="grid align-content">
                <div class="grid-item">Item 1</div>
                <div class="grid-item">Item 2</div>
                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Property -->
      </section>
      <section class="grid-items">
        <h2>Grid items</h2>
      </section>
    </main>
  </body>
</html>
