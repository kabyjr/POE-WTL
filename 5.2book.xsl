<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<body>
    <h2>Books Sorted by Title</h2>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
        </tr>
        <xsl:for-each select="library/book">
            <xsl:sort select="title" order="ascending"/>
            <tr>
                <td><xsl:value-of select="title"/></td>
                <td><xsl:value-of select="author"/></td>
                <td><xsl:value-of select="year"/></td>
            </tr>
        </xsl:for-each>
    </table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>