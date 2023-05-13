<?xml version="1.0" encoding="UTF-8"?>

<xsl:transform version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            </head>
            <body style="background-color: lightblue;">
                <h1 class="ms-3 mt-5 mb-5">Breakfast Menu</h1>
                <div class="ms-3 mt-3 d-flex flex-wrap">
                    <xsl:for-each select="breakfast_menu/food">

                            <div class="card me-3 hover" style="width: 18rem; background-color: #F2D2BD;">
                                <div class="card-body">
                                    <h5 class="card-title"><xsl:value-of select="name"/></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Price : <xsl:value-of select="price"/></h6>
                                    <h6 class="card-subtitle mb-2 text-muted"><xsl:value-of select="calories"/> Calories</h6>
                                    <p class="card-text"><xsl:value-of select="description"/></p>
                                </div>
                            </div>
                    </xsl:for-each>
                </div>
            </body>
        </html>
    </xsl:template>

</xsl:transform>