<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/discography">
        <html>
            <body>
                <h3>Imagine Dragons Discography</h3>
                <table border="1">
                    <tr bgcolor="lightgrey">
                        <th>Name</th>
                        <th>Year</th>
                        <th>Sales</th>
                        <th>Length</th>
                    </tr>
                    <xsl:for-each select="album">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="year"/></td>
                            <td><xsl:value-of select="sales"/></td>
                            <td><xsl:value-of select="length"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>