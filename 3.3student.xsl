<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <xsl:for-each select="students/student">
        <div class="student">
            <p><strong>Name:</strong> <xsl:value-of select="name"/></p>
            <p><strong>Age:</strong> <xsl:value-of select="age"/></p>
            <p><strong>Course:</strong> <xsl:value-of select="course"/></p>
        </div>
    </xsl:for-each>
</body>
</html>

</xsl:template>
</xsl:stylesheet>