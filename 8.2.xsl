<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<body>
    <h2>Employees with Salary Above 80,000</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>
        <xsl:for-each select="employees/employee[salary &gt; 80000]">
            <tr>
                <td><xsl:value-of select="name"/></td>
                <td><xsl:value-of select="designation"/></td>
                <td><xsl:value-of select="salary"/></td>
            </tr>
        </xsl:for-each>
    </table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>