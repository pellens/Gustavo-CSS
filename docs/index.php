<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Gustavo CSS</title>

        <link rel="stylesheet" href="/dist/style.css" />
        <style>
            :root {
                --font-size: 14px;
                --g-color-primary: #8f40c2;
                --button-g-color-primary: #d0c1db;
                --border-radius: 20px;
            }
        </style>
    </head>
    <body>

        <div class="container">

        <i onclick="document.getElementsByTagName('html')[0].setAttribute('data-theme', 'dark');" class="uil uil-moon"></i>
        <i onclick="document.getElementsByTagName('html')[0].setAttribute('data-theme', '');" class="uil uil-sun"></i>

        <h1>Gustavo CSS</h1>

        <h2>Components</h2>

        <section>
            <h3>Progress</h3>
            <div class="codePreview">
<progress class="g-progress"></progress>
<progress class="g-progress g-progress--primary" value="10" min="0" max="100">10%</progress>
<progress class="g-progress g-progress--secondary" value="20" min="0" max="100">20%</progress>
<progress class="g-progress g-progress--warning" value="40" min="0" max="100">40%</progress>
<progress class="g-progress g-progress--success" value="60" min="0" max="100">60%</progress>
<progress class="g-progress g-progress--error" value="80" min="0" max="100">80%</progress>
            </div>

            <div class="codePreview">
<progress class="g-progress g-progress--primary g-progress--tiny" value="80" min="0" max="100"></progress>
<progress class="g-progress g-progress--primary g-progress--small" value="80" min="0" max="100"></progress>
<progress class="g-progress g-progress--primary g-progress--default" value="80" min="0" max="100"></progress>
<progress class="g-progress g-progress--primary g-progress--big" value="80" min="0" max="100"></progress>
<progress class="g-progress g-progress--primary g-progress--huge" value="80" min="0" max="100"></progress>
            </div>
        </section>

        



        <section>

            <h3>Buttons</h3>
            
            <div class="codePreview">
            <?php include("templates/components/buttons/buttons-input.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/buttons/buttons.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/buttons/buttons-outline.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/buttons/buttons-sizes.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/buttons/buttons-icons.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/buttons/buttons-states.php");?>
            </div>

        </section>

        <section>

            <h3>Links</h3>

            <div class="codePreview">
            <?php include("templates/components/links/links.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/links/links-icons.php");?>
            </div>

        </section>

        <section>

            <h3>Tags</h3>
            
            <div class="codePreview">
            <?php include("templates/components/tags/tags.php");?>
            </div>

            <div class="codePreview">
            <?php include("templates/components/tags/tags-sizes.php");?>
            </div>

        </section>

        <section>
            <h3>Modal</h3>

            <div class="codePreview">
                <!--<div class="g-modal">
                    <div class="g-modal__holder">
                        <div class="g-modal__header">
                            <div class="g-flex g-space-between g-align-items-center">
                                <div class="g-modal__title">Confirm this action</div>
                                <div class="g-button g-button--icon-only"><i class="uil uil-multiply"></i></div>
                            </div>
                        </div>
                        <div class="g-modal__content">
                            <p class="g-text-center">Are you sure you want to delete this item?</p>
                        </div>
                        <div class="g-modal__footer">
                            <div class="g-flex g-space-between g-align-items-center">
                                <button class="g-button g-button--error">Yes, delete!</button>
                                <button class="g-button g-button--outline">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="g-modal">
                    <div class="g-modal__holder">
                        <div class="g-modal__header">
                            <div class="g-flex g-space-between g-align-items-center">
                                <div class="g-modal__title">Confirm this action</div>
                                <div class="g-button g-button--icon-only"><i class="uil uil-multiply"></i></div>
                            </div>
                        </div>
                        <div class="g-modal__content">
                            <p class="g-text-center">Are you sure you want to delete this item?</p>
                        </div>
                        <div class="g-modal__footer">
                            <button class="g-button g-button--error g-w-100">Yes, delete!</button>
                        </div>
                    </div>
                </div>

                <div class="g-modal g-modal--pane">
                    <div class="g-modal__holder">
                        <div class="g-modal__header">Header</div>
                        <div class="g-modal__content">qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/></div>
                        <div class="g-modal__footer">Footer</div>
                    </div>
                </div>-->

                <!--<div class="g-modal g-modal--fullscreen">
                    <div class="g-modal__holder">
                        <div class="g-modal__header">Header</div>
                        <div class="g-modal__content">qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/>qmdslfjqsmdlk<br/></div>
                        <div class="g-modal__footer">Footer</div>
                    </div>
                </div>-->
            </div>
        </section>

        <section>
            <h3>Tabs</h3>
            <div class="codePreview">
<nav class="g-tabs">
    <ul>
        <li class="g-tabs__item g-tabs__item--active">Tabname</li>
        <li class="g-tabs__item">Tabname</li>
        <li class="g-tabs__item">Tabname</li>
        <li class="g-tabs__item">Tabname</li>
        <li class="g-tabs__item">Tabname</li>
    </ul>
</nav>
</div>

<div class="codePreview">
<nav class="g-tabs g-tabs--end">
    <ul>
        <li class="g-tabs__item g-color--error"><i class="uil uil-folder"></i> Tabname</li>
        <li class="g-tabs__item"><i class="uil uil-folder"></i> Tabname</li>
        <li class="g-tabs__item g-tabs__item--active"><i class="uil uil-folder"></i> Tabname</li>
        <li class="g-tabs__item"><i class="uil uil-folder"></i> Tabname</li>
        <li class="g-tabs__item"><i class="uil uil-folder"></i> Tabname</li>
    </ul>
</nav>
</div>

<div class="codePreview">
<nav class="g-tabs g-tabs--center">
    <ul>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-after">Tabname <i class="uil uil-folder"></i></li>
    </ul>
</nav>
</div>

<div class="codePreview">
<nav class="g-tabs">
    <ul>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>
        <li class="g-tabs__item g-tabs__item--icon-only"><i class="uil uil-folder"></i></li>

        <li class="g-tabs__item"><button class="g-button g-button--primary g-button--tiny">Button</button></li>
    </ul>
</nav>
            </div>
        </section>

        <section>
            <h2>Helpers</h2>
            <div class="codePreview">
<p class="g-color--primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--error">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--success">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--warning">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p class="g-color--default">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

<i class="g-color--success uil uil-check-circle"></i>
<i class="g-color--warning uil uil-exclamation-triangle"></i>
<i class="g-color--error uil uil-exclamation-circle"></i>
            </div>
        </section>

        <h2>Adjust theming</h2>
        <pre>
            &lt;style>
                :root {
                    --color-primary: purple;
                }
            &lt;/style>
        </pre>

    </div>

        <script>
            var codePreviews = document.querySelectorAll(".codePreview");
            codePreviews.forEach(element => {
                const result = element.innerHTML.split(/\r?\n/);
                var html = "";
                result.forEach(line => {
                    html+=line.replaceAll("<","&lt")+"\n";
                })
                element.innerHTML += "<details><summary>Show code</summary><pre class='lolight'><code>"+html.trim()+"</code></pre></details>"
            })
        </script>

        <style>
            .container {
                width: 100%;
                max-width: 1000px;
                margin: 0 auto;
            }

            details {
                margin-top: 2rem;
            }

            .codePreview {
                border: 1px solid #eee;
                padding: 2rem;
                margin-bottom: 2rem;
                border-radius: 4px;
            }
            pre {
                background-color: #130c38;
                font-family: 'Courier New', Courier, monospace;
                font-size: 14px;
                line-height: 22px;
                padding: 1rem;
                border-radius: 8px;
                margin-top: 2rem;
            }

            .ll-nam {
                color: #858991;
            }
            .ll-key {
                color: orange;
                font-weight: normal;
            }
            .ll-pct {
                color: #CCC;
            }
            .ll-str {
                font-weight: 600;
            }
        </style>

        <script src="/docs/lolight-1.4.0.min.js"></script>
    </body>
</html>