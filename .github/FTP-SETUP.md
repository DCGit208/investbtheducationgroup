# FTP Auto-Deploy Setup

This repository automatically deploys to your FTP server on every push to `main`.

## Required GitHub Secrets

Go to your repository settings and add these secrets:

**Settings → Secrets and variables → Actions → New repository secret**

### Required Secrets:

1. **FTP_SERVER**
   - Your FTP server address (e.g., `ftp.yourdomain.com` or `123.45.67.89`)

2. **FTP_USERNAME**
   - Your FTP username

3. **FTP_PASSWORD**
   - Your FTP password

4. **FTP_SERVER_DIR**
   - The directory path on your FTP server (e.g., `/public_html/` or `/www/` or `/`)
   - Must end with a trailing slash `/`

## How to Add Secrets

1. Go to: https://github.com/DCGit208/investbtheducationgroup/settings/secrets/actions
2. Click **"New repository secret"**
3. Add each of the 4 secrets above
4. Click **"Add secret"**

## After Setup

Once all 4 secrets are configured:
- Every push to `main` will automatically trigger deployment
- Check deployment status in the **Actions** tab
- Files excluded from deployment: `.git`, `.DS_Store`, `Backups/`, markdown files

## Manual Deployment

To manually trigger deployment:
1. Go to **Actions** tab
2. Select **"Deploy to FTP"** workflow
3. Click **"Run workflow"**
4. Select `main` branch and click **"Run workflow"**

## First Time Deployment

After adding secrets, push any change to trigger the first deployment:

```bash
git commit --allow-empty -m "chore: trigger initial FTP deployment"
git push origin main
```

Then monitor progress at:
https://github.com/DCGit208/investbtheducationgroup/actions
