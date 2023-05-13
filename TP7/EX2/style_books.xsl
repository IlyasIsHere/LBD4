<?xml version="1.0" encoding="UTF-8"?>

<xsl:transform version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <!-- Question 1 -->
    <xsl:template match="/">
        <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            </head>
            <body style="background-color: #E6E6FA;">
                <div class="container">
                    <h1 class="ms-3 mt-5 mb-5">Books</h1>
                    <div class="ms-3 mt-3 d-flex flex-wrap">
                        <xsl:for-each select="bookstore/book">

                            <div class="card me-3 hover" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                    <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                    <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                    <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                    <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                    <ul style="margin-left: -10px;">
                                        <xsl:for-each select="author">
                                            <li><xsl:value-of select="."/></li>
                                        </xsl:for-each>
                                    </ul>
                                    <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                    <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                </div>
                            </div>
                        </xsl:for-each>
                    </div>
                </div>
            </body>
        </html>
    </xsl:template>

    <!-- Question 2 (Rearranging books according to category -->
    <xsl:template match="/">
        <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            </head>
            <body style="background-color: #E6E6FA;">
                <div class="container">
                    <h1 class="ms-3 mt-5 mb-5">Livres (par catégorie)</h1>
                    <div class="ms-3 mt-3">
                        <div class="d-flex flex-wrap">
                            <xsl:for-each select="bookstore/book[category = 'cooking']">

                                <div class="card me-3 hover" style="width: 18rem; background-image: url('cooking.jpg'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                        <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                        <ul style="margin-left: -10px;">
                                            <xsl:for-each select="author">
                                                <li><xsl:value-of select="."/></li>
                                            </xsl:for-each>
                                        </ul>
                                        <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>

                        <div class="d-flex flex-wrap">
                            <xsl:for-each select="bookstore/book[category = 'children']">

                                <div class="card me-3 hover" style="width: 18rem; background-image: url('children.jpg'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                        <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                        <ul style="margin-left: -10px;">
                                            <xsl:for-each select="author">
                                                <li><xsl:value-of select="."/></li>
                                            </xsl:for-each>
                                        </ul>
                                        <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>

                        <div class="d-flex flex-wrap">
                            <xsl:for-each select="bookstore/book[category = 'fiction']">

                                <div class="card me-3 hover text-white" style="width: 18rem; background-image: url('fiction.jpg'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                        <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                        <ul style="margin-left: -10px;">
                                            <xsl:for-each select="author">
                                                <li><xsl:value-of select="."/></li>
                                            </xsl:for-each>
                                        </ul>
                                        <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>


                        <div class="d-flex flex-wrap">
                            <xsl:for-each select="bookstore/book[category = 'web']">

                                <div class="card me-3 hover text-white" style="width: 18rem; background-image: url('web.jpg'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                        <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                        <ul style="margin-left: -10px;">
                                            <xsl:for-each select="author">
                                                <li><xsl:value-of select="."/></li>
                                            </xsl:for-each>
                                        </ul>
                                        <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>
                    </div>
                </div>
            </body>
        </html>
    </xsl:template>

    <!-- Question 3 (par prix croissant) -->
    <xsl:template match="/">
        <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            </head>
            <body style="background-color: #E6E6FA;">
                <div class="container">
                    <h1 class="ms-3 mt-5 mb-5">Livres (par catégorie et par prix croissant)</h1>
                    <div class="ms-3 mt-3">
                        <div class="d-flex flex-wrap">
                            <xsl:for-each select="bookstore/book[category = 'cooking']">
                                <xsl:sort select="price" data-type="number"/>
                                <div class="card me-3 hover" style="width: 18rem; background-image: url('cooking.jpg'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                        <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                        <ul style="margin-left: -10px;">
                                            <xsl:for-each select="author">
                                                <li><xsl:value-of select="."/></li>
                                            </xsl:for-each>
                                        </ul>
                                        <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>

                        <div class="d-flex flex-wrap">
                            <xsl:for-each select="bookstore/book[category = 'children']">
                                <xsl:sort select="price" data-type="number"/>
                                <div class="card me-3 hover" style="width: 18rem; background-image: url('children.jpg'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                        <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                        <ul style="margin-left: -10px;">
                                            <xsl:for-each select="author">
                                                <li><xsl:value-of select="."/></li>
                                            </xsl:for-each>
                                        </ul>
                                        <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>

                        <div class="d-flex flex-wrap">
                            <xsl:for-each select="bookstore/book[category = 'fiction']">
                                <xsl:sort select="price" data-type="number"/>
                                <div class="card me-3 hover text-white" style="width: 18rem; background-image: url('fiction.jpg'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                        <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                        <ul style="margin-left: -10px;">
                                            <xsl:for-each select="author">
                                                <li><xsl:value-of select="."/></li>
                                            </xsl:for-each>
                                        </ul>
                                        <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>


                        <div class="d-flex flex-wrap">
                            <xsl:for-each select="bookstore/book[category = 'web']">
                                <xsl:sort select="price" data-type="number"/>
                                <div class="card me-3 hover text-white" style="width: 18rem; background-image: url('web.jpg'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title"><xsl:value-of select="title"/></h5>
                                        <h6 class="card-subtitle mb-2 text-info">Language : <xsl:value-of select="title/@lang"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Category : <xsl:value-of select="category"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Year : <xsl:value-of select="year"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Authors : </h6>
                                        <ul style="margin-left: -10px;">
                                            <xsl:for-each select="author">
                                                <li><xsl:value-of select="."/></li>
                                            </xsl:for-each>
                                        </ul>
                                        <h6 class="card-subtitle mb-2 text-primary">Publisher : <xsl:value-of select="publisher"/></h6>
                                        <h6 class="card-subtitle mb-2 text-primary">Price : <xsl:value-of select="price"/>$</h6>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>
                    </div>
                </div>
            </body>
        </html>
    </xsl:template>

</xsl:transform>


<!-- TODO -->