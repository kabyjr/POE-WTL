<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<body>
    <h2>Employee Salary Details</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>Bonus Eligible?</th>
        </tr>
        <xsl:for-each select="employees/employee">
            <tr>
                <td><xsl:value-of select="name"/></td>
                <td><xsl:value-of select="designation"/></td>
                <td><xsl:value-of select="salary"/></td>
                <td>
                    <xsl:if test="salary &gt; 80000">
                        Yes
                    </xsl:if>
                </td>
            </tr>
        </xsl:for-each>
    </table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>